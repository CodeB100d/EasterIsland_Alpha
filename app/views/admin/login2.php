<!DOCTYPE html>
<!-- saved from url=(0023)http://localhost:49558/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>EasterIsland</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_CSS_PATH ?>metro-bootstrap.css">

    <style>
        body
        {
            padding-top: 70px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
    </style>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
<body data-spy="scroll" data-target=".subnav" data-offset="50" screen_capture_injected="true">
    <!-- Navbar
    ================================================== -->

    <div id="example" class="modal hide fade" style="display: none;">
            <div class="modal-header">
              <a class="close" data-dismiss="modal">×</a>
              <h3>About</h3>
            </div>
            <div class="modal-body">
              <h4>Welcome!</h4>
              <p>EasterIsland Framework is developed by the Web Outsourcing Gateway in order to meet their client needs.</p>
            </div>
            <div class="modal-footer">
              <a href="#" class="btn" data-dismiss="modal">Close</a>
            </div>
          </div>
    
     <div class="container">
        
          <div class="row">
               <div class="span7" style="float: none; margin: 0 auto;">
                    <div class="row">
                       <a data-toggle="modal" href="#example" class="close" style="float: none;" >?</a>
                     <div class="span2"><img src="<?php echo PUBLIC_IMG_PATH;?>easterislandlogo.png" /></div>
                     <div class="span4">
                        <h3 style="text-transform:none;">EasterIsland Login <small> Powered by <img src="<?php echo PUBLIC_IMG_PATH;?>wogico.png" /></small></h3>
              <?php
               if(!empty($form_error_message)){
                   echo '<div class="alert"><button class="close" data-dismiss="alert">×</button><strong>Warning!</strong> <br/>';
                   foreach($form_error_message as $inpname => $inp_err)
                   {
                       echo "$inp_err <br/>";
                   }
                   echo '</div>';
               }
               ?>                    
                        <form method="post">
                           <input type="text" name="username" class="span4" placeholder="Type your Username...">
                           <input type="password" name="password" class="span4" placeholder="Type your password...">
                           <h6 class="span2" style="margin-left: 0 ;"><a href="#"> I lost my Password... </a></h6>
                           <input type="submit" name="login" class="btn btn-small btn-primary pull-right" value="Log me in" />
                        </form>
                     </div>                     
                    </div>
               </div>       
          </div>
    </div>
    <!-- /container -->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>jquery.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>bootstrap-tooltip.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>bootstrap-alert.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>bootstrap-button.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>bootstrap-carousel.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>bootstrap-collapse.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>bootstrap-dropdown.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>bootstrap-modal.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>bootstrap-popover.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>bootstrap-scrollspy.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>bootstrap-tab.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>bootstrap-transition.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>bootstrap-typeahead.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>jquery.validate.unobtrusive.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>jquery.unobtrusive-ajax.js"></script>
 
<script type="text/javascript">

   function loadSubmit() {
       var ProgressImage = document.getElementById("progress_image");
       document.getElementById('progress').style.visibility = "visible";
       setTimeout(function(){ProgressImage.src = ProgressImage.src},100);
       return true;
   }

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36060270-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body></html>