<?php
		session_start();
		
		
         $conn=mysqli_connect("localhost","root","","punto_venta_casr");
          //$nombre=$_POST['nombre_proveedor'];
	     
		  
		  $consulta = mysqli_query ($conn, "select * from tbl_productos");  
		  $numero = mysqli_num_rows($consulta);
	       while($dato=mysqli_fetch_array($consulta)){
			   $campo_id=$dato['id_proveedor'];
				$codigo_barras=$dato['codigo_barras'];
				/*$campo_rfc=$dato['rfc']; 
				$campo_direccion=$dato['direccion'];
				$campo_telefono=$dato['telefono'];
				$campo_correo=$dato['correo']*/
				?>

<html>
 <body background="Images/fondo.jpg">
    <body>

                  	<label>Modificacion de Proveedores</label> 
					<br><br>
			<form name="proveddores" action="update_proveedor.php" method="post">
			<input type="hidden" name="id_proveedor" value='<?php echo $dato["id_proveedor"];?>'/>
                        <label> Codigo de barras  </label>
                        <input type="text" name="codigo_barras" value="<?php echo $dato["codigo_barras"];?>"/>
						<br>
						
					<input type="submit" value="Guardar">
			</form>
	</body>
					 
</html>
			<?php	}

		?>