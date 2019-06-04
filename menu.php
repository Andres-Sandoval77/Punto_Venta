<style type="text/css">

#menu{

	background-color: black;
	list-style:none;
	width:auto;
	position:relative;
	display:block;
	height:36px;
}

#menu li{
	display:block;
	position:relative;
	float:left;
}

#menu li a{

	color:#fff;
	text-decoration:none;
	font-family:Helvetica, Arial, sans-serif;
	font-size:14px;
	line-height:1.3em;
	padding:10px 14px 8px 16px;
	display:block;
}

#menu li ul{


	width:120px;
	background:#F8F8F8;
	border:1px #ccc solid;
	display:none; /*importante para que los submenus no estén visibles*/
	position:absolute;
	z-index:999;
	margin-top:0px;
}

#menu li ul li{

	width:100%;
	list-style:none;
	display:block;
}

#menu li ul li a{


	color:#21759b;
	font-size:14px;
	line-height:1.3em;
	display:block;
	font-weight:normal;
	padding:8px
}

#menu li ul li a:hover{


	background-color:#FFF;
	color:#444;
	text-decoration:underline;
}



#menu li:hover ul{


	display:block;
}
			
		</style>
 <html>
 <head>
 <body background="Images/fondo.jpg">
 </head>
 <body>
 
<ul id="menu">

<li><a href="frame.php" target="derecho">Inicio</a>
</li>
     
			  <li ><a href="#">Configuración</a>
			  <ul>
               	<li><a href="alta_usuarios.php" target="derecho">Alta de Usuarios</a></li> <!--funciona-->
		       
                <li><a href="alta_roles.php" target="derecho">Alta de Roles</a></li> <!--funciona---->
		      
                <li><a href="alta_categorias.php" target="derecho">Alta de Categorias</a></li> <!--funciona---->
			
                <li><a href="alta_presentacion.php" target="derecho">Alta de Presentación</a></li> <!--funciona-->
			
                <li><a href="alta_forma_pago.php" target="derecho">Alta de Forma de Pago</a></li><!--funciona-->
			  </ul>
            </li>
	
			  <li><a href="#">Productos</a>
			  <ul>
               	<li><a href="alta_productos.php" target="derecho">Alta de Productos</a></li><!--funciona---->
	
                <li><a href="bucar_producto.php" target="derecho">Modificación de producto</a></li><!--funciona-->
	
                <li><a href="buscar_producto.php" target="derecho">Actualización de precio</a></li><!--funciona---->
			  </ul>
		    </li>
 
			  <li><a href="#">Proveedores</a>
			  <ul>	
               	<li><a href="alta_proveedores.php" target="derecho">Alta de Provedores</a></li><!--funciona-->
		     
                <li><a href="buscar_proveedor.php" target="derecho">Modificación de proveedores</a></li><!--funciona-->

			  </ul>
			</li>
			  <li><a href="#" class="menu">Clientes</a>
			 <ul>
               	<li><a href="alta_clientes.php" target="derecho">Alta de clientes</a></li><!--funciona-->
		    
                <li><a href="buscar_cliente.php" target="derecho">Modificación de clientes</a></li><!--provando-->	
			  </ul>
			</li>
			  <li><a href="#">Almacen</a>
			  <ul>
               	<li><a href="buscar_producto2.php" target="derecho">Ventas</a></li>
	
                <li><a href="almacen_entradas.php" target="derecho">Entradas</a></li>

			  </ul>
			</li>
			  <li><a href="#">Reportes</a>
			  <ul>
               	<li><a href="stock_pdf.php" target="derecho">Ventas</a></li>

			  </ul>
			  </li>
	</ul>

 </body>
</html>