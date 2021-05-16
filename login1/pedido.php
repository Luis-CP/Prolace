 
 
<?php
session_start();
 
 
$nombre=$_SESSION['usuario'];

  if(!isset($nombre)){
  header('location:../login1/index.php');
  	error_reporting(0);
  	die();
  }
?>

 <html>
<head>

	<title>Contactos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->


</head>
<body>

		<nav class="navbar navbar-light bg-primary">
 </a><h1 class="navbar-brand">Bienvenido  su usuario es    :<?php  echo ''.$nombre; ?>  </h1>
  <form class="form-inline">
 <a href="../login1/pedi.php" > <h1 class="navbar-brand  btn-primary" >Salir de mi pefil</h1></a>
  </form>
</nav>
<h1 class="al"> Pedido del usuario</h1>

<table class="table table-bordered">
	<thead>
	  <tr>
		<th class="p-3 mb-2 bg-primary text-white" scope="col">#</th>
		<th  class="p-3 mb-2 bg-primary text-white" scope="col">Producto</th>
		<th class="p-3 mb-2 bg-primary text-white" scope="col">Descripción</th>
		<th class="p-3 mb-2 bg-primary text-white"  scope="col">Cantidad</th>
		<th class="p-3 mb-2 bg-primary text-white" scope="col">Precio</th class="p-3 mb-2 bg-primary text-white">
	  </tr>
	</thead>
	<tbody>
	  <tr>
		<th scope="row">1</th>
		<td><img src="../images/queso1.jpg" width="200x" height="250px"></td>
		<td><br><br><br><br><strong>Descripción del producto:</strong>
			<p>Queso es el producto fresco o maduro, sólido o semisólido,</p> que resulta de la coagulación de la leche natural.<p> <strong>Tipo de  queso:</strong> </p>                                                  
		<p>Un color blanco con tonos amarillentos y una corteza blanda,</p></p><p> <strong>Presentación:</strong>
			aprox. 1,5 kg.</p></td>
		<td>
			<form action="../login1/procesos/guardar_pedidos" method="POST">

			<input class="form-control" id="exampleFormControlInput1" value="<?php   echo ''.$nombre;  ?>" type="hidden" name=" id_usuario">
			<label  ><strong>Tipo de producto</strong></label>
			<select  class="form-control" id="exampleFormControlInput1" name="tipo_producto"> 
				<option>Queso grande</option>
				<option>Queso mediana</option>
				<option>Queso pequeño</option>
			</select>
 
			<label   ><strong>Cantidad de producto</strong> </label>
			<input class="form-control" id="exampleFormControlInput1" type="number"  name="cantidad_pedido"> 
			<label  ><strong>Realización de la compra</strong> </label>
			
			<input  class="form-control" id="exampleFormControlInput1" type="date" name="fechaRealizacion_pedido"> 
			<input  class="form-control" id="exampleFormControlInput1"type="hidden" name="fechaEntrega_pedido">
			<label > <strong>Estado del producto</strong></label>
			<select  class="form-control" id="exampleFormControlInput1" name="EstadoEntrega_pedido"> 
				<option>Desactivada</option>
			</select>
		</td>
		<td><button   type="submit" class="btn btn-primary">Agregar</button> </td></form>

	  </tr>
	  <tr>
		<th scope="row">2</th>
		<td>Jacob</td>
		<td>Thornton</td>
		<td>@fat</td>
	  </tr>
	  <tr>
		<th scope="row">3</th>
		<td colspan="2">Larry the Bird</td>
		<td>@twitter</td>
	  </tr>
	</tbody>
  </table>



</body>


 </html>