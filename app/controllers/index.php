<?php
class Index extends Controller{
    function index() {
         parent::__construct();
         $this->view->calendar = $this->calendar->show();
         $pages = array('headers/index_header','index','footers/index_footer');
         $this->view->render($pages, false);
    }
    function blahblah(){
       echo "blah blah";
    }
}