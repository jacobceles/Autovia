<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Autovia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	 <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	  <link rel="shortcut icon" type="image/x-icon" href="images/ico_car.png" />
	<link rel="stylesheet" media="all" href="css/style.css">
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
	
	<div class="slider">
		<ul class="bxslider">
			<li style="background-size: cover;height: 600px; background:url(images/slide3.jpg) no-repeat" >
				<div class="container">
					<div class="info">
						<h2>The cars we drive say<br><span>a lot about us</span></h2>
					</div>
				</div>
				<!-- / content -->
			</li>
			<li style="background-size: cover;height: 600px; background:url(images/slide2.jpg) no-repeat">
				<div class="container">
					<div class="info">
						<h2>A car for every purse<br><span>and purpose</span></h2>
					</div>
				</div>
				<!-- / content -->
			</li>
			<li style="background-size: cover;height: 600px; background:url(images/slide1.jpg) no-repeat">
				<div class="container">
					<div class="info">
						<h2>Happiness is exploring<br><span>in your car</span></h2>
						<!--<a href="#">More</a> -->
					</div>
				</div>
				<!-- / content -->
			</li>
		</ul>
		<div class="bg-bottom"></div>
	</div>
	



	<section class="posts">
		<div class="container">

<form action="results.php" method="GET">     
<div id="sub-entry">
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
  <input type="checkbox" name="brand4" value="maruti"/>
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
  <input type="checkbox" name="brand7" value="volkswagen"/>
  <i></i> Volkswagen
</label>
<label class="ckb">
  <input type="checkbox" name="brand8" value="hyundai"/>
  <i></i> Hyundai
</label>
<label class="ckb">
  <input type="checkbox" name="brand9" value="fiat"/>
  <i></i> Fiat
</label>
</div>

<div id="sub-entry">
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
<br><br>
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
<br><br><br>
<button class="myButton">Filter!</button>
</div>
</form>
		
		</div>
		<!-- / container -->
	</section>

	


	

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
		<h2>Advanced Search</h2>
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
  <input type="checkbox" name="brand4" value="maruti"/>
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
  <input type="checkbox" name="brand7" value="volkswagen"/>
  <i></i> Volkswagen
</label>
<label class="ckb">
  <input type="checkbox" name="brand8" value="hyundai"/>
  <i></i> Hyundai
</label>
<label class="ckb">
  <input type="checkbox" name="brand9" value="fiat"/>
  <i></i> Fiat
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
			</div>

 
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
</body>
</html>