<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classes
 *
 * @author Sylvain
 */
class Pays {

    private $nom;
    private $latitude;
    private $longitude;

    public function __construct($nom) {
        $requete = "select nom, latitude, longitude from pays where nom like %" . $nom . "%;";
    }

    public function getNom() {
        return $this->nom;
    }

    public function getLatitude() {
        return $this->latitude;
    }

    public function getLongitude() {
        return $this->longitude;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setLatitude($latitude) {
        $this->latitude = $latitude;
    }

    public function setLongitude($longitude) {
        $this->longitude = $longitude;
    }

}
