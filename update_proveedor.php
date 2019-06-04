<?php

echo"<body background='Images/fondo.jpg'>";

		session_start();
		
		
         $conn=mysqli_connect("localhost","root","","punto_venta_casr");
          $id=$_POST['id_proveedor'];
	      $nombre=$_POST['nombre'];
		  $rfc=$_POST['rfc'];
		  $direccion=$_POST['direccion'];
		  $telefono=$_POST['telefono'];
		  $correo=$_POST['correo'];

		  $consulta = mysqli_query ($conn, "update tbl_proveedor set nombre='$nombre', rfc='$rfc', 
											direccion='$direccion', telefono='$telefono', correo='$correo'
											where id_proveedor='$id'") or die ("Error en la consulta");  
		  echo "<center><h1>Actualizado correctamente</h1></center>"

?>