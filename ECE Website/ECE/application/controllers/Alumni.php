<?php

/**
* Alumni Controller
*/
class Alumni extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	
	//Index Page
	public function index()
	{
		$data['title'] = "Department of Electronics and Communication Engineering RGUKT-BASAR";
		$data['error_success_message'] = "";

		$this->load->view('templates/header',$data);
		$this->load->view('Alumni/index');
		$this->load->view('templates/footer');
	}


	public function register()
	{
		$data['title'] = "Department of Electronics and Communication Engineering RGUKT-BASAR";
		$data['error_success_message'] = "";
		
		if(isset($_POST['student_id']) && isset($_POST['user_name']) && isset($_POST['user_password']))
		{
			$form_values = array(
			                'user_name' => $this->input->post('user_name'),
			                'user_password' => sha1($this->input->post('user_password')),
			                'first_name' => $this->input->post('first_name'),
			                'last_name' => $this->input->post('last_name'),
			                'student_id' => $this->input->post('student_id'),
			                'gender' => $this->input->post('gender'),
			                'mstatus' => $this->input->post('mstatus'),
			                'degree' => $this->input->post('degree'),
			                'branch' => $this->input->post('branch'),
			                'completeyear' => $this->input->post('completeyear'),
			                'emp_position' => $this->input->post('emp_position'),
			                'emp_domain' => $this->input->post('emp_domain'),
			                'emp_location' => $this->input->post('emp_location'),
			                'achievements' => $this->input->post('achievements'),
			                'long_term_goal' => $this->input->post('long_term_goal'),
			                'p_status' => $this->input->post('p_status'),
			                'university_name' => $this->input->post('university_name'),
			                'u_city' => $this->input->post('u_city'),
			                'u_state' => $this->input->post('u_state'),
			                'u_country' => $this->input->post('country'),
			                'off_phone' => $this->input->post('off_phone'),
			                'res_phone' => $this->input->post('res_phone'),
			                'p_city' => $this->input->post('p_city'),
			                'p_state' => $this->input->post('p_state'),
			                'p_country' => $this->input->post('p_country'),
			                'last_login' => $this->input->post('last_login'),
			                'ip' => $this->input->post('ip'),
                        );

			if ($this->alumni_users->insertUser($userDetails)){
				$data['error_success_message'] = "<div class='ui success message'>
    											<div class='header'>Form Completed</div>
    											<p>You are successfully registered.</p>
  											</div>";
  				$this->session->set_userdata('isLoggedIn',TRUE);
  				//$this->session->set_userdata('studentID',$this->input->post('student_id'));
  				$this->session->set_userdata('username',$this->input->post('username'));
			}
		}
		$this->load->view('templates/header',$data);
		$this->load->view('User/register');
		/*if ($this->session->userdata('isLoggedIn')) {
			$this->load->view('Home/home');
		}*/
		$this->load->view('templates/footer');
	}



		}

		$this->load->view('templates/header',$data);
		$this->load->view('Alumni/register');
		$this->load->view('templates/footer');
	}
}


?>
