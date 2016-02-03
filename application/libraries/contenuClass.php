<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contenuClass {
    var $idOeuvreContenu = '';
    var $idTagContenu = '';
    
    function __construct($idOeuvreContenu, $idTagContenu) {
        $this->idOeuvreContenu = $idOeuvreContenu;
        $this->idTagContenu = $idTagContenu;
    }
    
    function getIdOeuvreContenu() {
        return $this->idOeuvreContenu;
    }

    function getIdTagContenu() {
        return $this->idTagContenu;
    }

    function setIdOeuvreContenu($idOeuvreContenu) {
        $this->idOeuvreContenu = $idOeuvreContenu;
    }

    function setIdTagContenu($idTagContenu) {
        $this->idTagContenu = $idTagContenu;
    }
}