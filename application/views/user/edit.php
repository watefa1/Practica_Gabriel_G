<!doctype html>
<html lang="en">
  <head>
	<link href="style.css" rel="stylesheet" type="text/css">
	 <!-- Bootstrap CSS -->
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	 <FONT COLOR="red"> <h1><center> Modificar Cosa </center></h1> 
  </head>
  <body>
	<h1 class="mt-5">editar cosa:  <?php echo $cosas;?></h1> 
	<form action="<?php echo base_url(); ?>modificar/update/<?php echo $id_cosa; ?>" class="mt-4" method="POST">
<form method="POST" action="" name="signup-form">
	<label><h4>Nombre de la cosa</h4></label>  
    <div class="form-element form-element-lg">
        <input class="shadow px-5 p-3 mb-5 bg-white rounded" type="text" name="cosas" value="<?php echo $cosas; ?>"/>
    </div>
		 <center>
    <button class="btn btn-outline-warning btn-lg" type="submit" name="agregar" value="enviar">Agregar</button>
	</center>
</form>
</form>
  </body>
</html>
