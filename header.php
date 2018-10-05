<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="/images/favicon.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-------------------------------------------HEADER------------------------------------------------------>
<link href="resources/libs/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
<link href="resources/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="resources/libs/videojs/video-js.css" rel="stylesheet" type="text/css">
<link href="resources/libs/malihu-scroll/jquery.mCustomScrollbar.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="css.css"/>
<link href="resources/css/custom-css.css" rel="stylesheet" type="text/css">	
<header class="navbar navbar-static-top bs-docs-nav navbar-height" id="top" role="banner">
  <div class="container">
    <div class="navbar-header col-sm-5 sm-margin-top-10">
      <button type="button" class="navbar-toggle"  data-toggle="collapse" data-target="#bs-navbar">
       <p> <i class="fa fa-bars font-25 font-white"></i></p>
      </button>
      <a href="index.php" class="navbar-brand col-xs-10 padding-0">
		 <!-- <span class="col-xs-3 col-md-6"><img src="images/logo.png" class="img-responsive"></span> -->
		 <span class="col-xs-12 col-md-6 navbar-logo-text"><img src="images/escape.png" class="img-responsive"></span>
	  </a> 
    </div>
    <nav id="bs-navbar" class="collapse navbar-collapse navbar-logo-text font-white">
      <ul class="nav navbar-nav">
        
      </ul>
	  
<?php
	$activeHome = "";
	$activeAUs = "";
	$activeCUs = "";
	$activeService = "";
	
	if (isset($currentMenu)) {
		if ($currentMenu == "H") {
			$activeHome = "activeMenu";		
		}
		else if ($currentMenu == "C_US") {
			$activeCUs = "activeMenu";		
		}
		else if ($currentMenu == "A_US") {
			$activeAUs = "activeMenu";		
		}
		else {
			$activeHome = "activeMenu";
		}
	}
	else {
		$activeHome = "activeMenu";
	}
	
?>	  
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php" class="<?=$activeHome?>">HOME</a></li>
        <li><a href="#" class="<?=$activeService?>">SERVICES</a></li>
        <li><a href="contactus.php" class="<?=$activeCUs?>">CONTACT</a></li>
        <li><a href="aboutus.php" class="<?=$activeAUs?>">ABOUT US</a></li>
      </ul>
    </nav>
  </div>
</header>
