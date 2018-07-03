<?php

/**
* Content Management System to manage Projects,Academics,Labs,Tools
*/
class Cms extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Cms_model');
	}

	public function developer( $menu='', $page_item='')
	{
		$data['title'] = "Department of Electronics and Communication Engineering RGUKT-BASAR";
		$data['error_success_message'] = "";
		if (!(isset($this->session->userdata['isLoggedIn']) || $this->session->userdata['isLoggedIn'] == TRUE) ) {
			redirect('User/login');
			/*if (!($this->session->userdata['username'] == 'admin' || $this->session->userdata['username'] == 'developer')) {
				redirect('User/no_auth');
			}*/
		}

		$form_menus = "";
		foreach ($this->Cms_model->get_unique_menu_items() as $row) {
			$form_menus .= "<option value='".$row->menu_item_encoded."'>".$row->menu_item_decoded."</option>";
		}
		$data['form_menus'] = $form_menus;

		if (isset($_POST['page_title']) && isset($_POST['page_path']) && isset($_POST['page_name'])) {
			$cms_menu_values = array(
								//'parent_menu' => str_replace(' ', '_', strtolower($_POST['page_parent_menu'])),
								'menu_name' => str_replace(' ', '_', strtolower($_POST['page_menu'])),
								'has_sub_items' => $_POST['has_sub_items'],
								'menu_item_encoded' => str_replace(' ', '_', strtolower($_POST['page_name'])),
								'menu_item_decoded' => $_POST['page_name'],
								'item_path' => $_POST['page_path'],
								'datetime' => date('Y-m-d H:i:s')
							);
			$cms_page_values = array(
								'page_name_encoded' => str_replace(' ', '_', strtolower($_POST['page_name'])),
								'page_name_decoded' => $_POST['page_name'],
								'page_menu_name' => str_replace(' ', '_', strtolower($_POST['page_menu'])),
								'page_title' => $_POST['page_title'],
								'page_heading' => $_POST['page_heading'],
								'page_body' => $_POST['body_ta']
							);
			if ($this->Cms_model->insert_into_table('cms_menus', $cms_menu_values ) && $this->Cms_model->insert_into_table('cms_pages', $cms_page_values )) {
				//redirect('cms/success/'.$_POST['page_name']);
				$es_message = "<div class='ui success message'>
    											<div class='header'>Form Completed</div>
    											<p>Page '".$_POST['page_name']."' is successfully created</p>
  											</div>";
  				echo $es_message;
			}
			
		}

		$this->load->view('templates/header',$data);
		$this->load->view('CMS/developer');
		$this->load->view('templates/footer');
	}


	public function content( $menu_name='', $page_name='' )
	{
		$menu_items = $this->Cms_model->get_from_menus( 'menu_name', str_replace(' ', '_', strtolower($menu_name)) ); // Get an object of rows
		$page_values = $this->Cms_model->get_from_pages( 'page_name_encoded', str_replace(' ', '_', strtolower($page_name)) ); //Get a single row
		
		if ($menu_items->num_rows() <= 0 ) {
			
			$menu = "No items found with this Menu";

		}else{
			$menu_items = $menu_items->result();
			$menu = "<div class='ui vertical fluid tabular pointing menu'>";
			$menu .=  "	<div class='item'>
	    					<div class='ui input'><input type='text' placeholder='Search...'></div>
	  					</div>";
			foreach ($menu_items as $row) {
				$submenu_items = $this->Cms_model->get_from_menus( 'menu_name', str_replace(' ', '_', strtolower($row->menu_item_encoded)) );
				$submenu_items = $submenu_items->result();
				if ($submenu_items) {
					$menu .= "<div class='ui item'>".$row->menu_item_decoded;
					$menu .= "<div class='menu'>";
					foreach ($submenu_items as $row2) {
						if ( $row2->menu_item_encoded == str_replace(' ', '_', strtolower($page_name)) ) {
							$menu .= "<a href='".base_url('cms/content/'.$row2->menu_name."/".$row2->menu_item_encoded)."' class='active item'>".$row2->menu_item_decoded."</a>";
						}else{
							$menu .= "<a href='".base_url('cms/content/'.$row2->menu_name."/".$row2->menu_item_encoded)."' class='item'>".$row2->menu_item_decoded."</a>";
						}
						
					}
					$menu .= "</div></div>";
				}else{
					$menu .= "<a href='".base_url('cms/content/'.$row->menu_name."/".$row->menu_item_encoded)."' class='item'>".$row->menu_item_decoded."</a>";
				}
			}
			$menu .= "</div>";
				
		}
		if ($page_values->num_rows()<=0) {
			$page_title = "Not found";
			$page_heading = "No such page";
			$page_body = "<h3>Troubleshooting</h3>
							<ul>
								<li>If you manually typed the url, please check the spellings, if any</li>
								<li>Goto Home Page and navigate to this page again to avoid errors</li>
							</ul>";
			
		}else{
			$page_values = $page_values->row();

			$page_title = $page_values->page_title;
			$page_heading = $page_values->page_heading;
			$page_body = $page_values->page_body;
		}
		

		$data['title'] = $page_title." - Department of Electronics and Communication Engineering RGUKT-BASAR";
		$data['error_success_message'] = "";
		$data['menu'] = $menu;
		$data['page_heading'] = $page_heading;
		$data['page_body'] = $page_body;
		$this->load->view('templates/header',$data);
		$this->load->view('CMS/content');
		$this->load->view('templates/footer');
	}

}

?>