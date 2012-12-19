<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<style type="text/css">
    #side_bar{
        background-color: #eee;
        float: right;
        width: 300px;
        border:thin solid #eee;
    }
    
    #side_bar_menu li{
        list-style: square;
        list-style-position: inside;
        margin-left: 10px;
        margin: 10px;
        border-bottom: thin solid #ccc;
        padding: 10px;
    }
    
    #side_bar_menu a{
        text-decoration: none;
        color: #666;
    }
    
    #side_bar_menu a:hover{
        text-decoration: underline;
    }
    
    #side_bar h3{
        background-color: mediumturquoise;
        padding: 10px;
        font-family: sans-serif;
        color: #fff;
        font-size: 17px;
    }
    
    #cal_wrapp{
        background-color: #fff;
        padding: 10px;
    }
</style>

<div id="side_bar">
    <h3>Sample Links</h3>
    <div class="inner_tube20">
        
        <ul id="side_bar_menu">
            <li><a href="">Sample Link</a></li>
            <li><a href="">Sample Link</a></li>
            <li><a href="">Sample Link</a></li>
            <li><a href="">Sample Link</a></li>
            <li><a href="">Sample Link</a></li>
            <li><a href="">Sample Link</a></li>
            <li><a href="">Sample Link</a></li>
            <li><a href="">Sample Link</a></li>
            <li><a href="">Sample Link</a></li>
        </ul>
    </div>
    <h3>Sample Calendar</h3>
    <div id="cal_wrapp">
        <?php echo '<br />'.$this->calendar; ?>
    </div>
</div>