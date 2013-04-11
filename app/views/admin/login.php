
<html>
<head>
<title><?php if(!empty($this->page_title)) echo $this->page_title; else echo 'Easter Island'; ?></title>
  <!-- Font awesome - iconic font with IE7 support --> 
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200' rel='stylesheet' type='text/css'>
<style type="text/css">
    *{
        padding: 0;
        margin: 0;
    }
    
    body{
        background-image: url('../public/images/stripe.png');
         font-family: 'Yanone Kaffeesatz', sans-serif;
         font-size: 12px;
    }
    
    *:focus{
        outline: none;
    }
    label{
        display: block;
        font: 12px;
    }
    
    input[type=text], input[type=password]{
        width: 100%;
        border: thin solid #ccc;
        padding: 8px;
        margin: 5px 0 10px;
    }
    
    input[type=submit]{
        padding: 5px 5px;
        border: thin solid #ccc;
        margin: 0px 0;
        background-color: #00b8c1;
        color: #e0e8f4;
        font-size: 11px;
    }
    
    input[type=submit]:hover{
        cursor: pointer;
        background-color: #00c4ad;
    }
    
    a{
        color: orangered;
        text-decoration: none;
        font:10px;
    }
    
    a:hover{
        text-decoration: underline;
    }
    
    #login_wrapp{
        margin: 0 auto;
        width: 500px;
        margin-top: 10%;
        background-color: #eee;
        padding: 20px 30px;
        /* -moz-box-shadow: 0 0 25px #858585;
        -webkit-box-shadow: 0 0 25px #858585;
        box-shadow: 0 0 25px #858585;*/
        border: #cecdcd medium solid; 
    }
    
    #login_box{
        width: 60%;
        margin: 0 auto;
        float: left;
    }
    #footer_wrapp{
        margin: 0 auto;
        width: 500px;
        margin-top: 20px;
        font-family: arial;
        color: #a9a9a9;
        text-align: center;
    }
    .error{
        font: 11px;
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
        font: 12px;
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
        font: 11px;
        color: #999;
    }
    
    #iconAsk{
         float: right;
         width:23px;
         height:22px;
         background: url('../public/images/glyphicons-halflings.png') -92px -92px;       
    }
    #iconAsk:hover{
         background: url('../public/images/glyphicons-halflings-gray.png') -92px -92px;
    }    
    #iconClose{
         float: right;
         width:23px;
         height:22px;
         background: url('../public/images/glyphicons-halflings.png') -44px -92px;
    }
    #iconClose:hover{
         background: url('../public/images/glyphicons-halflings-gray.png') -44px -92px;
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
        <div style="width: 100%; float: left; ">
           <div id="iconClose"></div>
           <div id="iconAsk"></div>
        </div>
        <div style="width: 35%; float: left; border-right: solid thin #c2c2c2; margin-right: 4%; ">
           <img src="<?php echo PUBLIC_IMG_PATH;?>easterislandlogo.png" style="width: 90%; " />
        </div>
   
        <div id="login_box">
 
           <form method="post">
            <h2>EasterIsland Login</h2>
            <p>
              <?php
               if(!empty($form_error_message)){
                   echo '<div class="error"><img src="'.PUBLIC_IMG_PATH.'caution.gif">';
                   foreach($form_error_message as $inpname => $inp_err)
                   {
                       echo "<li>$inp_err</li>";
                   }
                   echo '</div>';
               }else{
                  echo "Please enter your username and password below.";
               }
               ?>               
               </p>
            
                <label>Username:</label>
                <input type="text" name="username" value="kusipet">
                <label>Password:</label>
                <input type="password" name="password" value="kusipet">
<!--                <span style="visibility:hidden" id="progress"/><img id="progress_image" style="padding-left:5px;padding-top:5px;" src="public/images/ajax-loader.gif"> processing...</span> -->
                <div style="width: 50%; float: left; text-align: left;">
                   <a href="#">I lost password</a>
                </div>
                <div style="width: 50%; float: left; text-align: right;">
                   <input type="submit" name="login" value="Log me in" onclick="return loadSubmit()">
                </div>
            </form>
        </div>
        <div class="clear"></div>
</div>
        <div id="footer_wrapp">
           <strong>EasterIsland Framework</strong> is owned and developed by <img src="<?php echo PUBLIC_IMG_PATH;?>wogico.png" /> Web Outsourcing-Gateway. 
        </div>
</body>
</html>
