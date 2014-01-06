<?
require('settings.php');
$string = file_get_contents($filepath.$filename);
$obj = json_decode($string);
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
            <a class="navbar-brand" href="#"><img src="http://mc.twit.tv/images/logo.png" width="200" height="35" ></a>
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
      
      <div class="business-header" style="background: url(http://mc.twit.tv/images/51f1d56262dffe191f000005_2013-07-25_20.45.31.png) center center no-repeat;">
  		<div class="padder"></div> 
        <div class="header">
        <div class="container">
        
          <h1 style="color:#FFF;"><? echo $obj->{'l1'};?></h1>
  			 <h4 style="color:#FFF;"><? echo $obj->{'l2'};?></h4>
        </div>
        
        </div>
    
    </div>

      <!-- Begin page content -->
      <div class="container">
      <p class="lead"> Server Infomation
      
      </p>
      <hr>
      <p>
      <? echo $obj->{'body'};?>
      
      
      </p>
      </div>
    </div>

    <div id="footer">
      <div class="container">
      	<div class="ro text-muted">
      		<div class="col-lg-8">
           
                Chat - mc.twit.tv #twitcraft
                </div>
       			
         	<div class="col-lg-4">
       
        <a class="footer-link" href="mumble://mc.twit.tv?title=Root&amp;version=1.2.0" target="_blank">Mumble</a>&middot;
        <a class="footer-link" href="https://www.facebook.com/TWiTCraft" target="_self">Facebook</a>&middot;
        <a class="footer-link" href="https://twitter.com/twitcraft" target="_self">Twitter</a>
        
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
