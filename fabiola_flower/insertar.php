<?php 
include('conexion.php');
    $in = $_POST['move'];
    if(mysqli_query($conn,$in))
    {
    echo "created successfully";
    }
    else
    echo "Error: " . $in . "<br>" . mysqli_error($conn);
?>