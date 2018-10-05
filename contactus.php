<title>Welcome to NEWTONS CLICK</title>
<?php
	$currentMenu="C_US";
	require_once("header.php");
?>
<script src="http://maps.googleapis.com/maps/api/js"></script>
</head>

<body>
<div class="container">
<!-------------------------------------------CONTENT----------------------------------------------------->
<div class="background-theme-secondary height-600">
	<div class="row">
		<div class="col-md-5 col-md-offset-1 col-sm-offset-1 font-25 margin-top-100">
			<div id="googleMap" class="height-400"></div>	
		</div>
		<div class="col-md-5 col-md-offset-1 col-sm-offset-1 font-25 margin-top-100">
			<strong>Gagan Manchanda</strong><br/>
				210- 1761 Sheppard Avenue East, North York
			<br /> Ontario
			<br /> M2J0A5 
			<br />  647-980-6160
			<br /><a href="mailto:sales@newtonsclick.com" class="emailLink">sales@newtonsclick.com</a>	 
		</div>
	</div>
</div>

<?php
	require_once("footer.php");
?>
</div>
<script>
var x=new google.maps.LatLng(43.7755814,-79.3431832);

function initialize()
{
var mapProp = {
  center:x,
  zoom:18,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</body>

