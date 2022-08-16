<?php
require( 'models/Database.php' );
require( 'models/Contact.php' );


class ContactManager extends Database {

    private $contacts;

    public function addContact( $contact ) {
        $this->contacts[] = $contact;
    }

    public function getContacts() {
        return $this->contacts;
    }

    public function loadContacts() {
        $req = $this->getDB()->prepare( 'SELECT * FROM contacts ORDER BY lastname ASC' );
        $req->execute();

        $contacts = $req->fetchAll( PDO::FETCH_ASSOC );
        $req->closeCursor();

        foreach( $contacts as $contact ) {
            $singleContact= new Contact( $contact['id'], $contact['firstName'], $contact['lastName'], $contact['location'], $contact['phone'], $contact['type'], $contact['photo'] );
            $this->addContact( $singleContact );
        }
    }

    public function addContactDB( $firstName, $lastName, $location, $phone, $type, $avatar ) {
        $req = $this->getDB()->prepare( 'INSERT INTO contacts( firstName, lastName, location, phone, type, photo ) VALUES( :firstName, :lastName, :location, :phone, :type, :photo )' );
        $req->bindValue( ':firstName', $firstName, PDO::PARAM_STR );
        $req->bindValue( ':lastName', $lastName, PDO::PARAM_STR );
        $req->bindValue( ':location', $location, PDO::PARAM_STR );
        $req->bindValue( ':phone', $phone, PDO::PARAM_STR );
        $req->bindValue( ':type', $type, PDO::PARAM_STR );
        $req->bindValue( ':photo', $avatar, PDO::PARAM_STR );
        $res = $req->execute();
        $req->closeCursor();

        if ( $res > 0 ) {
            $contact = new Contact( $this->getDB()->lastInsertId(), $firstName, $lastName, $location, $phone, $type, $avatar );
            $this->addContact( $contact );
        }
    }

}