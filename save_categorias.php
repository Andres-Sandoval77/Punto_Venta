<?php

echo"<body background='Images/fondo.jpg'>";

		session_start();
		
         $conn=mysqli_connect("localhost","root","","punto_venta_casr");
 
		 $nombre=$_POST['nombre'];
			
		 $consulta = mysqli_query ($conn, "insert into tbl_categoria (nombre_categoria) values ('$nombre');");		  
		  echo "<center><h1>Registro insertado correctamente</h1></center>";
            


?>