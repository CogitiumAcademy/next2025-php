<?php
// src/classes/Member.php

// Définition de l'espace de nom de la classe
namespace App\classes;

// Définition de la classe, le nom doit correspondre au nom du fichier
class Member {
  
    // Les propriétés
    private $firstName;
    private $lastName;
    private $date;

    // Le constructeur
    function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->date = new \DateTime();
    }

    // les setters / getters
    public function getFirstName() {
        return $this->firstName;
    }
    public function getLastName() {
        return $this->lastName;
    }
    public function getDate() {
        return $this->date;
    }

    // les autres méthodes
    public function printMember() {
        echo $this->date->format('Y-m-d') . ' = ' . $this->firstName . ' ' . $this->lastName;
    }

}