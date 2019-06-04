<?php
   $conn=mysqli_connect("localhost","root","","punto_venta_casr")or die("No se puede conectar");		  
   ?>
<html>
  <body>
     <table>
	 <tr>
	  <td> codigo de barras </td>
	   <td> proveedor</td>
	    <td> nombre producto </td>
		 <td> categoria  </td>
		  <td> presentacion  </td>
	 </tr>
	 <tr>
	 <?php
	
		  $consulta = mysqli_query ($conn, "select * from tbl_productos;");  
		  $numero = mysqli_num_rows($consulta);
		 
	       while($dato=mysqli_fetch_array($consulta)){
			   echo "<td><a href='modificar_productos.php?id=".$dato[0]."'>".$dato[1]."</a></td>";
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