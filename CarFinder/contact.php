<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Anita Public School</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
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
				    <li><a href="home.php">Home</a></li>
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
	
	<div class="divider"></div>
	
	<div class="content">
		<div class="container">
			<h1 class="single">About Us</h1>

			<div class="main-content">
				<p>A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.A group of people who wants to be the change.</p><br>
<h2><a href="mailto:jacobceles@gmail.com?Subject=Enquiry%20from%20site" target="_top">Send us a mail!</a></h2>
				<br><br><hr>
			</div>
	
		</div>
		<!-- / container -->
	</div>
	
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
			<p class="copy">© 2007 www.anitaicse.com</p>
		</div>
		<!-- / container -->
	</footer>
	<!-- / footer -->

	<div id="fancy">
		<h2>Advanced Search</h2>
			<div>

<form>     
<h3> Price :</h3>
<label class="rad">
<input type="radio" name="price" value="3">
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
  <input type="radio" name="price1" value="petrol" />
  <i></i> Petrol
</label>&nbsp;
<label class="rad">
  <input type="radio" name="price1" value="diesel" />
  <i></i> Diesel
</label>&nbsp;
<label class="rad">
  <input type="radio" name="price1" value="cng" />
  <i></i> CNG
</label>
<br><br>
<h3> Brand :</h3>
<label class="ckb">
  <input type="checkbox" name="brand1" value="ford"/>
  <i></i> Ford
</label>
<label class="ckb">
  <input type="checkbox" name="brand1" value="cheverolet"/>
  <i></i> Cheverolet
</label>
<label class="ckb">
  <input type="checkbox" name="brand1" value="mitsubishi"/>
  <i></i> Mitsubishi
</label>
<label class="ckb">
  <input type="checkbox" name="brand1" value="maruti"/>
  <i></i> Maruti
</label>
<br><br>
<label class="ckb">
  <input type="checkbox" name="brand1" value="honda"/>
  <i></i> Honda
</label>
<label class="ckb">
  <input type="checkbox" name="brand1" value="toyota"/>
  <i></i> Toyota
</label>
<label class="ckb">
  <input type="checkbox" name="brand1" value="renault"/>
  <i></i> Renault
</label>
<label class="ckb">
  <input type="checkbox" name="brand1" value="hyundai"/>
  <i></i> Hyundai
</label>
<br>
<br>
<h3> Mileage :</h3>
<label class="rad">
  <input type="radio" name="mile" value="10" />
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
<h3> Type :</h3>
<label>
  <input type="radio" name="type"/>
  <img src="images/Sedan.png">
</label>
<label>
  <input type="radio" name="type"/>
  <img src="images/MUVSUV.png">
</label>
<label>
  <input type="radio" name="type"/>
  <img src="images/Hatchback.png">
</label>
<label>
  <input type="radio" name="type"/>
  <img src="images/Minivan.png">
</label>
<br>
<br>
<a href="#" class="myButton">Filter!</a>
</form>
			</div>

 

    
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
</body>
</html>