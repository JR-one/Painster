<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class artisteClass {
    var $idArtiste = '';
    var $nomArtiste = '';
    var $prenomArtiste = '';
    var $dateNaissanceArtiste = '';
    var $dateMortArtiste = '';
    var $dateDebutCarriereArtiste = '';
    var $courantArtiste = '';
    
    function __construct($idArtiste, $nomArtiste, $prenomArtiste, $dateNaissanceArtiste, $dateMortArtiste, $dateDebutCarriereArtiste, $courantArtiste) {
        $this->idArtiste = $idArtiste;
        $this->nomArtiste = $nomArtiste;
        $this->prenomArtiste = $prenomArtiste;
        $this->dateNaissanceArtiste = $dateNaissanceArtiste;
        $this->dateMortArtiste = $dateMortArtiste;
        $this->dateDebutCarriereArtiste = $dateDebutCarriereArtiste;
        $this->courantArtiste = $courantArtiste;
    }
    
    function getIdArtiste() {
        return $this->idArtiste;
    }

    function getNomArtiste() {
        return $this->nomArtiste;
    }

    function getPrenomArtiste() {
        return $this->prenomArtiste;
    }

    function getDateNaissanceArtiste() {
        return $this->dateNaissanceArtiste;
    }

    function getDateMortArtiste() {
        return $this->dateMortArtiste;
    }

    function getDateDebutCarriereArtiste() {
        return $this->dateDebutCarriereArtiste;
    }

    function getCourantArtiste() {
        return $this->courantArtiste;
    }

    function setIdArtiste($idArtiste) {
        $this->idArtiste = $idArtiste;
    }

    function setNomArtiste($nomArtiste) {
        $this->nomArtiste = $nomArtiste;
    }

    function setPrenomArtiste($prenomArtiste) {
        $this->prenomArtiste = $prenomArtiste;
    }

    function setDateNaissanceArtiste($dateNaissanceArtiste) {
        $this->dateNaissanceArtiste = $dateNaissanceArtiste;
    }

    function setDateMortArtiste($dateMortArtiste) {
        $this->dateMortArtiste = $dateMortArtiste;
    }

    function setDateDebutCarriereArtiste($dateDebutCarriereArtiste) {
        $this->dateDebutCarriereArtiste = $dateDebutCarriereArtiste;
    }

    function setCourantArtiste($courantArtiste) {
        $this->courantArtiste = $courantArtiste;
    }

    

}

