<?php
   $conn=mysqli_connect("localhost","root","","punto_venta_casr")or die("No se puede conectar");		  
   ?>
<html>
  <body>
     <table>
	 <tr>
	 <td> Nombre </td>
	  <td> RFC </td>
	   <td> Direccion </td>
	    <td> Telefono </td>
		 <td> Correo </td>
	 </tr>
	 <tr>
	 <?php
	
		  $consulta = mysqli_query ($conn, "select * from tbl_proveedor;");  
		  $numero = mysqli_num_rows($consulta);
		 
	       while($dato=mysqli_fetch_array($consulta)){
			   echo "<td><a href='modificar_proveedor.php?id=".$dato[0]."'>".$dato[1]."</a></td>";
               echo '<td>'.$dato[2].'</td>';
               echo '<td>'.$dato[3].'</td>';
               echo '<td>'.$dato[4].'</td>';
			   echo '<td>'.$dato[5].'</td>';
			   echo '</tr>';
	
				}
	 
	 ?>
	
	 </table>
  
  
  
  
  </body>



</html>