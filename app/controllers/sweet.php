<?php
class Sweet extends Controller {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
        Session::init();
    }
    
    function index() {
        //echo Hash::create('sha256', 'jesse', HASH_PASSWORD_KEY);
        //echo Hash::create('sha256', 'test2', HASH_PASSWORD_KEY);
        //$this->view->render('sweet/sweet');
    }
    function sweet(){
        if(isset($_POST['post_stat'])){
            try
            {
                $this->form_validate->addValidation("my_status","req","Hey! thats not fair! tell me whats on your mind!");
                $this->form_validate->addValidation("location","req","Will you please tell me where you at.");
                if($this->form_validate->ValidateForm()){
                    // Run CSRF check, on POST data, in exception mode, for 10 minutes, in one-time mode.
                    NoCSRF::check( 'csrf_token', $_POST, true, 60*10, false );
                    $data = array(
                        'my_status'=> mysql_real_escape_string(nl2br($_POST['my_status'])),
                        'location'=>$_POST['location']
                    );
                    $this->model->insert_post($data);
                    
                    $this->view->success_mess = 'Your post has been added to the sweet wall';
                }else{
                    $this->view->form_error_message = $this->form_validate->GetErrors();
                }
            }
            catch ( Exception $e )
            {
                //$this->view->error_message = $e->getMessage() . ' Form ignored.';
                $this->view->error_message = '<b>Error:</b> '.$e->getMessage() . ' this feature is for <b>stubborn users</b> who <b>enjoys pressing F5</b> when form is submitted';
            }
        }
        
        $records_per_page = 8;
        
        //$rows = mysql_fetch_assoc(mysql_query('SELECT FOUND_ROWS() AS rows'));
        $this->pagination->records(count($this->model->status_list()));
        $this->pagination->selectable_pages(8);
        $this->pagination->records_per_page($records_per_page);
        $this->view->my_status = $this->model->status_list_page($this->pagination->get_page(), $records_per_page);
        $this->view->pager_link = $this->pagination->render();
        
        //calendar
        //$this->calendar->setDate('December 17 2012');
        //$this->calendar->addDailyHtml( 'Sample Event', 'today', 'tomorrow' );
        $this->view->calendar = $this->calendar->show();
        
        // Generate CSRF token to use in form hidden field
        $this->view->token = NoCSRF::generate( 'csrf_token' );
        $pages = array('side_bar', 'sweet/sweet');
        $this->view->render($pages);
    }
    
    public function delete($id)
    {
        $this->model->delete($id);
        header('location: ' . URL . 'sweet/sweet');
    }
    
    public function edit(){
        $uri = $_SERVER['REQUEST_URI'];
        $segment = explode("/", $uri);
        $id=$segment[4];
        
        if(isset($_POST['save'])){
            $data = array(
                'my_status'=>$_POST['my_status'],
                'location'=>$_POST['location'],
                'id'=>$id
            );
            $this->model->editSave($data);
        }
        $this->view->calendar = $this->calendar->show();
        $this->view->page_title = 'Edit';
        $this->view->my_status = $this->model->select_status($id);
        $this->view->render(array('side_bar', 'sweet/edit'));
    }
    
    public function logout(){
        session_destroy();
        header('location: ../login');
    }
}