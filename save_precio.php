<?php

echo"<body background='Images/fondo.jpg'>";

		session_start();
		
		
         $conn=mysqli_connect("localhost","root","","punto_venta_casr");
 
		    $precio=$_POST['precio'];
			$id_producto=$_POST['id_producto'];
			
			
		  $consulta = mysqli_query ($conn, "insert into tbl_precio (precio,fecha_act,producto_id) values ('$precio',now(),'$id_producto');");  
		  echo "<center><h1>Registro insertado correctamente</h1></center>";
          


?>