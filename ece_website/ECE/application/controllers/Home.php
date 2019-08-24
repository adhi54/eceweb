<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Home controller
*/
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$data['title'] = "Department of Electronics and Communication Engineering RGUKT-BASAR";
		$data['error_success_message'] = "";
		$this->load->view('templates/header',$data);
		$this->load->view('Home/index');
		$this->load->view('templates/footer');
	}
}

?>