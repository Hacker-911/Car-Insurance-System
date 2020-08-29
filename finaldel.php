<?php
session_start();
?>
<html>
<head>
<title>CLAIM INSURANCE</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" type="text/css">
<script src="scripts.js"></script>
</head>
<body>
<header>CONFIRM CLAIM</header>
<bR>
<Br>
<div style="padding:20px;">
<?php
include("config.php");
$carn=$_SESSION['car'];
$name=$_SESSION['name'];
$sql="UPDATE car SET AMOUNT=0,VALID=0 WHERE CarNumber='$carn' AND Name='$name'";
$result=mysqli_query($db,$sql);
if($result){
	echo "<Br><Br>You insurance has been claimed. You will get the Money in 24 Hours. Thank you!
	<Br><br>
	<div id='button'><a href='index.php'>Home</a></div>";
}
else{
	echo "<Br><br>Sorry, our database is experiencing issues! 	<Br><br>
	<div id='button'><a href='index.php'>Home</a></div>";
}

?>
</div>
</Body>
</html>