<?php

echo"<body background='Images/fondo.jpg'>";
		session_start();
		
		
         $conn=mysqli_connect("localhost","root","","punto_venta_casr");
	      $id=strtoupper($_POST['id_producto']);
		  $producto=strtoupper($_POST['producto']);
		  $codigo_barras=strtoupper($_POST['codigo_barras']);
		  $proveedor=strtoupper($_POST['proveedor']);
		  $categoria=strtoupper($_POST['categoria']);
		  $presentacion=strtoupper($_POST['presentacion']);
		  

		  $consulta = mysqli_query ($conn, "update tbl_productos set codigo_barras='$codigo_barras', proveedor_id='$proveedor', 
											nombre_producto='$producto', categoria_id='$categoria', presentacion_id='$presentacion'
											where id_producto='$id';") or die ("Error en la consulta");  
		  echo "<center><h1>Actualizado correctamente</h1></center>"
            


?>