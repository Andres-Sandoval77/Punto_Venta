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
		 
          $nombre=$_POST['nombre_prod'];
	     
		  $consulta = mysqli_query ($conn, "select *from tbl_productos where nombre_producto='$nombre'");  
		   while($dato=mysqli_fetch_array($consulta)){
				?>
<!DOCTYPE html>
<html>
<head>
 <body background="Images/fondo.jpg">
	<title>Actualizar precio del producto</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="container">
			<div class="main">
				<div class="main-center">
				<h5>Actualizar precio</h5>
					<form name="proveddores" action="save_precio.php" method="post">
					<input type="hidden" name="id_producto" value='<?php echo $dato[0];?>'/>
						
						<div class="form-group">
							<label for="name">Precio</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="precio" id="name"/>
							</div>
						</div>

				<button type="submit">GUARDAR</button>
						
					</form>
				</div><!--main-center"-->
			</div><!--main-->
		</div><!--container-->
</body>
</html>
<?php	}

		?>