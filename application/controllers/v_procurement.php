<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class proc extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	}
	
	function index(){	
		//die("tes");
		$data['header'] = 'Dashboard';
		$data['page']	= 'content/home';
		$this->load->view('template/template',$data);
	}
	
	function c_po(){	
		die("tes");
		$data['header'] = 'Dashboard';
		$data['page']	= 'content/c_po';
		$this->load->view('template/template',$data);
	}

	
}
