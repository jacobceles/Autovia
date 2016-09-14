<html>

<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Autovia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	 <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	 <link rel="shortcut icon" type="image/x-icon" href="images/ico_car.png" />
	<link rel="stylesheet" media="all" href="css/style2.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
function myFunction1() {
    document.getElementById("myDropdown1").classList.toggle("show");
}
function myFunction2() {
    document.getElementById("myDropdown2").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

</script>



	<header id="header">
		<div class="container">
			<a href="index.php" id="logo" title="Autovia">Autovia</a>
			<div class="menu-trigger"></div>
			<nav id="menu">
				<ul>
				    <li><a href="index.php">Home</a></li>
					<li>
					<div class="dropdown">
						<button onclick="myFunction()" class="dropbtn" style="border:none; padding: 0; background: none;"><a>Type</a></button>
  						<div id="myDropdown" class="dropdown-content">
    					<a href="results.php?type=hatchback">Hatchback</a>
    					<a href="results.php?type=sedan">Sedan</a>
   						<a href="results.php?type=suv">SUV</a>
   						<a href="results.php?type=minivan">Mini Van</a>
   						<a href="results.php?type=muv">MUV</a>
  					    </div>
					</div>
					</li>
 				</ul>
				<ul>
				    <li><a href="#fancy" class="get-contact">Search</a></li>
					<li><a href="contact.php">About Us</a></li>
   				</ul>
			</nav>
			<!-- / navigation -->
		</div>
		<!-- / container -->
	
	</header>
	<!-- / header -->
<br><br><br>


<?php
require_once('inc/db.php');
$no = $_GET['item'];
$r=mysqli_query($db,"SELECT * FROM car WHERE no=".$no."") or die(mysql_error()); 
$q=mysqli_fetch_array($r);
echo "<title>".$q['name']."</title>";
?>
</head>
<body>
<script>
function spec(evt, spec) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(spec).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
<center>
<?php
echo "<img src='".$q['image']."' width='640' height='480'>";
//echo '<div class="event"><span><img src="images/ico_car.png" alt="car_icon" height="27" width="27"/></span><div class="info">'.$q['brand'].'</div><div class="price">'.$q['price'].'</div></div>';
//echo '<h2><Strong>Rs. </Strong>'.$q['price'].'</h2>';
?>
<br>
<div class='clearfix'>
  <img class='string' src='http://dalewhiteley.co.uk/working/tag-string.gif' width='62' height='54'/>
  <div class="label">
		<div class="front">
      <img class='string inside' src='http://dalewhiteley.co.uk/working/tag-string-front.gif' width="25" height="13"/>
      <p><?php echo $q['brand']?></p>
		</div>
		<div class="back">
      <img class='string inside' src='http://dalewhiteley.co.uk/working/tag-string-back.gif' width="25" height="13"/>
		  <p>Rs. <?php echo $q['price']?></p>
	  </div>
  </div>
</div>
<br><br><br><br><br>

<ul class="tab">
  <li><a href="javascript:;" class="tablinks" onclick="spec(event, 'details')">Details</a></li>
  <li><a href="javascript:;" class="tablinks" onclick="spec(event, 'specifications')">Specifications</a></li>
  <li><a href="javascript:;" class="tablinks" onclick="spec(event, 'dimensions')">Dimensions</a></li>
</ul>

<div id="details" class="tabcontent">
  <h3><strong>DETAILS<strong></h3>
  <p>
  <div class="rwd-table">
  <br>
    <table cellspacing="50" align="center">
	  <tr>
	  <th> Manufacturer: </th>
	  <td><?php echo $q['brand']; ?></td>
	  </tr>
	  <tr>
	  <th> Model: </th>
	  <td><?php echo $q['name']; ?></td>
	  </tr>
	  <tr>
	  <th> Body Type: </th>
	  <td><?php echo $q['type']; ?></td>
	  </tr>
	</table><br>
  </p>
  </div>
</div>

<div id="specifications" class="tabcontent">
  <h3><strong>SPECIFICATIONS<strong></h3>
  <p>
  <div class="rwd-table">
  <br>
	<table cellspacing="50" align="center">
<tr>
	<th>Fuel Type</th>
	<td><?php echo $q['fuel']; ?></td>
</tr>	
<tr>
	<th>Seat Capacity</th>
	<td><?php echo $q['seatcapacity']; ?></td>
</tr>
<tr>
	<th>Displacement</th>
	<td><?php echo $q['displacement'];?></td>
</tr>
<tr>
	<th>No Of Gears</th>
	<td><?php echo $q['gears_no'];?></td>
</tr>

<tr>
	<th>Mileage</th>
	<td><?php echo $q['mileage']; ?></td>
</tr>
<tr>
	<th>Front Brake Type</th>
	<td><?php echo $q['front_brake_type']; ?></td>
</tr>
<tr>
	<th>Rear Brake Type</th>
	<td><?php echo $q['rear_brake_type']; ?></td>
</tr>
<tr>
	<th>Steering Type</th>
	<td><?php echo $q['steering_type'];?></td>
</tr>
<tr>
	<th>Transmission Type</th>
	<td><?php echo $q['transmission_type']; ?></td>
</tr>
<tr>
	<th>Drive Train</th>
	<td><?php echo $q['drive_train'];?></td>
</tr>
<tr>
	<th>Fuel System</th>
	<td><?php echo $q['fuel_system'];?></td>
</tr>
<tr>
	<th>Engine Type</th>
	<td><?php echo $q['engine_type']; ?></td>
</tr>
<tr>
	<th>Cylinders</th>
	<td><?php echo $q['cylinders'];?></td>
</tr>
<tr>
	<th>Turning Radius</th>
	<td><?php echo $q['turning_radius'];?></td>
</tr>
<tr>
	<th>Max. Power</th>
	<td><?php echo $q['max_power'];?></td>
</tr>
</table><br>
  </div>
  </p> 
</div>

<div id="dimensions" class="tabcontent">
  <h3><strong>DIMENSIONS<strong></h3>
  <p>
  <div class="rwd-table">
  <br>
    <table cellspacing="50" align="center">
    <tr>
	<th>Ground Clearence</th>
	<td><?php echo $q['ground_clearence'];?></td>
</tr>
<tr>
	<th>Wheelbase</th>
	<td><?php echo $q['wheelbase'];?></td>
</tr>
    </table><br>
   </div>
  </p>
</div>

</center>
<br><br>
<h3><strong>DESCRIPTION</strong></h3>
<br>
<h4><?php echo $q['descr'] ;?> </h4><br>



        





	<footer id="footer">
		<div class="container">
			<section>
				<article class="col-1">
					<h3>Contact</h3>
					<ul>
						<li class="address"><a href="#">Autovia<br>Kolenchery, India, 683550</a></li>
						<li class="mail"><a href="mailto:jacobceles@gmail.com?Subject=Enquiry%20from%20site" target="_top">autovia@gmail.com</a></li>
						<li class="phone last"><a href="#">(+91) 8281170010</a></li>
					</ul>
				</article>
				<article class="col-3">
					<h3></h3>
				</article>
				<article class="col-4">
					<h3></h3>
				</article>
				<article class="col-2">
					<h3>Quick Links</h3>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li class="last"><a href="contact.php">About Us</a></li>
					</ul>
				</article>
			</section>
		</div>
		<!-- / container -->
	</footer>
	<!-- / footer -->

	<div id="fancy">
		<h2 style="color: #7e8798; font-size: 60px; font-family: 'BebasNeue'; line-height: 68px; font-weight: 300; text-align: center; padding-bottom: 53px;">Advanced Search</h2>
			<div>

<form action="results.php" method="GET">     
<h3 style="font-weight:bold;"> Price :</h3>
<label class="rad">
<input type="radio" name="price" value="3">
<i></i> Below 3 Lakhs
</label>&nbsp;
<label class="rad">
<input type="radio" name="price" value="7" checked="checked">
<i></i> 3 lakhs to 7 Lakhs
</label>&nbsp;
<label class="rad">
<input type="radio" name="price" value="10">
<i></i> 7 lakhs to 10 Lakhs
</label>&nbsp;
<label class="rad">
<input type="radio" name="price" value="11">
<i></i> Above 10 Lakhs
</label>&nbsp;
<br>
<br>
<h3 style="font-weight:bold;">Fuel Type :</h3>
<label class="rad">
  <input type="radio" name="fuel" value="petrol"/>
  <i></i> Petrol
</label>&nbsp;
<label class="rad">
  <input type="radio" name="fuel" value="diesel" />
  <i></i> Diesel
</label>&nbsp;
<label class="rad">
  <input type="radio" name="fuel" value="cng" />
  <i></i> CNG
</label>
<br><br>
<h3 style="font-weight:bold;"> Brand :</h3>
<label class="ckb">
  <input type="checkbox" name="brand1" value="ford"/>
  <i></i> Ford
</label>
<label class="ckb">
  <input type="checkbox" name="brand2" value="cheverolet"/>
  <i></i> Cheverolet
</label>
<label class="ckb">
  <input type="checkbox" name="brand3" value="mitsubishi"/>
  <i></i> Mitsubishi
</label>
<label class="ckb">
  <input type="checkbox" name="brand4" value="maruthi"/>
  <i></i> Maruti
</label>
<br><br>
<label class="ckb">
  <input type="checkbox" name="brand5" value="honda"/>
  <i></i> Honda
</label>
<label class="ckb">
  <input type="checkbox" name="brand6" value="toyota"/>
  <i></i> Toyota
</label>
<label class="ckb">
  <input type="checkbox" name="brand7" value="renault"/>
  <i></i> Renault
</label>
<label class="ckb">
  <input type="checkbox" name="brand8" value="hyundai"/>
  <i></i> Hyundai
</label>
<br>
<br>
<h3 style="font-weight:bold;"> Mileage :</h3>
<label class="rad">
  <input type="radio" name="mile" value="10"  />
  <i></i> Less than 10
</label>&nbsp;
<label class="rad">
  <input type="radio" name="mile" value="14" />
  <i></i> 10-14
</label>&nbsp;
<label class="rad">
  <input type="radio" name="mile" value="18" />
  <i></i> 14-18
</label>&nbsp;
<label class="rad">
  <input type="radio" name="mile" value="22" />
  <i></i> 18-22
</label>&nbsp;
<label class="rad">
  <input type="radio" name="mile" value="23" />
  <i></i> Above 22
</label>&nbsp;
<br>
<br>
<h3 style="font-weight:bold;"> Type :</h3>
<label>
  <input type="radio" name="type" value="sedan"/>
  <img src="images/Sedan.png">
</label>
<label>
  <input type="radio" value="SUV" name="type"/>
  <img src="images/MUVSUV.png">
</label>
<label>
  <input type="radio" value="hatchback" name="type"/>
  <img src="images/Hatchback.png">
</label>
<label>
  <input type="radio" value="minivan" name="type"/>
  <img src="images/Minivan.png">
</label>
<br>
<br>
<button class="myButton">Filter!</button>
</form>
			</div></div>

 

    
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
</body>
</html>