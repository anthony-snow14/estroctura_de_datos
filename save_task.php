<?php


NuevoProducto ($_POST['folio_compra'], $_POST['producto'], $_POST['descripcion'], $_POST['precio'],  $_POST['precio']);

function NuevoProducto ($folio_compra, $descripcion, $precio, $cantidad)

{
include("db.php");  
$sentencia= "INSERT INTO productos (folio_de_compra, descripcion, precio, cantidad) VALUES ('".$folio_compra."','".$descripcion."','".$precio."','".$cantidad."')"; 
  $"db.php"->query($sentencia) or die("Error al ingresar los datos".mysql_error($conexion)); 
}

?>

<script type="text/javascript"> 
  alert("Producto Ingresado Exitosamante!!"); 
  window.location.href "index.php";

</script>>
