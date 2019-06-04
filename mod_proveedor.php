<?php
		session_start();
		
		
         $conn=mysqli_connect("localhost","root","","punto_venta_casr");
          $id=$_POST['id'];
	      $nombre=$_POST['nombre'];
		  $rfc=$_POST['rfc'];
		  $direccion=$_POST['direccion'];
		  $telefono=$_POST['telefono'];
		  $correo=$_POST['correo'];

		  $consulta = mysqli_query ($conn, "update tbl_proveedor set nombre='$nombre', rfc='$rfc', 
		                                    direccion='$direccion', telefono='$telefono', correo='$correo'
											where id_proveedor='$id'") or die ("Error en la consulta");  
		  echo "Actualizado correctamente"
            


?>