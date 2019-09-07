<?php

/**
* User Controller
*/
class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		//$this->load->library('form_validation');
		$this->load->model('Student');
	}

	//Login an existing student
	public function login()
	{
		$data = array();
		$data['title'] = "Department of Electronics and Communication Engineering RGUKT-BASAR";
		$data['error_success_message'] = "";
		
		if ( isset($this->session->userdata['isLoggedIn']) && $this->session->userdata['isLoggedIn'] == TRUE ) {
			redirect('Home/index');
		}
		else{
			//Receive posted data from login form
			if (isset($_POST['username']) && isset($_POST['password'])) {
				$data['title'] = $this->input->post('username');
				if( $this->Student->getUser($this->input->post('username') , sha1($this->input->post('password'))) ){
					$this->session->set_userdata('isLoggedIn',TRUE);
  					$this->session->set_userdata('username',$this->input->post('username'));
  					redirect('User/login');
				}
			}

			$this->load->view('templates/header',$data);
			$this->load->view('User/login');
		}
		
		$this->load->view('templates/footer');
	}

	//Register a new student
	public function register($message = '')
	{
		$data = array();
		$data['title'] = "Department of Electronics and Communication Engineering RGUKT-BASAR";
		$data['error_success_message'] = "";
		if ( isset($this->session->userdata['isLoggedIn']) && $this->session->userdata['isLoggedIn'] == TRUE ) {
			redirect('Home/index');
		}
		if (isset($_POST['student_id']) && isset($_POST['uname'])) 
		{
			$private = $this->input->post('private')?'1':'0';
			
			$userDetails = array(
						'student_id' => $this->input->post('student_id'),
						'batch' => $this->input->post('batch'),
						'first_name' => $this->input->post('fname'),
						'last_name' => $this->input->post('lname'),
						'email' => $this->input->post('email'),
						'username' => $this->input->post('uname'),
						'password' => sha1($this->input->post('passwd')),
						'gender' => $this->input->post('gender'),
						'address' => $this->input->post('addr_first_line')." ".$this->input->post('addr_second_line'),
						'state' => $this->input->post('state'),
						'mobile' => $this->input->post('phone'),
						'private' => $private,
						'pincode' => $this->input->post('pincode'),
						'score' => '0',
						'ip' => preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR')),
						'last_login' => date('Y-m-d H:i:s')
					);
			
			if ($this->Student->insertUser($userDetails)) {
				$data['error_success_message'] = "<div class='ui success message'>
    											<div class='header'>Form Completed</div>
    											<p>You are successfully registered.</p>
  											</div>";
  				$this->session->set_userdata('isLoggedIn',TRUE);
  				//$this->session->set_userdata('studentID',$this->input->post('student_id'));
  				$this->session->set_userdata('username',$this->input->post('uname'));
			}
		}
		$this->load->view('templates/header',$data);
		$this->load->view('User/register');
		/*if ($this->session->userdata('isLoggedIn')) {
			$this->load->view('Home/home');
		}*/
		$this->load->view('templates/footer');
	}


	//Logout a loggedin user/student
	public function logout()
	{
		if (isset($this->session->userdata['isLoggedIn']) && $this->session->userdata['isLoggedIn'] == TRUE) {
			$this->session->unset_userdata['isLoggedIn'];
			$this->session->unset_userdata['username'];
			$this->session->sess_destroy();
			redirect('User/login');
		}else{
			redirect('User/login');
		}
	}


	public function check_ajax_uname()
	{
		/* Ajax posted data checking code */
		if (isset($_POST['username'])) {
			if ( $this->Student->getUserByProperty('username',$_POST['username'])) {
				$ajax_username_status = 'success';
			}else{
				$ajax_username_status = 'failure';
			}
		}
		/* Ajax checking completed */
		echo json_encode($ajax_username_status);
	}

	public function changePassword()
	{
		$data['title'] = "Department of Electronics and Communication Engineering RGUKT-BASAR";
		$data['error_success_message'] = "";

		if ( !(isset($this->session->userdata['isLoggedIn']) || $this->session->userdata['isLoggedIn'] == TRUE) ) {
			redirect('Home/index');
		}

		//Code to accept POSTED data by form
		if ( isset($_POST['current_pass']) && isset($_POST['new_pass']) && isset($_POST['confirm_pass']) ) {
			
			if( $this->Student->getUser( $this->session->userdata['username'] , sha1($this->input->post('current_pass') ) ) ){
				$data['title'] = $_POST['current_pass'];
				if ( $this->Student->setPassword( sha1($this->input->new_pass), $this->session->username) ) {
					$data['error_success_message'] = "<div class='ui success message'>
    											<div class='header'>Form Completed</div>
    											<p>You were successfully changed your password .. </p>
  											</div>";
				}else{
					$data['error_success_message'] = "<div class='ui error message'>
    											<div class='header'> <i class='ui danger icon'></i>Form Error </div>
    											<p>An error occured. If you frequently see this error please contact admin/developers</p>
  											</div>";
				}
			}
		}

		$this->load->view('templates/header',$data);
		$this->load->view('User/change_pass');
		$this->load->view('templates/footer');


	}
	
}


?>