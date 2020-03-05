<?php  										// VISTA
	require 'funciones/conexion.php';		// Estas 3 son sistematicamente asi
	require 'funciones/usuarios.php';
	$usuarios = listarUsuarios();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de admnistración de Usuarios</h1>

		<a href="admin.php" class="btn btn-outline-secondary m-2">     <!-- m-2 es un separador -->
			Volver a principal
		</a>

		<table class="table table-hover table-bordered table-striped">
			<thead class="thead-dark">		
				<tr> 
					<th>id</th>
					<th>Nombre</th>					
					<th>Apellido</th>
					<th>Email</th>
					<th>Password</th>
					<th>Estado</th>
					
					<th colspan="2">		<!-- 2 espacios para el boton agregar -->						
						<a href="" class="btn btn-dark">	
							Agregar
						</a>
					</th>
				</tr>
			</thead>
			<tbody>

<?php 
				while ( $usuario = mysqli_fetch_assoc($usuarios) ) {   // OJO singular / plural
?>
					<tr>
						<td><?= $usuario['idUsuario'] ?></td>       <!-- esto con mysqli_fetch_assoc -->
						<td><?= $usuario['usuNombre'] ?></td>
						<td><?= $usuario['usuApellido'] ?></td>
						<td><?= $usuario['usuEmail'] ?></td>
						<td><?= $usuario['usuPass'] ?></td>
						<td><?= $usuario['usuEstado'] ?></td>
						<td>
							<a href="" class="btn btn-outline-secondary">		
								Modificar
							</a>					
						</td>
						<td>
							<a href="" class="btn btn-outline-secondary">
								Eliminar
							</a>
						</td>
					</tr>
<?php 
				}
 ?>
			</tbody>
		</table>
		
		<a href="admin.php" class="btn btn-outline-secondary">
			Volver a principal
		</a>
		
    </main>

<?php  include 'includes/footer.php';  ?>