<?php
class Participant {
    // Properties
    public $name = "";

    // Constructor
    function __construct($Name) {
        $this->name = $Name;
    }

    // Method
    function greeting() {
        return "Hello, " . $this->name;
    }
}

$participant = new Participant("Jordan!");
echo($participant->greeting());