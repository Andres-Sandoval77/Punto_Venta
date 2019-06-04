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
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>

	<div class="container">
			<div class="main">
				<div class="main-center">
				
					<form class="" method="post" action="save_proveedor.php">

						<h5>Alta de proveedores</h5>
						<div class="form-group">
							<label for="name">Nombre</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="nombre" placeholder="Ingresa el nombre del proveedor"/>
							</div>
						</div>

						<div class="form-group">
							<label for="email">RFC</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="rfc" placeholder="Ingresa el rfc del proveedor"/>
							</div>
						</div>

						<div class="form-group">
							<label for="username">Direccion</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="direccion" placeholder="Ingresa la direccion del proveedor"/>
								</div>
						</div>

						<div class="form-group">
							<label for="password">Telefono</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="telefono" placeholder="Ingresa el telefono del proveedor"/>
								</div>
						</div>

						<div class="form-group">
							<label for="confirm">Correo</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="correo" placeholder="Ingresa el correo del proveedor"/>
								</div>
						</div>

				<button type="submit">GUARDAR</button>
						
					</form>
				</div><!--main-center"-->
			</div><!--main-->
		</div><!--container-->
</body>
</html>