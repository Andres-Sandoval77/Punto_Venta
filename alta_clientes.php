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

<!DOCTYPE html>
<html>
<head>
 <body background="Images/fondo.jpg">
	<title>Alta clientes</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="container">
			<div class="main">
				<div class="main-center">
				<h5>ALTA DE CLIENTES</h5>
					<form action="save_clientes.php" name="clientes" method="post">
						
						<div class="form-group">
							<label for="name">RFC</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="rfc" id="name"/>
							</div>
						</div>

						<div class="form-group">
							<label for="email">Nombre del cliente</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="nombre"/>
							</div>
						</div>

						<div class="form-group">
							<label for="username">Apellido paterno</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="ap_pat"/>
								</div>
						</div>

						<div class="form-group">
							<label for="password">Apellido materno</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="ap_mat"/>
								</div>
						</div>

						<div class="form-group">
							<label for="confirm">Edad</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="edad"/>
								</div>
						</div>

						<div class="form-group">
							<label for="confirm">Correo electronico</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="correo"/>
								</div>
						</div>

						<div class="form-group">
							<label for="confirm">Direccion</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="direccion"/>
								</div>
						</div>

				<button type="submit">DAR DE ALTA CLIENTE</button>
						
					</form>
				</div><!--main-center"-->
			</div><!--main-->
		</div><!--container-->
</body>
</html>