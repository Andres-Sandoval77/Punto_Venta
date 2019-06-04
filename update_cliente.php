<?php
		session_start();
		
	
         $conn=mysqli_connect("localhost","root","","punto_venta_casr");
			$id=$_POST['id_cliente'];
			$nombre=$_POST['nombre'];
			$ap=$_POST['ap'];
			$am=$_POST['am'];
			$rfc=$_POST['rfc'];
			$edad=$_POST['edad'];
			$direccion=$_POST['direccion'];
			$correo=$_POST['correo'];
		  
		  $consulta = mysqli_query ($conn, "update tbl_clientes set nombre='$nombre',ap_pat='$ap',ap_mat='$am', 
		                                    direccion='$direccion', correo='$correo',edad='$edad'
											where id_cliente='$id'") or die ("Error en la consulta");  
		  echo "Actualizado correctamente"
            


?>