<?php

echo"<body background='Images/fondo.jpg'>";

		session_start();
		$conn=mysqli_connect("localhost","root","","punto_venta_casr");
		    $codigo_barras=$_POST['codigo_barras'];
			$cantidad=$_POST['cantidad'];
			$tipo_pago=$_POST['tipo_pago'];
     $a=0;
     $b=0;
     $c=0;	 
	 while (($a<count($codigo_barras))&&($b<count($cantidad))&&($c<count($tipo_pago)))
	 {
	  $a++;
      $b++;
      $c++;	  
		  $consulta = mysqli_query ($conn, "insert into tbl_ventas (codigo_barras, cantidad, tipo_pago,fecha_venta) 
		  values ('$codigo_barras[$a]','$cantidad[$b]','$tipo_pago[$c]', now())");  


			
		

}
 echo "<center><h1>Registro insertado correctamente</h1></center>";


?> 