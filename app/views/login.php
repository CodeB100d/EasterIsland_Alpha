<html>
<head>
<title><?php if(!empty($this->page_title)) echo $this->page_title; else echo 'Sweet'; ?></title>
<style type="text/css">
    *{
        padding: 0;
        margin: 0;
    }
    
    body{
        background-image: url('public/images/stripe.png');
    }
    
    *:focus{
        outline: none;
    }
    label{
        display: block;
        font: 12px monospace;
    }
    
    input[type=text], input[type=password]{
        width: 100%;
        border: thin solid #ccc;
        padding: 8px;
        margin: 5px 0 10px;
    }
    
    input[type=submit]{
        padding: 10px 15px;
        border: thin solid #ccc;
        margin: 10px 0;
        background-color: mediumturquoise;
        font-weight: bold;
        color: #333;
    }
    
    input[type=submit]:hover{
        cursor: pointer;
        background-color: turquoise;
    }
    
    a{
        color: orangered;
        text-decoration: none;
        font:12px arial;
    }
    
    a:hover{
        text-decoration: underline;
    }
    
    #login_wrapp{
        margin: 0 auto;
        width: 300px;
        background-color: #eee;
        padding: 20px 10px;
        margin-top: 20%;
        -moz-box-shadow: 0 0 10px #858585;
        -webkit-box-shadow: 0 0 10px #858585;
        box-shadow: 0 0 10px #858585;
    }
    
    #login_box{
        width: 280px;
        margin: 0 auto;
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
    
    p{
        font: 12px arial;
        margin-bottom: 10px;
        color: #666;
    }
    
    .clear{
        clear: both;
    }
    
    h2{
        color: #999;
        border-bottom: thin solid #ccc;
        margin-bottom: 5px;
        padding-bottom: 10px;
    }
    
    #progress{
        font: 11px arial;
        color: #999;
    }
</style>
<script type="text/javascript">
function loadSubmit() {
    var ProgressImage = document.getElementById("progress_image");
    document.getElementById('progress').style.visibility = "visible";
    setTimeout(function(){ProgressImage.src = ProgressImage.src},100);
    return true;
}
</script>
</head>
<body>
<div id="login_wrapp">
    <?php
    if(!empty($this->form_error_message)){
        echo '<div class="error"><img src="public/images/caution.gif">';
        foreach($this->form_error_message as $inpname => $inp_err)
        {
            echo "<li>$inp_err</li>";
        }
        echo '</div>';
    }
    ?>
    
    <div id="">
        <div id="login_box">
            <h2>Sweet Login</h2>
            <p>Please enter your username at password below.</p>
            <form method="post">
                <label>Username:</label>
                <input type="text" name="username" value="kusipet">
                <label>Password:</label>
                <input type="password" name="password" value="kusipet">
                <input type="submit" name="login" value="Log me in" onclick="return loadSubmit()">
                <span style="visibility:hidden" id="progress"/><img id="progress_image" style="padding-left:5px;padding-top:5px;" src="public/images/ajax-loader.gif"> processing...</span> 
                <p><a href="#">I lost password</a></p>
            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>
</body>
</html>
