<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	//index function
	public function index($page = 'index') {
		if (! file_exists(APPPATH.'views/profile/'.$page.'.php')) {
			// Whoops, we don't have page for that request !
			show_404();
		}

		$data['title'] = 'Profile | Index';
		$this->load->view('includes/header',$data);
		$this->load->view('includes/navbar');
		$this->load->view('profile/index', $data);
		$this->load->view('includes/footer');
	}

	//about more of me
	public function me() {
		$data['title'] = 'Profile | About Me';
		$this->load->view('includes/header',$data);
		$this->load->view('includes/navbar');
		$this->load->view('profile/about-more');
		$this->load->view('includes/footer');
	}
}
