<?php
  //falta hacer los mensajes de error
	if(mysqli_connect('localhost','root','','prueba')){
		$con=mysqli_connect('localhost','root','','prueba');
		$_POST['nom']=mysqli_real_escape_string($con,$_POST['nom']);
		$_POST['email']=mysqli_real_escape_string($con,$_POST['email']);
		$_POST['tema']=mysqli_real_escape_string($con,$_POST['tema']);
		$_POST['msj']=mysqli_real_escape_string($con,$_POST['msj']);
		$query="insert into cotizaciones values('".$_POST['nom']."','".$_POST['email']."','".$_POST['tema']."','".$_POST['msj']."');";
		$res=mysqli_query($con,$query);
	}
	echo "
	<html>
	<head>
	<meta http-equiv='Refresh' content='0; url=../../templates/Inicio.html'>
	</head>
	<script>
		  document.onload = alert('Cotizacion enviada');
	</script>";
?>