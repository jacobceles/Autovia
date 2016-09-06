<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>CarFinder</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	 <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
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
			<a href="home.php" id="logo" title="CarFinder">CarFinder</a>
			<div class="menu-trigger"></div>
			<nav id="menu">
				<ul>
				    <li><a href="activities.html">Home</a></li>
					<li>
					<div class="dropdown">
						<button onclick="myFunction()" class="dropbtn" style="border:none; padding: 0; background: none;"><a>Type</a></button>
  						<div id="myDropdown" class="dropdown-content">
    					<a href="patron.html">Hatchback</a>
    					<a href="origin.html">Sedan</a>
   						<a href="administration.html">SUV</a>
   						<a href="foreword.html">Mini Van</a>
   						<a href="foreword.html">MUV</a>
  					    </div>
					</div>
					</li>
 				</ul>
				<ul>
				    <li><a href="#fancy" class="get-contact">Search</a></li>
					<li><a href="contact.php">Contact Us</a></li>
   				</ul>
			</nav>
			<!-- / navigation -->
		</div>
		<!-- / container -->
	
	</header>
	<!-- / header -->
	
	<div class="slider">
		<ul class="bxslider">
			<li style="background-size: cover;height: 600px; background:url(images/slide1.png) no-repeat" >
				<div class="container">
					<div class="info">
						<h2>Blah Blah<br><span>Blah Blah</span></h2>
						<a href="#">Blah Blah</a>
					</div>
				</div>
				<!-- / content -->
			</li>
			<li style="background-size: cover;height: 600px; background:url(images/slide1.png) no-repeat">
				<div class="container">
					<div class="info">
						<h2>Blah Blah<br><span>Blah Blah</span></h2>
						<a href="#">Blah Blah</a>
					</div>
				</div>
				<!-- / content -->
			</li>
			<li style="background-size: cover;height: 600px; background:url(images/slide1.png) no-repeat">
				<div class="container">
					<div class="info">
						<h2>Blah Blah<br><span>Blah Blah</span></h2>
						<a href="#">Blah Blah</a>
					</div>
				</div>
				<!-- / content -->
			</li>
		</ul>
		<div class="bg-bottom"></div>
	</div>
	



	<section class="posts">
		<div class="container">
			<article>



<div id="wrap">
  <form action="" autocomplete="on">
  <input id="search" name="search" type="text" placeholder="What're we looking for ?"><input id="search_submit" value="Rechercher" type="submit">
  </form>
</div>


			</article>
		</div>
		<!-- / container -->
	</section>

	


	

	<footer id="footer">
		<div class="container">
			<section>
				<article class="col-1">
					<h3>Contact</h3>
					<ul>
						<li class="address"><a href="#">CompanyName<br>Kolenchery, India, 683550</a></li>
						<li class="mail"><a href="#">CompanyName@gmail.com</a></li>
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
						<li><a href="#">Home</a></li>
						<li class="last"><a href="contact.php">Contact Us</a></li>
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

<form action="product.php" method="GET">     
<h3> Price :</h3>
<label class="rad">
<input type="radio" name="price" value="3" checked="checked">
<i></i> Below 3 Lakhs
</label>&nbsp;
<label class="rad">
<input type="radio" name="price" value="7">
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
<h3>Fuel Type :</h3>
<label class="rad">
  <input type="radio" name="fuel" value="petrol" checked="checked"/>
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
<h3> Brand :</h3>
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
<h3> Mileage :</h3>
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
  <input type="radio" name="mile" value="22" checked="checked" />
  <i></i> 18-22
</label>&nbsp;
<label class="rad">
  <input type="radio" name="mile" value="23" />
  <i></i> Above 22
</label>&nbsp;
<br>
<br>
<h3> Type :</h3>
<label>
  <input type="radio" name="type" value="sedan" checked="checked"/>
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
  <input type="radio" value="minivan name="type"/>
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