<?php
class Login extends Controller{
    function index() {
        
        if(isset($_POST['login'])){
            $this->form_validate->addValidation("username","req","Hey! thats not fair! tell me your username!");
            $this->form_validate->addValidation("password","req","Will you please tell me your password.");
            if($this->form_validate->ValidateForm()){
                $this->validate_credentials($_POST['username'], $_POST['password']);
            }else{
                $this->view->form_error_message = $this->form_validate->GetErrors();
            } 
        }
        
        $this->view->calendar = $this->calendar->show();
        $pages = array('login');
        $this->view->render($pages, false);
    }
    
    private function validate_credentials(){
        if($this->model->can_login()){
            header('location: '.URL.'sweet/sweet');
        }
        else echo 'failed';
    }
}
?>
