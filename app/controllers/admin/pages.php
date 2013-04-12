<?php
class Pages extends EI_Controller{
    function index() {
		$this->loadModel("Login_Model","admin");
		$this->Login_Model->check_if_logged_in();
		
		$pages = array(
			'admin/headers/default',
			'admin/sidebar',
			'admin/pages',
			'admin/footers/default');
		$this->data['parent_page'] = $this->getUriSegment(3);
		$this->view->render($pages, $this->data);
    }
	
	function add_page_template() {		
		$pages = array(
			'admin/headers/pages_header',
			'admin/sidebar',
			'admin/add_page_template',
			'admin/footers/pages_footer');
			
		$this->data['parent_page'] = $this->getUriSegment(3);
		$this->view->render($pages, $this->data);
    }
	function sample($var=NULL){
		var_dump($var);
	}

}
?>
