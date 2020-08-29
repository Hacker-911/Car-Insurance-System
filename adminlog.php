<?php 
error_reporting(E_PARSE | E_ERROR);
session_start();
?>
<html>
<head>
<title>Hart Car Insurance</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" type="text/css">
<script src="scripts.js"></script>
<style>
a:link{
	color: #fff;
}
a:visited{
	color: #fff;
}
a:hover{
	color: #fff;
}
a:active{
	color:#fff;
}
</style>
</head>
<body>
<div id="insurehead">ADMIN CP
<span onclick="openNav()" class="rig">Menu</span>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href='index.php'>Go Home</a>
     <br>
     <br>
    <div align="center"><div id="line"></div></div>
   </div></div>
<div style="padding: 15px;">
<?php
error_reporting(E_PARSE | E_ERROR);
include("config.php");
if($_SESSION['log']==true){
	echo "<br><Br>
	Welcome Admin. You are signed in!
	<Br><br>
	<div align='center'>
	<div class='cardone'><br>
    <a href='admindb.php'>View All Records of Insurances</a><br><Br>
    <a href='del.php'>Delete a record</a><Br><Br>
    <form action='logout.php' method='post'>
     <button type='submit'>LOGOUT</button>
    </form>
    </div>
    </div>
    ";
}
else{
	echo "You were not logged in!<br><br><div id='button'><a href='admin.php'>Log In first!</A></div>";
}
?>
</div>
</body>
</html>
