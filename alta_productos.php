<style>
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



<html>

<head>
 <body background="Images/fondo.jpg">
<?php 

session_start();

$conn=mysqli_connect("localhost","root","","punto_venta_casr");
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
		<div class="container">
			<div class="main">
				<div class="main-center">
				<h5>Alta de productos</h5>
					<form action="save_producto.php" name="productos" method="post">
						
						<div class="form-group">
							<label for="name">Nombre del producto</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name='producto' id="name"/>
							</div>
						</div>

						<div class="form-group">
							<label for="email">Codigo de barras</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="codigo_barras"/>
							</div>
						</div>

						<div class="form-group">
							<label for="email">Proveedor</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<select name="proveedor" id="Proveedor">
										<option value="">SELECCIONE</option>
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
							<label for="email">Categoria</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<select name="categoria" id="categoria" required>
										<option value="">SELECCIONE</option>
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
							<label for="confirm">Presentacion</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<select name="presentacion" id="presentacion" required>
									<option value="">SELECCIONE</option>
									<?php
				$consulta=mysqli_query($conn,"SELECT * FROM tbl_presentacion order by nombre asc") or die ("Error en la consulta");
					while(list($id_presentacion, $nombre)=mysqli_fetch_array($consulta)){
						echo "<option value='$id_presentacion'>$nombre</option>";
						} 
				?>
					</select>
								</div>
						</div>

				<button type="submit">GUARDAR PRODUCTO</button>
						
					</form>
				</div><!--main-center"-->
			</div><!--main-->
		</div><!--container-->
</body>
</html>