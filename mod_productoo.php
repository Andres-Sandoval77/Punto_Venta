<style type="text/css">
	.main{
 	padding: 40px 0;
}
.main input,
.main input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}
.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 400px;
    padding: 10px 40px;
	background:#009edf;
	    color: black;
    text-shadow: none;
	-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);

}
span.input-group-addon i {
    color: #009edf;
    font-size: 17px;
}

</style>

<?php
		session_start();
		
		
         $conn=mysqli_connect("localhost","root","","punto_venta_casr");
		 
          $nombre=$_POST['nombre_producto'];
	 
		  $consulta = mysqli_query ($conn, "SELECT a.codigo_barras, a.nombre_producto, b.nombre_categoria, c.nombre, d.nombre,
a.proveedor_id, a.categoria_id, a.presentacion_id, a.id_producto
from tbl_productos a 
left join tbl_categoria b on a.categoria_id= b.id_categoria
left join tbl_proveedor c on a.proveedor_id= c.id_proveedor
left join tbl_presentacion d on a.presentacion_id= d.id_presentacion where a.nombre_producto='$nombre' " );  
		  $numero = mysqli_num_rows($consulta);
	       while($dato=mysqli_fetch_array($consulta)){
	
				?>

<!DOCTYPE html>
<html>
<head>
 <body background="Images/fondo.jpg">
	<title>Modificar producto</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="container">
			<div class="main">
				<div class="main-center">
				<h5>Modificar productos</h5>
					<form name="Modificacion de productos" action="update_producto.php" method="post">
						<input type="hidden" name="id_producto" value='<?php echo $dato["id_producto"];?>'/>
						
						<div class="form-group">
							<label for="name">Nombre del producto</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name='producto' value="<?php echo $dato [1];?>"/>
							</div>
						</div>

						<div class="form-group">
							<label for="email">Codigo de barras</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name='codigo_barras' value="<?php echo $dato [0];?>"/>
							</div>
						</div>

						<div class="form-group">
							<label for="username">Proveedor</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<select class="form-control" name="proveedor" id="Proveedor">
									<option value="<?php echo $dato[5];?> "><?php echo $dato[3];?> </option>

                <?php
				$consulta=mysqli_query($conn,"SELECT * FROM tbl_proveedor order by nombre asc") or die ("Error en la consulta");
					while(list($id_proveedor, $nombre)=mysqli_fetch_array($consulta)){
						echo "<option value='$id_proveedor'>$nombre</option>";
						} 
				?>
		</select>
								</div>
						</div>

						<div class="form-group">
							<label for="password">Categoria</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<select name="categoria" id="categoria" required >
										<option value="<?php echo $dato[6];?> "><?php echo $dato[2];?> </option>
										<?php
				$consulta=mysqli_query($conn,"SELECT * FROM tbl_categoria order by nombre_categoria asc") or die ("Error en la consulta");
					while(list($id_categoria, $nombre_categoria)=mysqli_fetch_array($consulta)){
						echo "<option value='$id_categoria'>$nombre_categoria</option>";
						} 
				?>
					</select>
								</div>
						</div>

						<div class="form-group">
							<label for="confirm">Presentación</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<select name="presentacion" id="presentacion" required >
										<option value="<?php echo $dato[7];?> "><?php echo $dato[4];?> </option>
										<?php
				$consulta=mysqli_query($conn,"SELECT * FROM tbl_presentacion order by nombre asc") or die ("Error en la consulta");
					while(list($id_presentacion, $nombre)=mysqli_fetch_array($consulta)){
						echo "<option value='$id_presentacion'>$nombre</option>";
						} 
				?>
					</select>
								</div>
						</div>

				<button type="submit">GUARDAR CAMBIOS</button>
						
					</form>
				</div><!--main-center"-->
			</div><!--main-->
		</div><!--container-->
</body>
</html>
<?php	}
			

		?>