<?php  										// VISTA
	require 'funciones/conexion.php';		// Estas 3 son sistematicamente asi
	require 'funciones/categorias.php';
	$categorias = listarCategorias();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de admnistración de Categorías</h1>

		<a href="admin.php" class="btn btn-outline-secondary m-2">     <!-- m-2 es un separador -->
			Volver a principal
		</a>

		<table class="table table-hover table-bordered table-striped table-sm">			<!-- table-sm  altura small -->
			<thead class="thead-dark">		
				<tr>
					<th>id</th>
					<th>Categoria</th>
					<th colspan="2">		<!-- 2 espacios para el boton agregar -->						
						<a href="formAgregarCategoria.php" class="btn btn-dark">   
							Agregar
						</a>
					</th>
				</tr>
			</thead>
			<tbody>

<?php 
				$alternoColor = true;
				while ( $categoria = mysqli_fetch_assoc($categorias) ) {   // OJO singular / plural
?>
					<tr class="<?php echo $alternoColor?"table-primary":""; $alternoColor = !$alternoColor; ?>">		<!-- alterno azul -->
						<td><?= $categoria['idCategoria'] ?></td>       <!-- esto con mysqli_fetch_assoc -->
						<td><?= $categoria['catNombre'] ?></td>
						
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