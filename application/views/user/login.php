<!doctype html>
<html lang="en">
  <head>
	 <!-- Bootstrap CSS -->
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	 <FONT COLOR="cyan"> <h1><center> Iniciar Sesión </center></h1> 
  </head>
  <body background="Problem.png">
	<form action="" method="POST">
  <form>
  <div class="form-group">
    <label for="username"><h4>Usuario</h4></label>
    <input type="text" class="form-control form-control-lg" name="username" id="username" aria-describedby="username">
  </div>
  <div class="form-group">
    <label for="password"><h4>Contraseña</h4></label> </FONT>
    <input type="password" class="form-control form-control-lg" name="password" id="password"> 
  </div><center>
    <input type="submit" href="<?php echo base_url(); ?>login" class="btn btn-outline-light" value="Ingresar"></input>
	<a href="<?php echo base_url(); ?>register" class="btn btn-outline-warning" role="button">Registrarte</a>
		</center>
</form>
    </div>
</form>


		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	   <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="  crossorigin="anonymous"></script>
		 <script>
			<?php if ($this->session->flashdata("sucess")): ?>
			Swal.fire({
				icon: 'success',
				title: 'Ahora puede iniciar sesión',
				text: '<?php echo $this->session->flashdata("sucess"); ?>',
			});
			<?php endif; ?> 	
		</script>
		
		</body>
</html>
