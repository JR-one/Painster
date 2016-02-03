<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class utilisateurClass {
    var $idUtilisateur = '';
    var $nomUtilisateur = '';
    var $prenomUtilisateur = '';
    var $dateNaissanceUtilisateur = '';
    var $loginUtilisateur = '';
    var $passwordUtilisateur = '';
    var $isAdmin = '';
    var $idPays = '';
    
    function __construct($idUtilisateur, $nomUtilisateur, $prenomUtilisateur, $dateNaissanceUtilisateur, $loginUtilisateur, $passwordUtilisateur, $isAdmin, $idPays) {
        $this->idUtilisateur = $idUtilisateur;
        $this->nomUtilisateur = $nomUtilisateur;
        $this->prenomUtilisateur = $prenomUtilisateur;
        $this->dateNaissanceUtilisateur = $dateNaissanceUtilisateur;
        $this->loginUtilisateur = $loginUtilisateur;
        $this->passwordUtilisateur = $passwordUtilisateur;
        $this->isAdmin = $isAdmin;
        $this->idPays = $idPays;
    }
    
    function getIdUtilisateur() {
        return $this->idUtilisateur;
    }

    function getNomUtilisateur() {
        return $this->nomUtilisateur;
    }

    function getPrenomUtilisateur() {
        return $this->prenomUtilisateur;
    }

    function getDateNaissanceUtilisateur() {
        return $this->dateNaissanceUtilisateur;
    }

    function getLoginUtilisateur() {
        return $this->loginUtilisateur;
    }

    function getPasswordUtilisateur() {
        return $this->passwordUtilisateur;
    }

    function getIsAdmin() {
        return $this->isAdmin;
    }

    function getIdPays() {
        return $this->idPays;
    }

    function setIdUtilisateur($idUtilisateur) {
        $this->idUtilisateur = $idUtilisateur;
    }

    function setNomUtilisateur($nomUtilisateur) {
        $this->nomUtilisateur = $nomUtilisateur;
    }

    function setPrenomUtilisateur($prenomUtilisateur) {
        $this->prenomUtilisateur = $prenomUtilisateur;
    }

    function setDateNaissanceUtilisateur($dateNaissanceUtilisateur) {
        $this->dateNaissanceUtilisateur = $dateNaissanceUtilisateur;
    }

    function setLoginUtilisateur($loginUtilisateur) {
        $this->loginUtilisateur = $loginUtilisateur;
    }

    function setPasswordUtilisateur($passwordUtilisateur) {
        $this->passwordUtilisateur = $passwordUtilisateur;
    }

    function setIsAdmin($isAdmin) {
        $this->isAdmin = $isAdmin;
    }

    function setIdPays($idPays) {
        $this->idPays = $idPays;
    }
}