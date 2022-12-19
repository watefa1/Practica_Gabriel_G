<!doctype html>
<html lang="en">
  <head>
	<link href="style.css" rel="stylesheet" type="text/css">
	 <!-- Bootstrap CSS -->
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	 <FONT COLOR="cyan"> <h1><center> Modificar Tag </center></h1> 
  </head>
  <body background="Home.png">
	<h1 class="mt-5">editar tag:  <?php echo $tag;?></h1> 
	<form action="<?php echo base_url(); ?>modificartag/update<?php echo $id; ?>" class="mt-4" method="POST">
<form method="POST" action="" name="signup-form">
		<label><h4>tag</h4></label>
    <div class="form-element form-element-lg"> 
        <input class="shadow px-5 p-3 bg-white rounded" type="text" name="tag" pattern="[a-zA-Z0-9]+" value="<?php echo $tag; ?>"/>
    </div> <center>
    <button class="btn btn-outline-warning btn-lg" type="submit" name="agregar" value="enviar">Agregar</button>
	</center>
</form>
</form>
  </body>
</html>
