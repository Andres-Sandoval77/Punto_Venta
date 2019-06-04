<?php
   $conn=mysqli_connect("localhost","root","","punto_venta_casr")or die("No se puede conectar");	
    $id_dato=$_GET['id'];
   ?>
<html>
 <body background="Images/fondo.jpg">
    <body>
	<center>

                  	<label>Modificacion de Proveedores</label> 
					<br><br>
	<?php
	
		  $consulta = mysqli_query ($conn, "select * from tbl_productos where id_producto='$id_dato';");  
		  $numero = mysqli_num_rows($consulta);
		 
	       while($dato=mysqli_fetch_array($consulta)){?>
			<form name="proveddores" action="update_proveedor.php" method="post">
			<input type="hidden" name="id" value='<?php echo $dato[0];?>'/>
                        <label> Id producto  </label>
                        <input type="text" name="id_prod" value="<?php echo $dato[1];?>"/>
						<br>
						<br>
						 <label> codigo de barras  </label>
                        <input type="text" name="codigo" value='<?php echo  $dato[2];?>'/>
						<br>
						<br>
						 <label> proveedor id  </label>
                        <input type="text" name="prov_id"value='<?php echo  $dato[3];?>'/>
						<br>
						<br>	
						 <label> nombre producto  </label>
                        <input type="text" name="nombre_prod" value='<?php echo  $dato[4];?>'/>
                        <br><br>
						<label> categoria id  </label>
                        <input type="text" name="cat_id" value='<?php echo  $dato[5];?>'/>
                        <br><br>
						<label> presentacion id </label>
			<input type="text" name="pres_id" value='<?php echo  $dato[5];?>'/>
                        <br><br>

		   <?php }?>
					<input type="submit" value="Actualizar">
			</form>
	</body>
					 
</html>