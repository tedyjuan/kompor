<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konten extends CI_Controller {

    public function __construct()
    { 
        parent:: __construct();
    }
    
	public function index()
    {
        $data = array(
            "url_Home"   => base_url(),
            "url_tes1"   => site_url('konten/tes1'),
            "url_tes2"   => site_url('konten/tes2'),
            "url_tes3"   => site_url('konten/tes3'),
        );
        $this->load->view('dashboard', $data);
    }

    function  tes1()
    {
        $this->load->view('tes1');
    }
    function  tes2()
    {
        $this->load->view('tes2');
    }function  tes3()
    {
        $this->load->view('tes3');
    }
}
