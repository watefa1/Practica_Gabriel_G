<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href="style.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Font Roboto CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>body{font-family:"Roboto" !important;}</style>

    <title>Lista de tags</title>
  </head>
  <body>

    <div class="container">
		<FONT COLOR="cyan"> 
        <h1 class="neon">Lista de tags</h1>
				<div class="text-right">
				<link href="boton.css" rel="stylesheet" type="text/css">	
				<a href="<?php echo base_url(); ?>cosas" class="btn btn-dark btn-outline-primary">
  
  <span></span>
  <span></span>
  <span></span>
  <span></span>
   Cosas
  </a>
	<a href="<?php echo base_url(); ?>agregartag" class="btn btn-dark btn-outline-primary">
  
  <span></span>
  <span></span>
  <span></span>
  <span></span>
   Agregar
  </a>
		</FONT>
        </div>
        <table class="table table-dark">
            <thead class="thead-dark">
                <tr> 
								<th scope="col">Nº</th>
                <th scope="col">Tags</th>
                <th scope="col">Modificar</th>
                </tr>
            </thead>
						<tbody>
						<?php $number=0; foreach($data as $key => $value): ?>
							<tr>
										<th scope="row"><?php echo $number++; ?></th>
										<td><?php echo $value->tag; ?></td>
										<td>
                        <a href="<?php echo base_url(); ?>tags/<?php echo $value->id;?>" class="btn btn-primary"><ion-icon name="brush"></ion-icon>
                        <a href="<?php echo base_url(); ?>tag/delete/<?php echo $value->id;?>" class="btn btn-primary"><ion-icon name="trash-bin"></ion-icon>
                    </td>
				</tr>
			<?php endforeach; ?>
				</tbody>
            
        </table>
    </div>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

		<script>
			<?php if ($this->session->flashdata("sucess")): ?>
			Swal.fire({
				icon: 'success',
				title: 'Listo',
				text: '<?php echo $this->session->flashdata("sucess"); ?>',
			});
			<?php endif; ?> 
		</script>
  </body>
</html>
