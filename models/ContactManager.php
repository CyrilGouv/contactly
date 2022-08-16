<?php

class ContactManager {

    private $contacts;

    public function addContact( $contact ) {
        $this->contacts[] = $contact;
    }

    public function getContacts() {
        return $this->contacts;
    }

}