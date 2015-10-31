<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Process extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	}
	
	function index()
	{	
		$data['header'] = 'Dashboard';
		$data['page']	= 'content/home';
		$this->load->view('template/template',$data);
	}
}
