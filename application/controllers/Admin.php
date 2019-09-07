<?php 

/**
* Admin Controller
*/
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Department of Electronics and Communication Engineering - Forum";
		$data['error_success_message'] = "";

		$this->load->view('templates/header',$data);
		$this->load->view('Admin/index');
		$this->load->view('templates/footer');
	}

}


?>