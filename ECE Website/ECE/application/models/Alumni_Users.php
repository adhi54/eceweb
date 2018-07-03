<?php

/**
* Users Model
*/
class Alumni extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insertUser($details)
	{
		return $this->db->insert('alumni_users',$details);
	}

	public function getUser($username='' , $password='')
	{
		$res = $this->db->get_where('alumni_users', array('user_name' => $username, 'user_password' => $password));
		return ($res->num_rows()<=0)?FALSE:TRUE;
	}

	public function getUserByProperty($property , $prop_value)
	{
		$res = $this->db->get_where('students', array($property => $prop_value));
		return ($res->num_rows()<=0)?FALSE:TRUE;
	}

	public function setPassword($pass, $username)
	{
		$qry = "UPDATE alumni_users SET user_password='".$pass."' WHERE user_name='".$username."'";
		return $this->db->query($qry);
	}
}
?>
