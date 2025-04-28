<?php

class Assert {

    private $number;

    public function getArray() {
        return [
            'name' => 'Mateus',
        ];
        
    }

    public function setNumber($n) {
        $this->number = $n;
    }

    public function getNumber() {
        return $this->number;
    }

    public function getBio() {
        return "I'm a developer";
    }
}