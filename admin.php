<?php
error_reporting(E_PARSE | E_ERROR);
session_start();
$_SESSION['log'];
?>
<html>
<head>
<title>ADMIN CP LOGIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css" type="text/css">
<script src="scripts.js"></script>
</head>
<body style="background: #4e5251;color: #fff;">
<header>ADMIN CP LOGIN
	<span onclick="openNav()" class="rig">Menu</span>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href='index.php'>Go Home</a>
     <br>
     <br>
    <div align="center"><div id="line"></div></div>
   </div>
</header>
<br>
<Br>
<?php
error_reporting(E_PARSE | E_ERROR);
if($_SESSION['log']==true){
  echo "<bR><Br>You are already logged in!<br><Br><div id='button'><a href='adminlog.php'>Proceed</a></div>";
}
else{
  ?>
<div align="center">
<div class="card">
  <Br><Br>
  <form action="login.php" method="post">
  <label for="username">Username : <input type="text" name="username" required/>
    <br><br>
  <label for="password">Password : </label><input type="password" name="password" required/>
  <bR><bR>
  <button type='submit'>LOGIN</button>
</form>
</div>
</div>
<?php
}
?>
</body>
</html>
