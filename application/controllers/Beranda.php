<?php

class Beranda extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        $this->load->view('partials/header.php');
        $this->load->view('partials/navbar.php');
        $this->load->view("admin/beranda");
        $this->load->view('partials/footer.php');
       
	}
}

