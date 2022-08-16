<?php

class Contact {

    private $id;
    private $firstName;
    private $lastName;
    private $location;
    private $phone;
    private $type;
    private $photo;

    public function __construct( $id, $firstName, $lastName, $location, $phone, $type, $photo ) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->location = $location;
        $this->phone = $phone;
        $this->type = $type;
        $this->photo = $photo;
    }


    public function getId() { return $this->id; }
    public function getFirstName() { return $this->firstName; }
    public function getLastName() { return $this->lastName; }
    public function getName() { return $this->firstName . ' ' . $this->lastName; }
    public function getLocation() { return $this->location; }
    public function getPhone() { return $this->phone; }
    public function getType() { return $this->type; }
    public function getPhoto() { return $this->photo; }


    public function setId( $id ) { $this->id = $id; }
    public function setFirstName( $firstName ) { $this->firstName = $firstName; }
    public function setLastName( $lastName ) { $this->lastName = $lastName; }
    public function setLocation( $location ) { $this->location = $location; }
    public function setPhone( $phone ) { $this->phone = $phone; }
    public function setType( $type ) { $this->type = $type; }
    public function setPhoto( $phone ) { $this->phone = $phone; }

}