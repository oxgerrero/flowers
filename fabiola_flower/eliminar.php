<?php 
include('conexion.php');
    $sentenciaEl = $_POST['move'];    
    if(mysqli_query($conn,$sentenciaEl))
        echo "eliminado correctamente";
?>