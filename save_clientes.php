<?php

	echo"<body background='Images/fondo.jpg'>";

		session_start();
		
		
         $conn=mysqli_connect("localhost","root","","punto_venta_casr");
 
		    $rfc=$_POST['rfc'];
			$nombre=$_POST['nombre'];
			$ap_pat=$_POST['ap_pat'];
			$ap_mat=$_POST['ap_mat'];
			$edad=$_POST['edad'];
			$correo=$_POST['correo'];
			$direccion=$_POST['direccion'];
			
		  $consulta = mysqli_query ($conn, "insert into tbl_clientes (rfc,nombre,ap_pat,ap_mat,edad,correo,direccion) 
		  values ('$rfc','$nombre','$ap_pat','$ap_mat','$edad','$correo','$direccion');");  
		  echo "<center><h1>Registro insertado correctamente</h1></center>";
            


?> 