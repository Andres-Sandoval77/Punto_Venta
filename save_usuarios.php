<?php

echo"<body background='Images/fondo.jpg'>";

		session_start();
		
		
         $conn=mysqli_connect("localhost","root","","punto_venta_casr");
 
		    $nombre=$_POST['nombre'];	
			$ap_pat=$_POST['ap_pat'];
			$ap_mat=$_POST['ap_mat'];		
			$usuario=$_POST['usuario'];
			$pass=$_POST['pass'];
			$rol=$_POST['rol'];			
			
		  $consulta = mysqli_query ($conn, "insert into tbl_usuario (nombre, ap_pat, ap_mat, usuario, pass, rol) values ('$nombre','$ap_pat','$ap_mat',
		  '$usuario','$pass','$rol');");		  
		  echo "<center><h1>Registro insertado correctamente</h1></center>";
            


?>