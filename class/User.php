<?php 
class User {
    private $name;
    private $lastName;

    public function setName($n) {
        $this->name = $n;
    }

    public function setLastName($n) {
        $this->lastName = $n;
    }

    public function getFullName() {
        return $this->name." ".$this->lastName;
    }
}