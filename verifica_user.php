<?php
		session_start();
		
		
         $conn=mysqli_connect("localhost","root","","punto_venta_casr");
          $user=$_POST['user'];
	      $pass=$_POST['pass'];
		  
		  $consulta = mysqli_query ($conn, "select * from tbl_usuario where usuario='$user' and pass='$pass';");  
		  $numero = mysqli_num_rows($consulta);
	       while($dato=mysqli_fetch_array($consulta)){
				$_SESSION['usuario']=$dato['usuario'];
				$_SESSION['rol']=$dato['rol'];
				$_SESSION['clave']=$dato['id_usuario'];
				
				}
	if($numero==0){
	   header("Location: sin_acceso.php");
	
	}
	else {
		header("Location: frame.php");
	}
            


?>