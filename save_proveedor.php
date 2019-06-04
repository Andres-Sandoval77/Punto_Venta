<?php

echo"<body background='Images/fondo.jpg'>";

		session_start();
		
		
         $conn=mysqli_connect("localhost","root","","punto_venta_casr");
 
		    $nombre=$_POST['nombre'];
			$rfc=$_POST['rfc'];
			$direccion=$_POST['direccion'];
			$telefono=$_POST['telefono'];
			$correo=$_POST['correo'];
			
			
		  $consulta = mysqli_query ($conn, "insert into tbl_proveedor (nombre,rfc,direccion,telefono,correo) values ('$nombre','$rfc','$direccion','$telefono','$correo');");  
		  echo "<center><h1>Registro insertado correctamente</h1></center>";
            


?>