<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_1 extends MY_Controller {
	public function index(){
		$this->load->view('header');
		$this->load->view('artikel_1');
		$this->load->view('footer');
	}
}
