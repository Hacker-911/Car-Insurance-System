<?php

$host="localhost";
$user="root";
$pass="";
$dbname="sample";
$db=mysqli_connect($host,$user,$pass,$dbname) or die("<Br><h1>COULD NOT CONNECT TO DB!</h1>");

$check="SELECT 1 FROM car";
$checker=mysqli_query($db,$check);
if(!$checker){
$creator="CREATE TABLE car (id integer primary key AUTO_INCREMENT, Name varchar(25), CarNumber text(500),Amount bigint(20),Valid int(1))";
$created=mysqli_query($db,$creator);
}
$check1="SELECT 1 FROM caradmin";
$checker1=mysqli_query($db,$check1);
if(!$checker1){
	$creator1="CREATE TABLE caradmin(username varchar(10),password varchar(10))";
	$created1=mysqli_query($db,$creator1);
	$admin="INSERT INTO caradmin VALUES('admin','password')";
	$admitt=mysqli_query($db,$admin);
}
?>
