<!doctype html>
<html lang="en">
  <head>
	<link href="style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
<div class="login-box">
  <h2>Inicio de sesión</h2>
	
	<form action="<?php echo base_url(); ?>register/save" class="mt-4" method="POST">
  <form method="post" action="" name="signup-form">
    <div class="user-box">
      <input type="text" name="username" required="">
      <label>Usuario</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Contraseña</label>
    </div>
	<a class="btn btn-outline-link btn-lg" type="submit" name="register" value="register">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <button class="btn btn-outline-warning btn-lg" type="submit" name="register" value="register">Registrarse</button>
    </a>
  </form>
</div> 
</form>
</form>
</html>
