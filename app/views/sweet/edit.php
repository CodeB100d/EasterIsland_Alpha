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

input[type=text]:focus, textarea:focus{
    outline: thin solid powderblue;
}

textarea{
    height: 70px;
}

input[type=submit], input[type=button]{
    padding: 8px 15px;
    border: thin solid #ccc;
}

input[type=submit], input[type=button]{
    padding: 8px 15px;
    border: thin solid #ccc;
    background-color: orangered;
    color: #fff;
    font-weight: bold;
    border: thin solid tomato;
}

input[type=submit]:hover, input[type=button]:hover{
    background-color: tomato;
    cursor: pointer;
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
    margin-top:30px;
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
    color: orangered;
    background-color: mistyrose;
    padding: 10px;
}

</style>

<div id="status_wrapp">
<?php foreach($this->my_status as $my_status); ?>
<form method="post">
    <textarea id="my_status" name="my_status" placeholder="What's in your mind?"><?php if(!empty($my_status['my_status'])) echo strip_tags(stripcslashes ($my_status['my_status'])); ?></textarea>
    <input type="text" name="location" placeholder="Location" value="<?php if(!empty($my_status['location'])) echo $my_status['location']; ?>">
    <input type="submit" name="save" value="Save"> <input type="button" onclick="window.location='<?php echo URL ?>sweet/sweet'" value="Go Back">
</form>
</div>