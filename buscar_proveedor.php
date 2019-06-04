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

<!DOCTYPE html>
<html>
<head>
 <body background="Images/fondo.jpg">
	<title>Buscar proveedor</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
	<div class="container">
			<div class="main">
				<div class="main-center">
				<h5>Bucar proveedor</h5>
					<form name="proveddores" action="modificar_proveedor.php" method="post">
						<input type="hidden" name="id_proveedor" value='<?php echo $dato["id_proveedor"];?>'/>
						
						<div class="form-group">
							<label for="name">Nombre del proveedor</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
				<input type="text" class="form-control" name="nombre_proveedor" placeholder="Ingresa el nombre del proveedor que quieres modificar"/>
							</div>
						</div>

				<button type="submit">BUSCAR PROVEEDOR</button>
						
					</form>
</body>
</html>