<?php 
require_once 'login.php';
require_once 'query.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) 
	die($conn->connect_error);
//viewCot($conn,'1');
newCot($conn);
/*$query = 'select * from cliente natural join cotizacion natural join formulario';
$result = $conn ->query($query);

if(!$result) 
	die($conn->error);

$rows = $result->num_rows;

for ($i=0; $i < $rows; $i++) { 
	$result -> data_seek($i);
	echo $result -> fetch_assoc()['nombre'].'<br>';
	$result -> data_seek($i);
	echo $result -> fetch_assoc()['correo'].'<br>';
	$result -> data_seek($i);
	echo $result -> fetch_assoc()['pago'].'<br>';
}*/
