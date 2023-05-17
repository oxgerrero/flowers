<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Work</title>
    <link rel="stylesheet" href="estilos.css">	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</head>
<table>
<th colspan="2">LUCI FLOWERS</th><th colspan="2"><a href="javascript:pago()">pay</a></th>

<tr><th colspan="4">shopping list</th></tr>
<tr>
<th colspan="2">Name</th>
<th>Price</th>
</tr>

<?php

 include('conexion.php');

$sql="select * from `cart`";
$resultado=mysqli_query($conn,$sql);
$total=0;
while($mostrar=mysqli_fetch_array($resultado))

{
$total=$total+$mostrar['price'];
?>

<tr>
	<td colspan="2"><?php echo $mostrar['name'] ?></td>
	<td><?php echo "COP$ ".$mostrar['price'] ?></td>   
</tr>

<?php
}
?>
<tr>
	<td colspan="2"><?php echo "total" ?></td>
	<td><?php echo "COP$ ".$total ?></td>   
</tr>
</table>
<script>
    function pago(){
        alert("product paid successfully");
        window.location = "index.html";
    }
</script>
</body>
</html>