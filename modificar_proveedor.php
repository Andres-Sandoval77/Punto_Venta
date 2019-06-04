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
          $nombre=$_POST['nombre_proveedor'];
	     
		  
		  $consulta = mysqli_query ($conn, "select * from tbl_proveedor where nombre='$nombre'");  
		  $numero = mysqli_num_rows($consulta);
	       while($dato=mysqli_fetch_array($consulta)){
			   $campo_id=$dato['id_proveedor'];
				$campo_nombre=$dato['nombre'];
				$campo_rfc=$dato['rfc']; 
				$campo_direccion=$dato['direccion'];
				$campo_telefono=$dato['telefono'];
				$campo_correo=$dato['correo']
				?>

<!DOCTYPE html>
<html>
<head>
 <body background="Images/fondo.jpg">
	<title>Modificar proveedor</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="container">
			<div class="main">
				<div class="main-center">
				<h5>Modificacion de proveedores</h5>
					<form name="proveddores" action="update_proveedor.php" method="post">
						<input type="hidden" name="id_proveedor" value='<?php echo $dato["id_proveedor"];?>'/>
						
						<div class="form-group">
							<label for="name">Nombre</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="nombre" value="<?php echo $dato["nombre"];?>"/>
							</div>
						</div>

						<div class="form-group">
							<label for="email">RFC</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="rfc" value='<?php echo $campo_rfc;?>'/>
							</div>
						</div>

						<div class="form-group">
							<label for="username">Direccion</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="direccion" value="<?php echo $dato['direccion'];?>"/>
								</div>
						</div>

						<div class="form-group">
							<label for="password">Telefono</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="telefono" value="<?php echo $dato["telefono"];?>"/>
								</div>
						</div>

						<div class="form-group">
							<label for="confirm">Correo</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="correo" value="<?php echo $dato["correo"];?>"/>
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