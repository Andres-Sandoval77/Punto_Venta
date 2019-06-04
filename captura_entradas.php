<html>
<head>
 <body background="Images/fondo.jpg">
</head>
<?php
$numero=$_POST['numero'];
  $conn=mysqli_connect("localhost","root","","punto_venta_casr");
?>
<body>
<form action="save_entradas.php" method="post">
        <table width="100%" border="1" class="zebra-striped">
          <thead>
            <tr>
              <td colspan="2" class="headerSortdesc"><p>Número de Productos a Ingresar:
                <?php
			if($numero!=''){
			echo " ".$numero; }
			else {
			echo " Ingresa un número";
			}
			?>
              </p></td>
              <td colspan="4" class="headerSortdesc"><p align="center">Fecha de Ingreso
              <input name="fecha" type="date" id="fecha" required>
              </td>
              <p></p>
            </tr>
            <tr>
              <td width="25%" class="headerSortdesc"><p align="center">No Registro</p></td>
              <td width="25%" class="headerSortdesc"><p align="center">Código de barras</p></td>
              <td width="25%" class="headerSortdesc"><p align="center">Cantidad</p></td>
			  <td width="25%" class="headerSortdesc"><p align="center">Tipo de pago</p></td>
            </tr>
          </thead>
          <tbody>
            <?php 
	  $i=0;
	  while($i<$numero){
	  	$i++;
	  
            echo "<tr>";
			echo "<td><input type='text' name='Progresivo' value='$i' readonly='readonly'></td>";
            echo "<td><input type='text' name='codigo_barras[$i]' id='codigo_barras'></td>";
            echo "<td><input type='text' name='cantidad[$i]' id='cantidad' min='0' max='5000' required></td>";
			echo "<td><select name='tipo_pago[$i]' id='tipo_pago'>";
										echo "<option value=''>SELECCIONE</option>";
										
					$consulta=mysqli_query($conn,"SELECT * FROM tbl_tipo_pago order by nombre asc") or die ("Error en la consulta");
					while(list($id_tipo, $nombre)=mysqli_fetch_array($consulta)){
						echo "<option value='$id_tipo'>$nombre</option>";
						}
								echo"</select>";
            echo "</tr>";
            } ?>
          </tbody>
        </table>
        <table>
			<tr>
			<? if (($numero<0)||($numero=='')){?>
			<!--<td><div align="right"><input type="submit" class="btn primary" name="button" id="button" value="Guardar Ingresos" disabled="disabled"></div></td>-->
			<? } else {?>
				<td><div align="right"><input type="submit" class="btn primary" name="button" id="button" value="Guardar Ingresos"></div></td>
				<? }?>
		  </tr>
		</table>
  	</form>
</body>
</html>
