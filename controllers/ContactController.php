<?php

require_once( 'models/ContactManager.php' );


class ContactController {

    private $contactManager;

    public function __construct() {
        $this->contactManager = new ContactManager();
        $this->contactManager->loadContacts();
    }

    public function displayContacts() {
        $contacts = $this->contactManager->getContacts();
        require( 'views/frontpage.php' );
    }

    public function addNewContact() {
        require( 'views/contacts/add.php' );
    }

    public function addValidation() {
        $firstName = htmlspecialchars( $_POST['firstName'] );
        $lastName = htmlspecialchars( $_POST['lastName'] );
        $location = htmlspecialchars( $_POST['location'] );
        $phone = htmlspecialchars( $_POST['phone'] );
        $type = htmlspecialchars( $_POST['type'] );
        $photo = $_FILES['photo'];

        $pathToImage = 'public/assets/images/contacts/';
        $avatar = $this->addImage( $photo, $pathToImage );

        $this->contactManager->addContactDB( $firstName, $lastName, $location, $phone, $type, $avatar );

        $_SESSION['alert_msg'] = [
            'type' => 'success',
            'text' => "We are successfuly added your new contact",
        ];

        header('Location: ' . SITE_URL);
    }

    public function editContact( $id ) {
        $contact = $this->contactManager->getContactById( $id );
        require( 'views/contacts/edit.php' );
    }

    public function editValidation() {
        $id = htmlspecialchars( $_POST['contactId'] );
        $firstName = htmlspecialchars( $_POST['firstName'] );
        $lastName = htmlspecialchars( $_POST['lastName'] );
        $location = htmlspecialchars( $_POST['location'] );
        $phone = htmlspecialchars( $_POST['phone'] );
        $type = htmlspecialchars( $_POST['type'] );
        $photo = $_FILES['photo'];
        $currentPhoto = $this->contactManager->getContactById( $id )->getPhoto();

        if ( $photo['size'] > 0 ) {
            unlink( 'public/assets/images/contacts/' . $currentPhoto );
            $pathToImage = 'public/assets/images/contacts/';
            $newImageToAdd = $this->addImage( $photo, $pathToImage );
        } else {
            $newImageToAdd = $currentPhoto;
        }

        $this->contactManager->editContactDB( $id, $firstName, $lastName, $location, $phone, $type, $newImageToAdd );

        $_SESSION['alert_msg'] = [
            'type' => 'success',
            'text' => "Your contact is edited!",
        ];

        header('Location: ' . SITE_URL);
    }

    public function removeContact( $id ) {
        // Remove photo
        $photo = $this->contactManager->getContactById( $id )->getPhoto();
        unlink( 'public/assets/images/contacts/' . $photo );

        $this->contactManager->removeContactDB( $id );

        $_SESSION['alert_msg'] = [
            'type' => 'success',
            'text' => "Your contact is removed!",
        ];

        header('Location: ' . SITE_URL);
    }

    private function addImage( $file, $dir ) {
        if ( !isset( $file['name'] ) || empty( $file['name'] ) ) {
            throw new Exception("You must add an image");
        }

        if ( !file_exists( $dir ) ) mkdir( $dir, 0777 );

        $extension = strtolower( pathinfo( $file['name'], PATHINFO_EXTENSION ) );
        $random = rand(0, 99999);
        $target_file = $dir . $random . '_' . $file['name'];

        if ( !getimagesize( $file['tmp_name'] ) )
            throw new Exception("File is not an image");
        if ( $extension !== 'jpg' && $extension !== 'jpeg' && $extension !== 'png' && $extension !== 'webp' )
            throw new Exception("Only image is allowed");
        if ( file_exists( $target_file ) )
            throw new Exception("File exists aleady");
        if ( $file['size'] > 500000 )
            throw new Exception("Image is too big");
        if ( !move_uploaded_file( $file['tmp_name'], $target_file ) )
            throw new Exception("A problem is occured");
        else
            return ( $random . '_' . $file['name'] );

    }

}