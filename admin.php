<?php
require('settings.php');

$line1 = $_POST['l1'];
$line2 = $_POST['l2'];
$body = $_POST['BODY'];

$title = $_POST['title'];
$icon = $_POST['icon'];
$bg = $_POST['bg'];

if(isset($line1)&&isset($line2)&&isset($body)&&isset($title)&&isset($icon)&&isset($bg)){
 $item = array();
 $item['l1'] = $line1;
 $item['l2'] = $line2;
 $item['body'] = $body;
 $item['title'] = $title;
 $item['icon'] = $icon;
 $item['bg'] = $bg;
 
 
 $json = json_encode($item);
 file_put_contents($filepath.$filename, $json);
}

//read and parse json
$string = file_get_contents($filepath.$filename);
$obj = json_decode($string);




    if($_SERVER['PHP_AUTH_PW'] == $users[$_SERVER['PHP_AUTH_USER']])
    {
        ?>
        
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <title><? echo $obj->{'title'};?></title>
    <link rel="apple-touch-icon" href="<? echo $obj->{'icon'};?>">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/twitcraft.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-default navbar-fixed-top minecraft" role="navigation">
        <div class="container" style="padding-top:15px;">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="http://mc.twit.tv/images/51f17cf8b64e6d411600009c_logo.png" width="200" height="35" ></a>
          </div>
          <div class="collapse navbar-collapse">
                     <ul class="nav navbar-nav navbar-right">
                <li><a href="http://mc.twit.tv/forums/" target="_self">Forums</a></li>
                <li><a href="http://mc.twit.tv:8123/" target="_self">Live Map</a></li>
                <li><a href="http://mc.twit.tv/chat/" target="_self">Game Chat</a></li>
                <li><a href="http://mc.twit.tv/forums/ucp.php?mode=login" target="_blank">Login</a></li>
              </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
     
      <!-- Begin page content -->
      <div class="container">
      	<div class="page-header">
          <h1>Simple Site Editor</h1>
        </div>
      <form class="form-horizontal" role="form" method="post" action="admin.php">
     <fieldset>
	<legend>Header Settings</legend>
	  <div class="form-group">
	  	<div class="col-sm-6">
       <input type="text" class="form-control" name="title" placeholder="Site Title" value="<? echo $obj->{'title'};?>" >
       </div>
 
       <div class="col-sm-6">
       <input type="text" class="form-control" name="icon" placeholder="icon url eg./images/apple-touch-icon.png"  value="<? echo $obj->{'icon'};?>" >
    </div>
  </div>
  
</fieldset>
     
     
     
	<fieldset>
	<legend>Main Header</legend>
	  <div class="form-group">
	  	<div class="col-sm-6">
       <input type="text" class="form-control" name="l1" placeholder="Line 1 Text" value="<? echo $obj->{'l1'};?>" >
       </div>
 
       <div class="col-sm-6">
       <input type="text" class="form-control" name="l2" placeholder="Line 2 Text"  value="<? echo $obj->{'l2'};?>" >
    </div>
  </div>
  
</fieldset>
<fieldset>
	<legend>Main content</legend>
	 <div class="form-group">
     <div class="col-sm-12">
       <input type="text" class="form-control" name="bg" placeholder="Main Image url"  value="<? echo $obj->{'bg'};?>" >
    </div>
    <hr>
	  	<div class="col-sm-12">
        <label>Main content</label>
        <textarea name="BODY" rows="10" class="form-control"> <? echo $obj->{'body'};?></textarea>
        </div>
        </div>
        </fieldset>

	<input type="submit" class="btn btn-primary" style="width:100%;"> 
</form>

    </div>
</div>
    <div id="footer">
      <div class="container">
      	<div class="row text-muted">
      		<div class="col-lg-8">
           
                System Designed and built by Robert Fletcher - robrotheram
                </div>
       			
         	<div class="col-lg-4">
       
         <a href="http://facebook.com/robrotheram" >Facebook</a> &middot; 
         <a href="http://twitter.com/robrotheram" >Twitter</a> &middot;
         <a href="http://gplus.to/robrotheram" > Google+</a></p>
       
        
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

        <?
    }
    else
    {
        //Send headers to cause a browser to request
        //username and password from user
        header("WWW-Authenticate: " .
            "Site Admin");
        header("HTTP/1.0 401 Unauthorized");

        //Show failure text, which browsers usually
        //show only after several failed attempts
        print("This page is protected by HTTP " .
            "<br>\n");
    }
?>