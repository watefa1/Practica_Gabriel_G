<!doctype html>
<html lang="en">
  <head>
		<link href="style.css" rel="stylesheet" type="text/css">
	 <!-- Bootstrap CSS -->
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  </head>
  <body>
  <FONT COLOR="cyan">
  <div class="login-box">
	<form action="<?php echo base_url(); ?>agregar/save" class="mt-4" method="POST">
  <form method="post" action="" name="signup-form">
	<label><h4>Agregar Cosa</h4></label>  
    <div class="user-box">
      <input type="text" name="cosas">
      <label>Nombre de la cosa</label>
    </div>
    <a class="btn btn-outline-link btn-lg" type="submit" name="register" value="register">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <button class="btn btn-outline-warning btn-lg" type="submit" name="agregar" value="enviar">Agregar</button>
    </a>
  </form>
</div> 
</form>
</form>
</html>
