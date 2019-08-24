<?php
/**
* Content development
*/
class Content extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		 $data['title'] = "Content Development";
		 $this->load->view('templates/header',$data);
		 $this->load->view('Content/index');
		 $this->load->view('templates/footer');
	}
}

?>