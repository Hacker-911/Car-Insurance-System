<?php
error_reporting(E_PARSE | E_ERROR);
session_start();
?>
<html>
<head>
<title>CLAIM INSURANCE</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
table{
   padding:5px;
   text-align: center;
}
th{
	padding: 10px;
}
td{
	width:10%;
    padding: 15px;
}
</style>
<link rel="stylesheet" href="style.css" type="text/css">
<script src="scripts.js"></script>
</head>
<body>
<header id="insurehead">CLAIM INSURANCE
<span onclick="openNav()" class="rig">Menu</span>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="index.php">&nbsp&nbspHome</a>
      <a href="viewinsurance.php">&nbsp&nbspView Insurance Details!</a>
      <a href="renew.php">&nbsp&nbspRenew Insurance</a>
     <br>
     <br>
    <div align="center"><div id="line"></div></div>
   </div></header>
<bR>
<Br>
<div align="center">
<div class="cardone">
  <form ation="" method="post">
   <label for="carnumber">Car Number : </label> 
   <input type="text" name="carnumber" id="ins" required/>
   <br><Br>
   <label for="name">Registrar Name : </label>
   <input type="text" name="name" id="ins" required />
  <br><Br><button type='submit'>CLAIM</button>
  </form>
</div>
</div>
<br>
<div style="padding: 20px;">
<?php
error_reporting(E_PARSE | E_ERROR);
include("config.php");
$carn=$_POST['carnumber'];
$name=$_POST['name'];
$_SESSION['car']=$carn;
$_SESSION['name']=$name;
$sql="SELECT * FROM car WHERE CarNumber='$carn' AND Name='$name'";
$result=mysqli_query($db,$sql);
if($carn==""||$name==""){
	echo "";
}
else{
if($result){
    echo "<Br>
	<table>
	<tr><th>Name</th><th>Car Number</th><th>AMOUNT PAID</th><th>Validity(years)</th></tr>";
	while($row=mysqli_fetch_assoc($result)){
       echo "<tr><td>".$row['Name']."</td><td>".$row['CarNumber']."</tD><td>".$row['Amount']."</td><td>".$row['Valid']."</td></tr>";
	}
	echo "<br><br><form action='finaldel.php'><button type='submit'>CLAIM</button><BR></form>";
    echo "<br><bR><div id='button'><a href='index.php'>Go Back!</a></div><Br><Br>";
  }
else{
	echo "<br><Br>No such record found!";
 }
}



?>
</div>
</body>
</html>
