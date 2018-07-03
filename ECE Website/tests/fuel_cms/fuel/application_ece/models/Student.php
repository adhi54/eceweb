<?php

/**
* Users Model
*/
class Student extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insertUser($details)
	{
		return $this->db->insert('students',$details);
	}

	public function getUser($username='' , $password='')
	{
		$res = $this->db->get_where('students', array('username' => $username, 'password' => $password));
		return ($res->num_rows()<=0)?FALSE:TRUE;
	}
}
?>