<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ukk extends CI_Controller {
	public function index()
	{
		$this->load->view('perpustakaan/index');
		// $this->load->view('perpustakaan/sidebar');
	}

	public function login()
	{
		$this->load->view("perpustakaan/login");
	}
}
