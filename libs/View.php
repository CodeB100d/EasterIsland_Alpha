<?php

class View {

    function __construct() {
        //echo 'this is the view';
    }

    public function render($pages, $noInclude = true)
    {
        $page_error = '';
        $y=0;
        
        for($x=0; $x < count($pages); $x++) if(!file_exists(APP_PATH . 'views/' . $pages[$x] . '.php')) $y++;
        
        if($y==0){
            if($noInclude) require APP_PATH . 'views/header.php';
            for($x=0; $x < count($pages); $x++){
                if(file_exists(APP_PATH . 'views/' . $pages[$x] . '.php')) require APP_PATH . 'views/' . $pages[$x] . '.php';
                else $page_error .= $pages[$x].'<br />';
            }
            if(!empty($page_error)) echo '<p>Unable to load</p>'.$page_error;
            if($noInclude) require APP_PATH . 'views/footer.php';
        }else{
            require APP_PATH . 'views/error/index.php';
        }
    }
}