<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<style type="text/css">
input[type=text], textarea{
  width:100%;
  display: block;
 
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  padding: 5px;
  border:thin solid #ccc;
  margin: 5px 0;
}

textarea{
    height: 70px;
}

input[type=text]:focus, textarea:focus{
    outline: thin solid powderblue;
}

input[type=submit]{
    padding: 8px 15px;
    border: thin solid #ccc;
    background-color: orangered;
    color: #fff;
    font-weight: bold;
    border: thin solid tomato;
}

input[type=submit]:hover{
    background-color: tomato;
}

input[type=submit]:hover{
    cursor: pointer;
}

.my_status1{
    padding: 10px;
    border-bottom: thin solid #eee;
    color:#666;
}

.my_status2{
    padding: 10px;
    background-color: azure;
    border-bottom: thin solid #eee;
    color:#666;
}

#status_wrapp{
    width: 580px;
    float: left;
}

.loc{
    float:right;
    color: #999;
    font-size: 11px;
    text-align:right;
    margin-left: 30px;
}

.clear{
    clear:both;
}

.command{
    color: tomato;
    text-decoration: none;
    font:10px verdana;
}

.error{
        font: 11px arial;
        background-color: khaki;
        padding: 10px;
        margin-bottom: 10px;
        color: indianred;
    }
    
    .error img{
        height: 15px;
        float: left;
        margin-right: 10px;
    }
    
    .error li{
        list-style: none;
    }


.success{
    color: seagreen;
    background-color: #DFFFA5;
    padding: 10px;
    margin-bottom: 10px;
}

.success img{
    height: 25px;
    vertical-align: middle;
}

#tellme{
    color: #333;
}

#tellme img{
    height: 20px;
    vertical-align: middle;
}

#paper{
    background-color: #eee;
    padding: 10px;
}



#bar
{
background-color: tomato;
width:0px;
height:10px;
}
#barbox
{
float:right; 
height:10px; 
background-color:#FFFFFF; 
width:100px; 
border:solid 1px #ccc; 
margin-right:3px;
-webkit-border-radius:5px;-moz-border-radius:5px;
}
#count
{
float:right; margin-right:8px; 
font-family: cursive; 
font-size:13px; 
color:#666;
}
</style>




<div id="status_wrapp">
    <form method="post">
        <?php
            if(!empty($this->form_error_message)){
                echo '<div class="error"><img src="public/images/caution.gif"> ';
                foreach($this->form_error_message as $inpname => $inp_err)
                {
                    echo "<li>$inp_err</li>";
                }
                echo '</div>';
            }

            if(!empty($this->error_message)) echo '<div class="error"><img src="public/images/caution.gif"> '.$this->error_message.'</div>';
            if(!empty($this->success_mess)) echo '<div class="success"><img src="public/images/check.png"> '.$this->success_mess.'</div>';
        ?>
        <div id="barbox"><div id="bar"></div></div><div id="count">245</div>

        <h2 id ="tellme"><img src="public/images/tellme.gif"> Tell me</h2>
        <div id="paper">
            <input type="hidden" name="csrf_token" value="<?php echo $this->token; ?>">
            <textarea id="my_status" name="my_status" placeholder="What's in your mind?"></textarea>
            <input type="text" name="location" placeholder="Location">
            <input type="submit" name="post_stat" value="Post">
        </div>
    </form>

    <br />
    <?php
    $x=0;
    foreach($this->my_status as $my_status){
        $x++;
        if($x%2 == 0) echo '<div class="my_status1">';
        else echo '<div class="my_status2">';
        echo '<span class="loc"><i>'.date("h:i a M-d", strtotime($my_status['date_posted'])).'</i>
            <br/>in '.$my_status['location'].'<br />
            <a class="command" href="'.URL.'sweet/edit/'.$my_status['id'].'">Edit</a> | <a class="command" href="'.URL.'sweet/delete/'.$my_status['id'].'">Delete</a></span>';
        echo mysql_real_escape_string(stripslashes($my_status['my_status'])).'<div class="clear"></div></div>';
    }
    echo '<br />'.$this->pager_link;
    ?>
</div>
