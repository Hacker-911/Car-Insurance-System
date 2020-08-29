<?php
session_start();
?>
<html>
<head>
<title>Check!</title>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="scripts.js"></script>
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
</head>
<body>
<div id="insurehead">ALL INSURANCES</div>
<div style="padding: 20px;">
<?php
error_reporting(E_PARSE | E_ERROR);
include("config.php");
if($_SESSION['log']==true){
$sql="SELECT * FROM car";
$result=mysqli_query($db,$sql);
echo "<table><tr><th>ID</th><th>Name</th><th>Car Number</th><th>Amount Paid</th><th>Validity(Years)</th></tr>";
while($row=mysqli_fetch_assoc($result)){
	echo "<tr><td>".$row['ID']."</td><td>".$row['Name']."</td><td>".$row['CarNumber']."</td><td>".$row['Amount']."</td><td>".$row['Valid'];	
}
echo "</table>";
echo " <br><Br> <div id='button'><a href='adminlog.php'>Back</a></div>";
}
else{
	echo "<br><br> You are not logged in. <Br>
	<Br><br>
	<div id='button'><a href='admin.php'>Login</a></div>";
}

?>
</div>
</body>
</html>
