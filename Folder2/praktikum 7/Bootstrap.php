<?php
defined('BASEPATH') or exit('No direct script access alllowed');

class Bootstrap extends CI_Controller{
    function index(){
        $this->load->view('v_bootstrap');
    }
}