<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link href="style.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Font Roboto CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>body{font-family:"Roboto" !important;}</style>

    <title>Lista de cosas</title>
  </head>
  <body>

    <div class="container">
		<FONT COLOR="cyan"> 
        <h1 class="neon">Lista de cosas</h1>
        <div class="text-right">
				<link href="boton.css" rel="stylesheet" type="text/css">	
				<a href="<?php echo base_url(); ?>tags" class="btn btn-dark btn-outline-primary">
  
  <span></span>
  <span></span>
  <span></span>
  <span></span>
   Tags
  </a>
	<a href="<?php echo base_url(); ?>agregar" class="btn btn-dark btn-outline-primary">
  
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
                <th scope="col">Nombre</th>
                <th scope="col">Tag/s</th>
                <th scope="col">Modificar</th>
                </tr>
            </thead>
						<tbody>
						<?php $number=0; foreach($data5 as $key => $value): ?>
							<tr>
										<th scope="row"><?php echo $number++; ?></th>
										<td><?php echo $value->cosas; ?></td>
										<td><?php echo $value->tag; ?></td>
										<td>
									    	<a href="" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><ion-icon name="git-merge"></ion-icon>
                        <a href="<?php echo base_url(); ?>modificar/<?php echo $value->id_cosa;?>" class="btn btn-primary"><ion-icon name="brush"></ion-icon>
                        <a href="<?php echo base_url(); ?>user/Cosas/delete/<?php echo $value->id_cosa;?>" class="btn btn-primary"><ion-icon name="trash-bin"></ion-icon>
                    </td>
				</tr>
			<?php endforeach; ?>
				</tbody>
            
        </table>
    </div>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Asignar tag</h5> </div>
				
        </button>
      <div class="modal-body">
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
						<?php $number=0; foreach($data2 as $key => $value): ?>
							<tr>
										<th scope="row"><?php echo $number++; ?></th>
										<td><?php echo $value->tag; ?></td>
										<td>
                        <a href="<?php echo base_url(); ?>modificartag/<?php echo $value->id;?>" class="btn btn-primary"><ion-icon name="pencil"></ion-icon></a> 
                        <a href="<?php echo base_url(); ?>tag/delete/<?php echo $value->id;?>" class="btn btn-primary"><ion-icon name="remove"></ion-icon></a>
                    </td>
				</tr>
			<?php endforeach; ?>
				</tbody>
            
        </table>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>
		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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
