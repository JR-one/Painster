<?php

/**
 * Created by PhpStorm.
 * User: Olivier
 * Date: 03/02/2016
 * Time: 14:53
 */
class Oeuvre extends CI_Controller
{
    var $baseUrl = "";

    public function __construct()
    {
        $baseUrl = 'oeuvre/';
    }

    public function index()
    {
        $this->load->view($baseUrl.'oeuvres');
    }

    public function liste()
    {
        $this->load->view('oeuvres');
    }

    public function item($id)
    {
        $this->load->view('oeuvre');
    }
}