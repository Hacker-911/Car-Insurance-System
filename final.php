<?php
session_start();
?>
<html>
<head>
<title>Insurance Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
</head>
<body style="background: #4e5251;color: #fff;">
<header>CONFIRMATION OF RENEWAL</header>
<Br><br>
<div id="php" style="padding: 20px;">
<?php
include("config.php");
$car=$_SESSION['carn'];
echo "Your Car Number is : ".$_SESSION['carn']."<br><Br>";
$sql="UPDATE car SET Amount=Amount+1500,Valid=Valid+1 WHERE CarNumber='$car'";
$result=mysqli_query($db,$sql);
if($result){
	echo "Congratulations, your insurance term has been lengthened.
	<br>
	<Br>
	Thank You So much!
	<br>
	<br>
	<div id='button'><a href='index.php'>Go back!</a></div>";
}
else{
	echo"<br><br>Sorry there is some problem with our database!<br><br>
	<div id='button'><a href='index.php'>Go back!</a></div>";
}
?>
</div>
</body>
</html>