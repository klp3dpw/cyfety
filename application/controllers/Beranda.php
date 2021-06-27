<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MY_Controller {	
	public function index(){
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function biodata(){
		$this->load->view('biodata');
	}

	public function login(){
		$this->load->view('login');
	}
	
	public function kronologi(){
        $this->load->view('kronologi');
	}
}
