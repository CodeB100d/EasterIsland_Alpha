<!doctype html>
<html>
<head>
    <base href="<?php echo BASE_URL ?>">
    <title><?php if(!empty($this->page_title)) echo $this->page_title; else echo 'Sweet'; ?></title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/default.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/pagination.css" />

    <?php
    if (isset($this->js)) 
    {
        foreach ($this->js as $js)
        {
            echo '<script type="text/javascript" src="'.BASE_URL.'views/'.$js.'"></script>';
        }
    }
    ?>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#my_status").keyup(function()
        {
        var box=$(this).val();
        var main = box.length *100;
        var value= (main / 255);
        var count= 255 - box.length;

        if(box.length <= 255)
        {
        $('#count').html(count);
        $('#bar').animate({
            "width": value+'%' }, 1);
        }else{
            alert('Full');
        }
        return false;
        });

    });
    </script>
    <script type="text/javascript">
    function loadSubmit() {
    var ProgressImage = document.getElementById('progress_image');
    document.getElementById('progress').style.visibility = 'visible';
    setTimeout(function(){ProgressImage.src = ProgressImage.src},100);
    return true;
    </script>
</head>
<body>

<?php Session::init(); 
   
?>
    
<div id="header">
    <div class="center">
        <h2>Sweet! <span>The Framework</span></h2>
        <div id="head_search">
            <input id="text_search" type="text" placeholder="Looking for something?"><input type="submit" value="Search" id="search_btn">
        </div>
        <div class="clear"></div>
    </div>
    
    <div id="nav">
        <div class="center">
            <ul id="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Just Click</a></li>
                <li><a href="<?php echo BASE_URL.'sweet/logout' ?>">Logout</a></li>
                <div class="clear"></div>
            </ul>
        </div>
    </div>
    
</div>
    
<div id="content">
    <div id="content_body">
        <div class="inner_tube20">