<?php 
function addData($tab,$col,$dato){	
	$query = "insert into ".$tab."(".$col.")"." values('".$dato."')";
	$result = mysql_query($query);
	return $result;
 }
function deleteData($tab,$col,$dato){
	$query = "delete from ".$tab." where ".$col." = ".$dato;
	$result = mysql_query($query);
	return $result;
 }
function viewCot($mysqliObj,$nroCotiz){
	$query = 'select * from cliente natural join cotizacion natural join formulario where nroCotiz = '.$nroCotiz;
	$result = $mysqliObj->query($query);
	if(!$result){
		die($mysqliObj->error);
	}
	$result -> data_seek(0);
	echo $result->fetch_assoc()["nroCotiz"].'<br>';
	$result -> data_seek(0);
	echo $result->fetch_assoc()["nombre"].'<br>';
	$result -> data_seek(0);
	echo $result->fetch_assoc()["correo"].'<br>';
	$result -> data_seek(0);
	echo $result->fetch_assoc()["puesto"].'<br>';
	$result -> data_seek(0);
	echo $result->fetch_assoc()["fecha"].'<br>';
	$result -> data_seek(0);
	echo $result->fetch_assoc()["costoTotal"].'<br>';
	$result -> data_seek(0);
	echo $result->fetch_assoc()["negocio"].'<br>';
	$result -> data_seek(0);
	echo $result->fetch_assoc()["servicio"].'<br>';
	$result -> data_seek(0);
	echo $result->fetch_assoc()["urgencia"].'<br>';
	$result -> data_seek(0);
	echo $result->fetch_assoc()["pago"].'<br>';	
}
function newCot($mysqliObj){
	$query = 'select max(nroCotiz) from cotizacion';
	$result = $mysqliObj->query($query);
	$result -> data_seek(0);
	echo $result->fetch_assoc()['max(Nrocotiz)'];
}