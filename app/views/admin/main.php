
<!DOCTYPE html>
<!-- saved from url=(0023)http://localhost:49558/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>EasterIsland Framework</title>
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

   <div class="row">
<div class="subnav navbar-fixed-top" style="-webkit-box-shadow: 0 1px 10px rgba(0,0,0,.1);box-shadow: 0 1px 10px rgba(0,0,0,.1); background: #fff">
   <div class="span12 inner" style="float: none; margin: 0 auto;">   
    <h3 class="span2" style=" margin-bottom: 0px;padding: 0; text-transform: none; margin-left: 0; margin-top: 0px;"> <img src="<?php echo PUBLIC_IMG_PATH;?>easterislandlogo.png" width="10%" /> EasterIsland</h3>
    <ul class="nav nav-pills span10" style="margin-bottom: 5px; margin-top: 10px;">
       <li><a href="#badges">Basic Information</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Installation<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#buttonGroups">Downloading Code</a></li>
          <li><a href="#buttonDropdowns">Button dropdowns</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Introduction <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#navs">Nav, tabs, pills</a></li>
          <li><a href="#navbar">Navbar</a></li>
          <li><a href="#breadcrumbs">Breadcrumbs</a></li>
          <li><a href="#pagination">Pagination</a></li>
        </ul>
      </li>
      <li><a href="#labels">Tutorial</a></li>
      <li><a href="#badges">Utilities</a></li>
      <li><a href="#typography">References</a></li>
    </ul>
   </div>
  </div>   
   </div>
    <!-- Navbar
    ================================================== 
    <div class="navbar navbar-fixed-top">
         <div class="navbar-inner" style="font-size: 12px;">
               <div class="container">
                 <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                 </a>
                 <a class="brand" href="#" style="margin-top: 5px;">EasterIsland</a>
                 <div class="nav-collapse">
                   <ul class="nav">
                     <li class="active"><a href="#">Home</a></li>
                     <li><a href="#">Link</a></li>
                     <li><a href="#">Link</a></li>
                     <li><a href="#">Link</a></li>
                     <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                       <ul class="dropdown-menu">
                         <li><a href="#">Action</a></li>
                         <li><a href="#">Another action</a></li>
                         <li><a href="#">Something else here</a></li>
                         <li class="divider"></li>
                         <li class="nav-header">Nav header</li>
                         <li><a href="#">Separated link</a></li>
                         <li><a href="#">One more separated link</a></li>
                       </ul>
                     </li>
                   </ul>
                   <form class="navbar-search pull-right" action="" novalidate="novalidate">
                     <input type="text" class="search-query span2" placeholder="Search">
                   </form>
                 </div><!-- /.nav-collapse
               </div>
             </div>
    </div>-->
    <div class="container">
       <!--<div class="span3">
 
        <ul class="nav nav-list">

          <li class="nav-header">Sidebar</li>
          <li class="active"><a href="#"><i class="icon-book"></i>Link</a></li>
          <li><a href="#"><i class="icon-book"></i>Link</a></li>
          <li><a href="#"><i class="icon-book"></i>Link</a></li>
          <li><a href="#"><i class="icon-book"></i>Link</a></li>
          <li class="nav-header">Sidebar</li>

          <li><a href="#"><i class="icon-book"></i>Link</a></li>
          <li><a href="#"><i class="icon-book"></i>Link</a></li>
          <li><a href="#"><i class="icon-book"></i>Link</a></li>
          <li><a href="#"><i class="icon-book"></i>Link</a></li>
          <li><a href="#"><i class="icon-book"></i>Link</a></li>
          <li><a href="#"><i class="icon-book"></i>Link</a></li>

          <li class="nav-header">Sidebar</li>
          <li><a href="#"><i class="icon-book"></i>Link</a></li>
          <li><a href="#"><i class="icon-book"></i>Link</a></li>
          <li><a href="#"><i class="icon-book"></i>Link</a></li>
        </ul>

   </div> -->

        
<div class="row">
      <div class="hero-unit">
        <h1>Welcome to EasterIsland!</h1>
        <p>EasterIsland is developed by Web Outsourcing-Gateway. EasterIsland is best user for Rapid Application Development. It is very highly customizable using MVC method which modules can be easily integrated to the framework. </p>
        <p><a class="btn btn-primary btn-large">Learn more »</a></p>
      </div>
      <div class="row-fluid">

        <div class="span8">
          <h2>Intergrated with HighChart JS</h2>
          <div id="lagyanngchart"></div>
        </div><!--/span-->
        <div class="span4">
          <h2>Highchart Pie</h2>
          <div id="piepiechart"></div>

        </div><!--/span-->
      </div><!--/row-->
<h2>Meet the Team!</h2>      
      <div class="row-fluid">
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details »</a></p>

        </div><!--/span-->
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details »</a></p>
        </div><!--/span-->
        <div class="span4">

          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details »</a></p>
        </div><!--/span-->
      </div><!--/row-->
    </div>      
     
    </div>
    <div class="container">
           <footer class="footer span12">
        
        <p>A <a href="http://twitter.com/talkslab" target="_blank">talkslab</a> production by <a href="http://twitter.com/gsferreira" target="_blank">gsferreira</a>, <a href="http://twitter.com/nelsonreis" target="_blank">nelsonreis</a> and <a href="http://twitter.com/ruimlneves" target="_blank">ruimlneves</a>.</p>
      </footer>   
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
<!-- <script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>bootstrap-scrollspy.js"></script> -->
<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>bootstrap-tab.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>bootstrap-transition.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>bootstrap-typeahead.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>jquery.validate.unobtrusive.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_JS_PATH ?>jquery.unobtrusive-ajax.js"></script>
<!-- Highchart! -->
<script src="<?php echo PUBLIC_JS_PATH ?>highchart/js/highcharts.js"></script>
<script src="<?php echo PUBLIC_JS_PATH ?>highchart/js/modules/exporting.js"></script>
 
<script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'lagyanngchart',
                type: 'line',
                marginRight: 130,
                marginBottom: 25
            },
            title: {
                text: 'Monthly Average Temperature',
                x: -20 //center
            },
            subtitle: {
                text: 'Source: WorldClimate.com',
                x: -20
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                title: {
                    text: 'Temperature (°C)'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                formatter: function() {
                        return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y +'°C';
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -10,
                y: 100,
                borderWidth: 0
            },
            series: [{
                name: 'Tokyo',
                data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
            }, {
                name: 'New York',
                data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
            }, {
                name: 'Berlin',
                data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
            }, {
                name: 'London',
                data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
            }]
        });
    });
    
});

$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'piepiechart',
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Browser market shares'
            },
            tooltip: {
        	    pointFormat: '{series.name}: <b>{point.percentage}%</b>',
            	percentageDecimals: 1
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        color: '#000000',
                        connectorColor: '#000000',
                        formatter: function() {
                            return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
                        }
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Browser share',
                data: [
                    ['Firefox',   45.0],
                    ['IE',       26.8],
                    {
                        name: 'Chrome',
                        y: 12.8,
                        sliced: true,
                        selected: true
                    },
                    ['Safari',    8.5],
                    ['Opera',     6.2],
                    ['Others',   0.7]
                ]
            }]
        });
    });
    
});

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36060270-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>