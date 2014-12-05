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
        $res = PdoGsb::$monPdo->query($requete);
        var_dump($res);
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

class PdoGsb {

    private static $serveur = 'mysql:host=localhost';
    private static $bdd = 'dbname=gsbV2';
    private static $user = 'root';
    private static $mdp = '';
    private static $monPdo;
    private static $monPdoGsb = null;

    private function __construct() {
        PdoGsb::$monPdo = new PDO(PdoGsb::$serveur . ';' . PdoGsb::$bdd, PdoGsb::$user, PdoGsb::$mdp);
        PdoGsb::$monPdo->query("SET CHARACTER SET utf8");
    }

    public function _destruct() {
        PdoGsb::$monPdo = null;
    }
    public static function getPdoGsb() {
        if (PdoGsb::$monPdoGsb == null) {
            PdoGsb::$monPdoGsb = new PdoGsb();
        }
        return PdoGsb::$monPdoGsb;
    }

    public function getInfosPays($pays) {
//        $req = "select visiteur.id as id, visiteur.nom as nom, visiteur.prenom as prenom from visiteur 
//		where visiteur.login='$login' and visiteur.mdp='$mdp'";
        $req = "select nom, latitude, longitude from Pays where nom='" . $pays->nom . "';";
        $rs = PdoGsb::$monPdo->query($req);
        $ligne = $rs->fetch();
        
    }
    public function getLesVisiteurs() {
        $req = "select id, nom, prenom from visiteur";
        $res = PdoGsb::$monPdo->query($req);
        $array = array();
        $laLigne = $res->fetch();
        $truc = $laLigne;
        while ($laLigne != null) {
            $array[$laLigne['id']] = array('nom' => $laLigne['nom'], 'prenom' => $laLigne['prenom']);
            $truc = $laLigne;
            $laLigne = $res->fetch();
        }
        return $array;
    }
}