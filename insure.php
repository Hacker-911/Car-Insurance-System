<html>
<head>
<title>Get Insured</title>
<link rel="stylesheet" href="style.css" type="text/css">
<script type="text/javascript" src="scripts.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="insurehead">GET CAR INSURANCE
<span onclick="openNav()" class="rig">Menu</span>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="index.php">&nbsp&nbspHome</a>
      <a href="viewinsurance.php">&nbsp&nbspView Insurance Details!</a>
      <a href="renew.php">&nbsp&nbspRenew Insurance</a>
     <br>
     <br>
    <div align="center"><div id="line"></div></div>
   </div>
</div>
<div style="padding:20px;" align="center">
<br><br>
<form action="" method="post">
<label for="name">Name : &nbsp</label>
<input type="text" name="name" id="na" required/>
<bR><Br>
<label for="carno">Car No : &nbsp</label>
<input type="text" name="carno" id="carn" required/>
<br><br>
<label for="year" title="Enter 1 if you have just purchased the car! ">Car Years :</label>
<input name="year" type="number" id="years" required />
<br><br>
<div align="center"><div onclick="func()" id="button">Tell Amount</div></div>
<Br><br>
<label for="payable">Amount Payable is : </label>
<input type="text" name="payable" id="amount" required/>
<Br><br>
<div align="center"><button type="submit" name="submit" id="sub" style="display: none;transition: 1s;">GO AHEAD!</button></div><br>

<div align="center"><button><a href="index.php">CANCEL</a></button></div>
</form>
<div id="php">
<?php
error_reporting(E_PARSE | E_ERROR);
include("config.php");
if(isset($_POST['name'])){ $name = $_POST['name']; }
if(isset($_POST['carno'])){ $carn = $_POST['carno']; }
if($carn==""||$carn==" "){
  echo " ";
}
else{
$check="SELECT * FROM car WHERE CarNumber='$carn'";
$checker=mysqli_query($db,$check);
if(mysqli_num_rows($checker)>0){
  echo "<br>Sorry. But the vehicle is already insured!";
  echo "<br><br><a href='index.php'>Go back!</a><br>";
}
else{
$amount=$_POST['payable'];

$sql="INSERT INTO car (Name,CarNumber,Amount,Valid) VALUES ('$name','$carn','$amount','1')";
$query=mysqli_query($db,$sql);
if($query){
  echo "<br>
  <div id='cardone'><b style='font-size:25px;'>Congrats</b>
  <br><Br>
    Your Insurance is successfully registered into the database.
  <br>
  <br>
    <div id='button'><a href='index.php'>Return</a></div>
    </div>
  ";
}
else{
  echo"<br><br>
  We Apologise, but our database is experiencing issues.";
}
}
}
?>
</div>
</div>
<script>
var func=function(){
var am=document.getElementById("amount");
var time=document.getElementById("years");
var but=document.getElementById("sub");
if(parseFloat(time.value)<1||time.value==""||time.value>50){
    am.value="This is not valid. Kindly check."
 }
else{
	var money=150*parseFloat(time.value);
    am.value=""+money.toString();
    but.style.display="block";
  }
}
</script>
