<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class paysClass {
    var $idPays = '';
    var $nomPays = '';
    
    function __construct($idPays, $nomPays) {
        $this->idPays = $idPays;
        $this->nomPays = $nomPays;
    }
    
    function getIdPays() {
        return $this->idPays;
    }

    function getNomPays() {
        return $this->nomPays;
    }

    function setIdPays($idPays) {
        $this->idPays = $idPays;
    }

    function setNomPays($nomPays) {
        $this->nomPays = $nomPays;
    }
}