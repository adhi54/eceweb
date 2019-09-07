<?php

/**
* Competitive Exams
*/

class CompetitiveExams extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function home($exam = 'home')
	{
		$this->load->view('templates/header');
		$this->load->view('CompetitiveExams/home');
		$this->load->view('templates/footer');
	}

	public function exams($exam = 'gate', $year = '2017')
	{
		$years = array();
		if ($exam == 'gate') {
			$examstr = "GATE";
			for ($i=2017; $i >= 1991; $i--) 
				array_push($years, $i);
		}
		if ($exam == 'ies') {
			$examstr = "IES";
		}
		if ($exam == 'isro') {
			$examstr = "ISRO";
			for ($i=2016; $i >= 2006; $i--)
				array_push($years, $i);
		}
		if ($exam == 'genco') {
			$examstr = "GENCO";
		}
		$data['examstr'] = $examstr;
		$data['title'] = $examstr."-ECE RGUKT-BASAR";
		$data['exam'] = $exam;
		$data['yearIndex'] = $years;
		$data['year'] = $year;
		
		$this->load->view('templates/header',$data);
		$this->load->view('CompetitiveExams/exams');
		$this->load->view('templates/footer');
	}
	
}