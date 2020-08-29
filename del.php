<?php
error_reporting(E_PARSE | E_ERROR);
session_start();
?>
<html>
<head>
<title>Delete Records</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" type="text/css">
<script src="scripts.js"></script>
</head>
<body style="background: #4e5251;color: #fff;">
<header>DELETE A RECORD</header>
<bR>
<Br>
<div align="center">
<div class="card">
  <form ation="" method="post">
   <label for="carnumber">Car Number : </label> 
   <input type="text" name="carnumber" required/>
   <br><Br>
   <label for="name">Registrar Name : </label>
   <input type="text" name="name" required />
  <br><Br><button type='submit'>DELETE</button>
  </form>
</div>
</div>
<br>
<div style="color: #fff; padding: 20px;">
<?php
error_reporting(E_PARSE | E_ERROR);
include("config.php");
$carn=$_POST['carnumber'];
$name=$_POST['name'];
if($carn==""||$name==""){
  echo "";
}
else{
 if($_SESSION['log']==true){
  $sql="SELECT * FROM car WHERE CarNumber='$carn' AND Name='$name'";
  $result=mysqli_query($db,$sql);
  if(mysqli_num_rows($result)>0){
    echo "<BR><Br>Record Found ....<br><Br>";
    $sq="DELETE FROM car WHERE CarNumber='$carn' AND Name='$name'";
    $res=mysqli_query($db,$sq);
    if($res){
      echo "<Br><Br>Record Deleted";
    }
    else{
      echo "<br><Br>Record Could not be deleted! Sorry.";
    }
  }
  else{
    echo"<br><Br>No such record found! Please try Again!";
  }
}
else{
  echo "<Br><Br>You are not logged in! ";
}
}
echo "<br><Br><div id='button' style='width:20%;'><a href='adminlog.php'>Back to ADMIN CP</a></div>"


?>
</div>
