<title>Welcome to NEWTONS CLICK</title>
<?php
	$currentMenu="H";
	require_once("header.php");
?>
</head>

<body>
<div class="container">
<!-------------------------------------------CONTENT----------------------------------------------------->
<div class="background-theme-secondary">
<div class="row">
	<div class="col-xs-10 col-xs-offset-1">
		<img src="images/creative4.gif" class="img-responsive">
	</div>
</div>
<div class="row font-white height-280 sm-height-400 xs-padding-bottom-50">

<div class="col-xs-10 col-xs-offset-3 col-md-offset-1 col-sm-offset-2">
	<div class="circle background-orange shadow ">
	<p id="circle1_txt" class="text-center circle-text">SOCIAL MEDIA STRATEGY</p>
	</div>
	<div class="circle background-dark-orange shadow ">
	<p id="circle2_txt" class="text-center circle-text">VIDEO ADS</p>
	</div>
	<div class="circle background-yellow shadow ">
	<p id="circle3_txt" class="text-center circle-text">BRANDING</p>
	</div>
	<div class="circle background-red shadow ">
	<p id="circle4_txt" class="text-center circle-text">DIGITAL MARKETING</p>
	</div>

</div>


</div>
</div>
<!------------------------------MOVIE BOX***************************/----------------------------->
<div class="row background-white height-400 ">
	
	<div class="col-md-offset-1 col-md-10 shadow margin-top-negative-50">
	
	<div class="col-md-12 background-theme-primary text-center font-white">
		<h1>RECENT CREATIONS</h1>
	</div>
	<div class="col-md-12">
		<div class="col-md-9 col-sm-9">
		  <video  id="videoPlayer"  class="video-js vjs-default-skin" controls preload="none" width="100%" height="400"
			  poster="https://ambientetechnologies.s3.amazonaws.com/nclicks/property_moose.png"
			  data-setup="{}">
			<source src="https://ambientetechnologies.s3.amazonaws.com/nclicks/property_moose.mp4" type='video/mp4' />
			<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
		  </video>
		</div>
		<div class="col-md-3 col-sm-3">
			<div id="videoPlayListDiv" class="row max-height-400">
				
			</div>
		</div>
	</div>
	</div>
	
</div>

<div class="background-white height-200">
	<div class="row padding-top-50">
		<div style="height: 2px;" class="col-md-10 col-md-offset-1 background-blue text-center">
		  <span style="position: relative; top: -0.5em;" class="background-white font-blue ">
			WELCOME TO NEWTONS CLICK
		  </span>
		</div>
	</div>
	<div class="row font-black text-center margin-top-20">
		Newtons click is a global social media strategy,<br /> branding and digital marketing solutions provider.
	</div>
	
	<div class="row margin-top-20">
		<div class="col-md-5">
		
		</div>
		<div class="col-md-2 col-md-offset-0 col-xs-6 col-xs-offset-3 font-white">
			<button class="btn background-theme-primary col-xs-12">REQUEST A QUOTE!</button>
		</div>
		<div class="col-md-5">
		
		</div>
		
	</div>
</div>

<?php
	require_once("footer.php");
?>

<script type="text/javascript">
	$(document).ready(function() {
		Index.init();
	});
</script>
</div>
</body>

