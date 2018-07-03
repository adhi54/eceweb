<?php

/**
* Forum Model
*/
class Sforum extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function searchForumPost($key)
	{
		$this->db->like('forum_posts',$key);
	}

	public function recentPosts($domain, $number=0)
	{
		if ($number <= 0) {
			$query = "SELECT * FROM forum_posts WHERE post_domain='".$domain."'" ;
		}
		else{
			$query = "SELECT * FROM forum_posts WHERE post_domain='".$domain."' LIMIT ".$number ;
		}
		$res = $this->db->query($query);
		return $res->result();
	}

	public function insertPost($values)
	{
		return $this->db->insert('forum_posts',$values);
	}

	public function getDomains()
	{
		$query = "SELECT DISTINCT post_domain FROM forum_posts";
		$res = $this->db->query($query);
		return $res->result();
	}

	public function getPostDetails($post_number)
	{
		$res = $this->db->get_where('forum_posts', array('id' => $post_number));
		return $res->result();
	}

	public function getPostReplies($post_number)
	{
		$res = $this->db->query("SELECT * FROM forum_conversations WHERE post_id='".$post_number."' ORDER BY datetime DESC");
		return $res->result();
	}

	public function updateViewsOfPost($post_number)
	{
		return $this->db->query(" UPDATE forum_posts SET views=views+1 WHERE id='".$post_number."'");
	}
}
?>