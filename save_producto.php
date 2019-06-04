<?php

echo"<body background='Images/fondo.jpg'>";

    session_start();
	
	$conn=mysqli_connect("localhost","root","","punto_venta_casr");
	$codigo_barras=$_POST['codigo_barras'];
    $proveedor=$_POST['proveedor'];
	$producto=$_POST['producto'];
	$categoria=$_POST['categoria'];
	$presentacion=$_POST['presentacion'];
	
	$consulta=mysqli_query ($conn, "insert into tbl_productos(codigo_barras, proveedor_id, nombre_producto, categoria_id, presentacion_id)
	values ('$codigo_barras','$proveedor','$producto','$categoria','$presentacion');");
	echo "<center><h1>Registro insertado correctamente</h1></center>";
	
	?>