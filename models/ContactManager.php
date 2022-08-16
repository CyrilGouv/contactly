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

}