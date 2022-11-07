<!doctype html>
<html lang="en">
  <head>
	 <!-- Bootstrap CSS -->
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	 <FONT COLOR="cyan"> <h1><center> Registrarte </center></h1> 
  </head>
  <body background="Home.png">
	<form action="<?php echo base_url(); ?>register/save" class="mt-4" method="POST">
<form method="post" action="" name="signup-form">
	<label><h4>Usuario</h4></label> 
    <div class="form-element form-element-lg">
        <input class="shadow px-5 p-3 mb-5 bg-white rounded" type="text" name="username" pattern="[a-zA-Z0-9]+" required/>
    </div>
		<label><h4>Contraseña</h4></label>
    <div class="form-element form-element-lg"> 
        <input class="shadow px-5 p-3 bg-white rounded" type="password" name="password" required/>
    </div> <center>
    <button class="btn btn-outline-warning btn-lg" type="submit" name="register" value="register">Registrarse</button>
	</center>
</form>
</form>
  </body>
