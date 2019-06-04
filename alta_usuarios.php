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

<!DOCTYPE HTML>
<html>
<head>
 <body background="Images/fondo.jpg">
    <title>Alta usuarios</title>

<?php
$conn=mysqli_connect("localhost","root","","punto_venta_casr")
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<head>
  <?php
$conn=mysqli_connect("localhost","root","","punto_venta_casr")
?>
</head>
<body>
    <div class="container">
      <div class="main">
        <div class="main-center">
        <h5>Alta de usuarios</h5>
          <form method="post" action="save_usuarios.php">
            
            <div class="form-group">
              <label for="name">Nombre</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
        <input type="text" class="form-control" name="nombre" id="name"/>
              </div>
            </div>

            <div class="form-group">
              <label for="email">Apellido Paterno</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="ap_pat"/>
              </div>
            </div>

            <div class="form-group">
              <label for="username">Apellido Materno</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="ap_mat"/>
                </div>
            </div>

            <div class="form-group">
              <label for="password">Usuario</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="usuario"/>
                </div>
            </div>

            <div class="form-group">
              <label for="confirm">Contraseña</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="pass"/>
                </div>
            </div>

            <div class="form-group">
              <label for="confirm">Rol asignado</label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <select type="password" class="form-control" name="rol" id="rol"/>
                  <option value="">SELECCIONE</option>
  
                <?php
        $consulta=mysqli_query($conn,"SELECT * FROM tbl_rol order by nombre asc") or die ("Error en la consulta");
          while(list($id_rol, $nombre)=mysqli_fetch_array($consulta)){
            echo "<option value='$id_rol'>$nombre</option>";
            } 
        ?>
    </select> <br><br>
                </div>
            </div>

        <button type="submit">DAR DE ALTA USUARIO</button>
            
          </form>
        </div><!--main-center"-->
      </div><!--main-->
    </div><!--container-->
</body>
</html>
