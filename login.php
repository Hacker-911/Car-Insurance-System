<?php
session_start();
?>
<html>
<head>
<title>Logging you in....</title>
<link rel='stylesheet' href='style.css'>
</head>
<body style="padding: 20px;">
<?php
include("config.php");
$user=$_POST['username'];
$pass=$_POST['password'];
$sql="SELECT * FROM caradmin WHERE username='$user'AND password='$pass'";
$result=mysqli_query($db,$sql);
if(mysqli_num_rows($result)==1){
	$_SESSION['log']=true;
    echo "Congrats, you have been logged in! You may continue to the Admin CP! <br><Br>";
    echo "<br><Br><div id='button'><a href='adminlog.php'>GO!</a></div>";
}
else{
	echo "<bR><Br> The password and username combination was wrong!";
}
?>

</body>
</html>