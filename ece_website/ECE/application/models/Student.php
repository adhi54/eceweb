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

	public function getUserByProperty($property , $prop_value)
	{
		$res = $this->db->get_where('students', array($property => $prop_value));
		return ($res->num_rows()<=0)?FALSE:TRUE;
	}

	public function setPassword($pass, $username)
	{
		$qry = "UPDATE students SET password='".$pass."' WHERE username='".$username."'";
		return $this->db->query($qry);
	}
}
?>