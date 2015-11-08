<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class proc extends CI_Controller {
	
		
	function index(){	
		//die("tes");
		$data['header'] = 'Dashboard';
		$data['page']	= 'content/home';
		$this->load->view('template/template',$data);
	}
	
	function c_po(){	
		//die("tes");
		$data['header'] = 'Create Purchase Order';
		$data['page']	= 'content/v_po';
		$this->load->view('template/template',$data);
	}

	
}
