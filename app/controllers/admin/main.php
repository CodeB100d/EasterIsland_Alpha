<?php
class Main extends EI_Controller{
    function index() {
        $pages = array('admin/main');
        $this->view->render($pages);
    }
    function blha($hehe){
       echo "CHURVA".$hehe;
    }
}
?>