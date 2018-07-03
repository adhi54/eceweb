<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Forum Controller
*/
class Forum extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Sforum');
		$this->load->library('Library1');
	}

	public function index()
	{
		$data['title'] = "Department of Electronics and Communication Engineering - Forum";

		if (!(isset($this->session->userdata['isLoggedIn']) || $this->session->userdata['isLoggedIn'] == TRUE)) {
			redirect('User/login');
		}

		if (isset($_POST['domain']) && isset($_POST['title']) && isset($_POST['desc'])) {
			$domain = ($_POST['domain']=='others') ? $_POST['other_input'] : $_POST['domain'];
			$values = array(	'posted_user' => $this->session->userdata['username'], 
								'post_domain' => $_POST['domain'],
								'post_title' => $_POST['title'],
								'post_desc' => $_POST['desc'],
								'datetime' => date('Y-m-d H:i:s')
							);
			if ($this->Sforum->insertPost($values)) {
				redirect('Forum/index');
			}
		}

		$res = $this->Sforum->getDomains();
		$data['domains'] = array();
		$recent = "	<div class='ui styled fluid accordion' style='width: 600px;'>";
		foreach ($res as $row) {
			$each_domain_posts = $this->Sforum->recentPosts($row->post_domain, 5);
			array_push($data['domains'], $row->post_domain);
			$recent .= "	<div class='title' style='margin-right: 500px;'>
									<i class='dropdown icon'></i>
									".$row->post_domain."	
							</div>
							<div class='content'>
								<div class='ui hidden'>";
			foreach ($each_domain_posts as $post) {
				$recent .=	$this->library1->show_forum_div($post);
			}
			$recent .= 	"		</div>";
			$recent .= "	</div>";
		}
		$recent .= "</div>";
		$data['recent_posts'] = $recent;
		/*$recent_posts = $this->Sforum->recentPosts('Basics',5);
		$recent_basics = "";
		foreach ($recent_posts as $row) {
			$recent_basics .= show_div($row);
		}*/

		$this->load->view('templates/header',$data);
		$this->load->view('Forum/index');
		$this->load->view('templates/footer');
	}

	//Showing each post
	public function posts( $post_number = 0)
	{
		$data['title'] = "Department of Electronics and Communication Engineering - Forum";

		if (!(isset($this->session->userdata['isLoggedIn']) || $this->session->userdata['isLoggedIn'] == TRUE) ) {
			redirect('User/login');
		}

		$this->Sforum->updateViewsOfPost($post_number);

		$post = $this->db->getPostDetails($post_number);
		if ($post) {
			$data['post_head'] = $this->Sforum->show_forum_div($post);
		}else{
			$data['post_head'] = "<div>There is no such POST</div>";
		}
		$replies = $this->db->getPostReplies($post_number);
	}

}
?>
