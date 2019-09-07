<?php

/**
* Content Management System Model
*/
class Cms_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//Add page: Insert entries to cms_menus and cms_pages tables
	public function insert_into_table($table_name, $table_values)
	{
		return $this->db->insert($table_name,$table_values);
	}

	//Search from $table with $property as column name and $value as entry
	//ESPECIALLY FOR 'CMS_MENUS'
	public function get_from_table($table_name, $property, $value, $return_mode)
	{

		$qry = "SELECT * FROM ".$table_name." WHERE ".$property."='".$value."'";
		$res = $this->db->query($qry);

		if ($return_mode == 0) 
			return $res->result();
		else
			return $res->row();
	}

	public function get_from_menus($property, $value)
	{
		if ($value == '')
			$qry = "SELECT * FROM cms_menus WHERE has_sub_items='1'";
		else
			$qry = "SELECT * FROM cms_menus WHERE ".$property."='".$value."'";
		return $this->db->query($qry);
	}

	public function get_from_pages($property, $value)
	{
		$qry = "SELECT * FROM cms_pages WHERE ".$property."='".$value."'";
		return $this->db->query($qry);
	}

	public function get_unique_menu_items()
	{
		$qry = "SELECT menu_item_encoded,menu_item_decoded FROM cms_menus WHERE has_sub_items='1'";
		$res = $this->db->query($qry);
		return $res->result();
	}
}


?>