<?php

class Controller {

    function __construct() {
        //echo 'Main controller<br />';
        $this->view = new View();
        $this->form_validate = new FormValidator();
        $this->pagination = new Zebra_Pagination();
        $this->calendar = new SimpleCalendar();
        $this->encrypt = new PasswordHash(8, FALSE);

    }
    public function loadModel($name, $modelPath = 'models/') {
        $path = $modelPath . $name.'_model.php';
        
        if (file_exists($path)) {
            require $modelPath .$name.'_model.php';
            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }        
    }
}