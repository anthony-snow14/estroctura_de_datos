<?php
$conexion=new mysqli("localhost", "usuario", "", "spacecase");
//Comprobar conexion
if(mysqli_connect_errono())
{
   printf("Fallo la conexion"); 

  }
  else { 
  	printf("Estas conectado"); 
  }
?>

