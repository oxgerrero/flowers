<?php

 include('conexion.php');

$usu 	= $_POST["txtusuario"];
$pass 	= $_POST["txtpassword"];



$queryusuario = mysqli_query($conn,"SELECT * FROM users WHERE usser ='$usu' and pass = '$pass'");
$nr = mysqli_num_rows($queryusuario);
if ((int)$nr == 1){
	$estob = mysqli_query($conn,"SELECT `condition` FROM users WHERE usser ='$usu' and pass = '$pass'");
	$est = $estob->fetch_array()[0]??'';
	echo $est;
	if($est==1){
				header("Location: flower.html");
		}else{
			echo "<script> alert('usser inactive');window.location= 'index.html' </script>";
		}
	}else{
		echo "<script> alert('usser or pass incorrect.');window.location= 'index.html' </script>";
	}
		
?>