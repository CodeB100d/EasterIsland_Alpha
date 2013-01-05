<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Easter Island Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">


        <link href="<?php echo CSS_PATH; ?>bootstrap.css" rel="stylesheet">

        <style type="text/css">
            body {
background: #ffffff; /* Old browsers */
background: -moz-linear-gradient(top,  #ffffff 24%, #d6f9ff 51%, #9ee8fa 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(24%,#ffffff), color-stop(51%,#d6f9ff), color-stop(100%,#9ee8fa)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #ffffff 24%,#d6f9ff 51%,#9ee8fa 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #ffffff 24%,#d6f9ff 51%,#9ee8fa 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #ffffff 24%,#d6f9ff 51%,#9ee8fa 100%); /* IE10+ */
background: linear-gradient(to bottom,  #ffffff 24%,#d6f9ff 51%,#9ee8fa 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#9ee8fa',GradientType=0 ); /* IE6-9 */

            }


            /* Custom container */
            .container-narrow {
                margin: 0 auto;

                max-width: 700px;

            }
            .container-narrow > hr {
                margin: 30px 0;
            }

            /* Main marketing message and sign up button */
            .jumbotron {
                margin: 60px 0;
                text-align: center;

            }

            .jumbotron h1 {
                font-size: 72px;
                line-height: 1;
                font-family: 'Dosis', sans-serif;
                font-family: 'Lato', sans-serif;
            }
            .jumbotron .btn {
                font-size: 21px;
                padding: 14px 24px;
            }

            /* Supporting marketing content */
            .marketing {
                margin: 60px 0;
            }
            .marketing p + h4 {
                margin-top: 28px;
            }

            .footer{
                color: #999;
                text-align: center;
                padding-top:5px;
            }

            #top_head{
                position: relative;
                padding: 30px 0;


                background: #ff5507; /* Old browsers */
                background: -moz-linear-gradient(-45deg,  #ff5507 1%, #ffffff 15%, #59fffc 28%, #0066b5 40%, #0099e0 47%, #045489 65%, #80f207 76%, #b8ff07 83%, #ffffff 91%, #ff8c0a 96%, #ffffff 100%); /* FF3.6+ */
                background: -webkit-gradient(linear, left top, right bottom, color-stop(1%,#ff5507), color-stop(15%,#ffffff), color-stop(28%,#59fffc), color-stop(40%,#0066b5), color-stop(47%,#0099e0), color-stop(65%,#045489), color-stop(76%,#80f207), color-stop(83%,#b8ff07), color-stop(91%,#ffffff), color-stop(96%,#ff8c0a), color-stop(100%,#ffffff)); /* Chrome,Safari4+ */
                background: -webkit-linear-gradient(-45deg,  #ff5507 1%,#ffffff 15%,#59fffc 28%,#0066b5 40%,#0099e0 47%,#045489 65%,#80f207 76%,#b8ff07 83%,#ffffff 91%,#ff8c0a 96%,#ffffff 100%); /* Chrome10+,Safari5.1+ */
                background: -o-linear-gradient(-45deg,  #ff5507 1%,#ffffff 15%,#59fffc 28%,#0066b5 40%,#0099e0 47%,#045489 65%,#80f207 76%,#b8ff07 83%,#ffffff 91%,#ff8c0a 96%,#ffffff 100%); /* Opera 11.10+ */
                background: -ms-linear-gradient(-45deg,  #ff5507 1%,#ffffff 15%,#59fffc 28%,#0066b5 40%,#0099e0 47%,#045489 65%,#80f207 76%,#b8ff07 83%,#ffffff 91%,#ff8c0a 96%,#ffffff 100%); /* IE10+ */
                background: linear-gradient(135deg,  #ff5507 1%,#ffffff 15%,#59fffc 28%,#0066b5 40%,#0099e0 47%,#045489 65%,#80f207 76%,#b8ff07 83%,#ffffff 91%,#ff8c0a 96%,#ffffff 100%); /* W3C */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff5507', endColorstr='#ffffff',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */


                -webkit-box-shadow: inset 0 3px 7px rgba(0, 0, 0, .2), inset 0 -3px 7px rgba(0, 0, 0, .2);
                -moz-box-shadow: inset 0 3px 7px rgba(0,0,0,.2), inset 0 -3px 7px rgba(0,0,0,.2);
                box-shadow: inset 0 3px 7px rgba(0, 0, 0, .2), inset 0 -3px 7px rgba(0, 0, 0, .2);
                margin-bottom:50px;
            }

            #bottom{
                position: relative;
                height:2px;
                background: #ff5507; /* Old browsers */
                background: -moz-linear-gradient(-45deg,  #ff5507 1%, #ffffff 15%, #59fffc 28%, #0066b5 40%, #0099e0 47%, #045489 65%, #80f207 76%, #b8ff07 83%, #ffffff 91%, #ff8c0a 96%, #ffffff 100%); /* FF3.6+ */
                background: -webkit-gradient(linear, left top, right bottom, color-stop(1%,#ff5507), color-stop(15%,#ffffff), color-stop(28%,#59fffc), color-stop(40%,#0066b5), color-stop(47%,#0099e0), color-stop(65%,#045489), color-stop(76%,#80f207), color-stop(83%,#b8ff07), color-stop(91%,#ffffff), color-stop(96%,#ff8c0a), color-stop(100%,#ffffff)); /* Chrome,Safari4+ */
                background: -webkit-linear-gradient(-45deg,  #ff5507 1%,#ffffff 15%,#59fffc 28%,#0066b5 40%,#0099e0 47%,#045489 65%,#80f207 76%,#b8ff07 83%,#ffffff 91%,#ff8c0a 96%,#ffffff 100%); /* Chrome10+,Safari5.1+ */
                background: -o-linear-gradient(-45deg,  #ff5507 1%,#ffffff 15%,#59fffc 28%,#0066b5 40%,#0099e0 47%,#045489 65%,#80f207 76%,#b8ff07 83%,#ffffff 91%,#ff8c0a 96%,#ffffff 100%); /* Opera 11.10+ */
                background: -ms-linear-gradient(-45deg,  #ff5507 1%,#ffffff 15%,#59fffc 28%,#0066b5 40%,#0099e0 47%,#045489 65%,#80f207 76%,#b8ff07 83%,#ffffff 91%,#ff8c0a 96%,#ffffff 100%); /* IE10+ */
                background: linear-gradient(135deg,  #ff5507 1%,#ffffff 15%,#59fffc 28%,#0066b5 40%,#0099e0 47%,#045489 65%,#80f207 76%,#b8ff07 83%,#ffffff 91%,#ff8c0a 96%,#ffffff 100%); /* W3C */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff5507', endColorstr='#ffffff',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */


                -webkit-box-shadow: inset 0 3px 7px rgba(0, 0, 0, .2), inset 0 -3px 7px rgba(0, 0, 0, .2);
                -moz-box-shadow: inset 0 3px 7px rgba(0,0,0,.2), inset 0 -3px 7px rgba(0,0,0,.2);
                box-shadow: inset 0 3px 7px rgba(0, 0, 0, .2), inset 0 -3px 7px rgba(0, 0, 0, .2);
            }

            .top_head:after{
                content: '';
                display: block;
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background: url(<?php echo IMG_PATH; ?>bgs/woven.png) repeat center center;
                opacity: .2;
            }

            .span6 h4{
                color:#B8FF07;
                text-transform:uppercase;
                font-family: 'Lato', sans-serif;
            }

            #f_content{
                
            }


        </style>
        <link href='http://fonts.googleapis.com/css?family=Dosis:200|Lato:100' rel='stylesheet' type='text/css'>
        <link href="<?php echo CSS_PATH; ?>bootstrap-responsive.css" rel="stylesheet">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>

    <body>