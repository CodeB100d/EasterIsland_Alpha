<?php
class Index extends Controller{
    function index() {
         parent::__construct();
         $this->view->calendar = $this->calendar->show();
         $pages = array('index','login');
         $this->view->render($pages, false);
    }
    function blahblah(){
       echo "blah blah";
    }
}