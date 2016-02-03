<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tagClass {
    var $idTag = '';
    var $libelleTag = '';
    var $idTypeTag = '';

    function __construct($idTag, $libelleTag, $idTypeTag) {
        $this->idTag = $idTag;
        $this->libelleTag = $libelleTag;
        $this->idTypeTag = $idTypeTag;
    }
    
    function getIdTag() {
        return $this->idTag;
    }

    function getLibelleTag() {
        return $this->libelleTag;
    }

    function getIdTypeTag() {
        return $this->idTypeTag;
    }

    function setIdTag($idTag) {
        $this->idTag = $idTag;
    }

    function setLibelleTag($libelleTag) {
        $this->libelleTag = $libelleTag;
    }

    function setIdTypeTag($idTypeTag) {
        $this->idTypeTag = $idTypeTag;
    }


}