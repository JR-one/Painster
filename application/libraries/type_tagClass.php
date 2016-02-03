<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tagClass {
    var $idTypeTag = '';
    var $libelleTypeTag = '';

    function __construct($idTypeTag, $libelleTypeTag) {
        $this->idTypeTag = $idTypeTag;
        $this->libelleTypeTag = $libelleTypeTag;
    }
    
    function getIdTypeTag() {
        return $this->idTypeTag;
    }

    function getLibelleTypeTag() {
        return $this->libelleTypeTag;
    }

    function setIdTypeTag($idTypeTag) {
        $this->idTypeTag = $idTypeTag;
    }

    function setLibelleTypeTag($libelleTypeTag) {
        $this->libelleTypeTag = $libelleTypeTag;
    }
}