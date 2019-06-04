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
          $nombre=$_POST['nombre'];
          $ap=$_POST['ap'];
          $am=$_POST['am'];
         
          
          $consulta = mysqli_query ($conn, "select * from tbl_clientes where nombre='$nombre'and ap_pat='$ap' and ap_mat='$am'");  
          $numero = mysqli_num_rows($consulta);
           while($dato=mysqli_fetch_array($consulta)){
               $campo_id=$dato['id_cliente'];
               $campo_rfc=$dato['rfc']; 
               $campo_nombre=$dato['nombre'];
               $campo_ap=$dato['ap_pat'];
                 $campo_am=$dato['ap_mat'];
                 $campo_edad=$dato['edad'];
                 $campo_correo=$dato['correo'];
                $campo_direccion=$dato['direccion'];
                ?>
<html>
<head>
 <body background="Images/fondo.jpg">
	<title>Modificar clientes</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="container">
    			<div class="main">
    				<div class="main-center">
    				<h5>Modificar datos del cliente</h5>
    					<form method="post" action="update_cliente.php">
						<input type="hidden" name="id_cliente" value='<?php echo $dato["id_cliente"];?>'/>
    						
							<div class="form-group">
    							<label>Nombre del cliente</label>
    								<div class="input-group">
    									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
    				<input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $dato["nombre"];?>"/>
    							</div>
    						</div>
    
    						<div class="form-group">
    							<label for="email">Apellido paterno</label>
    								<div class="input-group">
    									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
    									<input type="text" class="form-control" name="ap" value="<?php echo $dato["ap_pat"];?>"/>
    							</div>
    						</div>
    
    						<div class="form-group">
    							<label for="username">Apellido materno</label>
    								<div class="input-group">
    									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
    									<input type="text" class="form-control" name="am" value="<?php echo $dato["ap_mat"];?>"/>
    								</div>
    						</div>
							
							<div class="form-group">
    							<label for="username">RFC</label>
    								<div class="input-group">
    									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
    									<input type="text" class="form-control" name="rfc" value="<?php echo $dato["rfc"];?>"/>
    								</div>
    						</div>
							
							<div class="form-group">
    							<label for="username">Edad</label>
    								<div class="input-group">
    									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
    									<input type="text" class="form-control" name="edad" value="<?php echo $dato["edad"];?>"/>
    								</div>
    						</div>
							
                            <div class="form-group">
    							<label for="username">Dirección</label>
    								<div class="input-group">
    									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
    									<input type="text" class="form-control" name="direccion" value="<?php echo $dato["direccion"];?>"/>
    								</div>
    						</div>
							
							<div class="form-group">
    							<label for="username">Correo</label>
    								<div class="input-group">
    									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
    									<input type="text" class="form-control" name="correo" value="<?php echo $dato["correo"];?>"/>
    								</div>
    						</div>
    
    				<button type="submit">Guardar cambios</button>

    						
    					</form>
    				</div><!--main-center"-->
    			</div><!--main-->
    		</div><!--container-->
</body>
</html>
<?php   }

        ?>