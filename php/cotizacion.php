<?php 
require_once "mySQL/login.php";
require_once "mySQL/query.php";
$conn = new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) 
	die($conn->connect_error);
if(isset($_GET['cotizacion'])){
	viewCot($conn,$_GET['cotizacion']);
}

 ?>