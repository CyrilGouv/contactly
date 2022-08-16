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

}