<!doctype html>
<html>
<head>
    <base href="http://localhost/sweet/" target="_blank">
    <title><?php if(!empty($this->page_title)) echo $this->page_title; else echo '404 Page not found'; ?></title>
    <style type="text/css">
        *, body{
            padding:0;
            margin:0;
        }
        
        body{
            height: 100%;
        }
        
        #container{
            margin: 0 auto;
            width: 400px;
            background-color: #eee;
            margin-top: 25%;
        }
        
        #inner_tube{
            padding:20px;
        }
        
        h2{
            font-size: 43px;
            color:#333;
        }
        
        strong{
            font: 13px tahoma;
        }
        
        a{
            text-decoration: none;
            color: darkcyan;
            font:12px arial;
            display:block;
            margin-top: 20px;
            
        }
        a:hover{
            text-decoration: underline;
        }
        
    </style>
</head>    
<body>
    <div id="container">
        <div id="inner_tube">
            <h2><?php if(!empty($this->page_title)) echo $this->page_title; else echo '404 Page not found'; ?></h2>
            <strong><?php if(!empty($this->msg)) echo $this->msg; else echo 'Are you lost? I\'m very sory but the page you are looking for does not exist.'; ?></strong>
            <a href="" target="_self">&#9668; Go back to Home page</a>
        </div>
    </div>    
</body>
</html>