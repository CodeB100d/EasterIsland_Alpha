<?php
class Main extends EI_Controller{
    function index($var=NULL) {
		$this->loadModel("Login_Model","admin");
		$this->Login_Model->check_if_logged_in();
		
		$pages = array(
			'admin/headers/default',
			'admin/sidebar',
			'admin/dashboard',
			'admin/footers/default');
		
		$this->data['parent_page'] = $this->getUriSegment(3);
		$this->view->render($pages, $this->data);
    }
	
	function login(){
		$this->loadUtils("FormValidator");
        $this->loadUtils("PasswordHash");
        $this->loadModel("Login_Model","admin");
        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $this->FormValidator->addValidation("username","req","Hey! thats not fair! tell me your username!");
            $this->FormValidator->addValidation("password","req","Will you please tell me your password.");
            
            if($this->FormValidator->ValidateForm()) {
               
                if($this->_validateCredentials($_POST['username'], $_POST['password'])===false);{
                   $this->data["form_error_message"] = array("account" => "Sorry Ugly Bitch!!! Wrong Username and Password!");
                }
                
            } else {
                $this->data["form_error_message"] = $this->FormValidator->GetErrors();
            } 
        }
        
		
		//password hash
		/*
		$t_hasher = new PasswordHash(8, FALSE);
		$correct = 'admin';
		$hash = $t_hasher->HashPassword($correct);
		echo $hash;
		*/
		//end
		$pages = array('admin/login');
        $this->view->render($pages, $this->data);
	}
	
	private function _validateCredentials(){
        if($this->Login_Model->can_login()){
            header('location: '.URL.'admin/main');
        }
        else return false;
    }
	
	public function logout(){
		$this->loadModel("Login_Model","admin");
		$this->Login_Model->logout();
	}
}
?>
