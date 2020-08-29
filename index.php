<?php
session_start();
?>
<html>
<head>
<title>Insurance</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" type="text/css">
<script src="scripts.js"></script>
<style>
/* Style the body */
body {
  font-family: Arial;
  margin: 0;
}

/* Header/Logo Title */
.header1 {
  padding: 60px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 30px;
}

/* Page Content */
.content {padding:20px;}
</style>
<div class="header1">
  <h1>Carsurance</h1>
  <p>We Are The Best</p>
</div>
</head>
<body style="background: #4e5251;color: #fff;">
<header>
	<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="policies.html">&nbsp;Our Products&nbsp;</a>
  <a href="contact.html">Contact&nbsp;</a>
  <a href="about.html">About&nbsp;</a>
   
	<span onclick="openNav()" class="rig">Menu</span>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="insure.php">&nbsp&nbspGet Insured</a>
      <a href="viewinsurance.php">&nbsp&nbspView Insurance Details!</a>
      <a href="renew.php">&nbsp&nbspRenew Insurance</a>
      <a href="claim.php">&nbsp&nbspClaim Insurance</a>
      <a href="adminlog.php">&nbsp&nbspAdmin CP</a>
    </div>
    </div>
</header>
<div style="position:relative">  
<center>  
<img class="mySlides" src="wd mini1.png" width=90% height=90% >
<img class="mySlides" src="wd mini2.png" width=90% height=90% >
<img class="mySlides" src="wd mini3.png" width=90% height=90% >
</center>
  <div style="position:absolute;left:10px;top:50%;">
    <a class="prev" onclick="plusDivs(-1)" ><font size="20px" color="black">&#10094;</font></button>
  </div>
  <div style="position:absolute;right:10px;top:50%;">
<a class="next" height=100%  onclick="plusDivs(+1)"><font size="20px" color="black">&#10095;</font></button>
  </div>
</div>
<script type="text/javascript">
    var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    x[slideIndex-1].style.display = "block"; 
}
</script>

<center>
<footer class="footer-distributed">

			<div class="footer-left">

				<h3><span>CARSURANCE</span></h3>

				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="policies.html">Products</a>
					·
					<a href="about.html">About Us</a>
					·
					<a href="contact.html">Contact</a>
				</p>

				<p class="footer-company-name">Carsurance; 2016</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Sector-08</span> sanpada, Navi Mumbai</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p><strong>+91 9967400995</strong></p>
				</div>
				
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:rtsss@company.com">rtss@company.com</a></p>
				</div>

			</div>
<div class="footer-right">

				<p class="footer-company-about">
					<span>Best In The Market</span>
					      
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-google"></i></a>

				</div>

			</div>

		</footer>

</center>




</Body>
   </html>
