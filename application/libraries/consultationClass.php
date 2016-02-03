<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class consultationClass {
    var $idUtilisateurConsultation = '';
    var $idOeuvreConsultation = '';
    var $nombreConsultation = '';
    var $dateConsultation = '';

    function __construct($idUtilisateurConsultation, $idOeuvreConsultation, $nombreConsultation, $dateConsultation) {
        $this->idUtilisateurConsultation = $idUtilisateurConsultation;
        $this->idOeuvreConsultation = $idOeuvreConsultation;
        $this->nombreConsultation = $nombreConsultation;
        $this->dateConsultation = $dateConsultation;
    }
    
    function getIdUtilisateurConsultation() {
        return $this->idUtilisateurConsultation;
    }

    function getIdOeuvreConsultation() {
        return $this->idOeuvreConsultation;
    }

    function getNombreConsultation() {
        return $this->nombreConsultation;
    }

    function getDateConsultation() {
        return $this->dateConsultation;
    }

    function setIdUtilisateurConsultation($idUtilisateurConsultation) {
        $this->idUtilisateurConsultation = $idUtilisateurConsultation;
    }

    function setIdOeuvreConsultation($idOeuvreConsultation) {
        $this->idOeuvreConsultation = $idOeuvreConsultation;
    }

    function setNombreConsultation($nombreConsultation) {
        $this->nombreConsultation = $nombreConsultation;
    }

    function setDateConsultation($dateConsultation) {
        $this->dateConsultation = $dateConsultation;
    }
}