<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('template/admin/header');
		$this->load->view('template/admin/topbar');
		$this->load->view('template/admin/sidebar');
		$this->load->view('admin/home');
		$this->load->view('template/admin/footer');
	}
}
