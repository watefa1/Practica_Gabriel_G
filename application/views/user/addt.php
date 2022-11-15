<!doctype html>
<html lang="en">
  <head>
	 <!-- Bootstrap CSS -->
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	 <FONT COLOR="cyan"> <h1><center> Agregar tag </center></h1> 
  </head>
  <body background="Home.png">
	<form action="<?php echo base_url(); ?>agregartag/save" class="mt-4" method="POST">
<form method="post" action="" name="signup-form">
		<label><h4>Agregar tag</h4></label>
    <div class="form-element form-element-lg"> 
        <input class="shadow col-10 px-5 p-3 bg-white rounded" type="text" name="tag" pattern="[a-zA-Z0-9]+" />
    </div> <center>
    <button class="col-7 btn btn-outline-warning btn-lg" type="submit" name="agregar" value="enviar">Agregar</button>
	</center>
</form>
</form>
  </body>
