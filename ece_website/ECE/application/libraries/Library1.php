<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Library for own functions
*/
class Library1
{
	
	function __construct()
	{
		
	}

	function show_forum_div($row)
	{
		$post = "<div class='ui item'>";
		$post .= "	<div class='ui horizontal segments'>";
		$post .= "		<div class='ui ten wide segment'>";
		$post .= "			<a href='".base_url('Forum/posts/'.$row->id)."' style='text-align: left;'><h4 class='ui header blue'>".$row->post_title."</h4></a>";
		$post .= "			<p style='text-align: left;'> ".$row->views." &nbsp;views &nbsp;&nbsp; ".$row->likes." &nbsp; likes</p>";
		$post .= "		</div>";
		$post .= "		<span style='margin-right: 10px;'>Created by: <a href='".base_url('User/profile/'.$row->posted_user)."'>".$row->posted_user."</a></span><br><span style='margin-right: 10px;'>".$row->datetime."</span>";
		//$post .= "	<span style='margin-right: 10px;'>Created by: ".$row->posted_user."</span><br><span style='margin-right: 10px;'>".$row->datetime."</span>";
		//$post .= "	<p style='text-align: right;'>Created by: ".$row->posted_user."</p><br>";
		//$post .= "	<p style='text-align: right;'>Date: </p>";
		$post .= "	</div>";
		$post .= "</div>";

		return $post;
	}
}

?>