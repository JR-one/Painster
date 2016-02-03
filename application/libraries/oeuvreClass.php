<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class oeuvreClass {
    var $idOeuvre = '';
    var $titreOeuvre = '';
    var $dateCreationOeuvre = '';
    var $indicePrixOeuvre = '';
    var $imageUrlOeuvre = '';
    var $idArtiste = '';
    
    function __construct($idOeuvre, $titreOeuvre, $dateCreationOeuvre, $indicePrixOeuvre, $imageUrlOeuvre, $idArtiste) {
        $this->idOeuvre = $idOeuvre;
        $this->titreOeuvre = $titreOeuvre;
        $this->dateCreationOeuvre = $dateCreationOeuvre;
        $this->indicePrixOeuvre = $indicePrixOeuvre;
        $this->imageUrlOeuvre = $imageUrlOeuvre;
        $this->idArtiste = $idArtiste;
    }
    
    function getIdOeuvre() {
        return $this->idOeuvre;
    }

    function getTitreOeuvre() {
        return $this->titreOeuvre;
    }

    function getDateCreationOeuvre() {
        return $this->dateCreationOeuvre;
    }

    function getIndicePrixOeuvre() {
        return $this->indicePrixOeuvre;
    }

    function getImageUrlOeuvre() {
        return $this->imageUrlOeuvre;
    }

    function getIdArtiste() {
        return $this->idArtiste;
    }

    function setIdOeuvre($idOeuvre) {
        $this->idOeuvre = $idOeuvre;
    }

    function setTitreOeuvre($titreOeuvre) {
        $this->titreOeuvre = $titreOeuvre;
    }

    function setDateCreationOeuvre($dateCreationOeuvre) {
        $this->dateCreationOeuvre = $dateCreationOeuvre;
    }

    function setIndicePrixOeuvre($indicePrixOeuvre) {
        $this->indicePrixOeuvre = $indicePrixOeuvre;
    }

    function setImageUrlOeuvre($imageUrlOeuvre) {
        $this->imageUrlOeuvre = $imageUrlOeuvre;
    }

    function setIdArtiste($idArtiste) {
        $this->idArtiste = $idArtiste;
    }
}