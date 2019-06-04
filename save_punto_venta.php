<?php
session_start();

$conn=mysqli_connect("localhost","root","","punto_venta_javr");

          $nombre=$_POST['nombre'];

  $consulta = mysqli_query ($conn, "insert into tbl_tipo_pago (nombre) values ('$nombre');");  
		  echo "registro insertado correctamente";
	      
?>