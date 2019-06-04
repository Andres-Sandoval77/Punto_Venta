<?php

echo"<body background='Images/fondo.jpg'>";

		session_start();
		
		
         $conn=mysqli_connect("localhost","root","","punto_venta_casr");
 
		    $nombre=$_POST['nombre'];	
			$cantidad=$_POST['cantidad'];
			
		  $consulta = mysqli_query ($conn, "insert into tbl_presentacion (nombre, cantidad) values ('$nombre','$cantidad');");		  
		  echo "<center><h1>Registro insertado correctamente</h1></center>";
            


?>