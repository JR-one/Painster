<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class venteClass {
    var $idUtilisateurVente = '';
    var $idOeuvreVente = '';
    var $quantiteVente = '';
    var $dateVente = '';

    
    function __construct($idUtilisateurVente, $idOeuvreVente, $quantiteVente, $dateVente) {
        $this->idUtilisateurVente = $idUtilisateurVente;
        $this->idOeuvreVente = $idOeuvreVente;
        $this->quantiteVente = $quantiteVente;
        $this->dateVente = $dateVente;
    }
    
    function getIdUtilisateurVente() {
        return $this->idUtilisateurVente;
    }

    function getIdOeuvreVente() {
        return $this->idOeuvreVente;
    }

    function getQuantiteVente() {
        return $this->quantiteVente;
    }

    function getDateVente() {
        return $this->dateVente;
    }

    function setIdUtilisateurVente($idUtilisateurVente) {
        $this->idUtilisateurVente = $idUtilisateurVente;
    }

    function setIdOeuvreVente($idOeuvreVente) {
        $this->idOeuvreVente = $idOeuvreVente;
    }

    function setQuantiteVente($quantiteVente) {
        $this->quantiteVente = $quantiteVente;
    }

    function setDateVente($dateVente) {
        $this->dateVente = $dateVente;
    }
}