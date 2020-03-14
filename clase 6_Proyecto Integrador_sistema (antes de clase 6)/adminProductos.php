<?php  										// VISTA
	require 'funciones/conexion.php';		// Estas 3 son sistematicamente asi
	require 'funciones/productos.php';
	$productos = listarProductos();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de admnistración de Productos</h1>

		<a href="admin.php" class="btn btn-outline-secondary m-2">     
			Volver a principal
		</a>

		<table class="table table-hover table-bordered table-striped">
			<thead class="thead-dark">		
				<tr>
					<th>Producto</th>
					<th>Precio</th>
					<th>Marca</th>
					<th>Categoria</th>
					<th>Presentacion</th>
					<th>Imagen</th>
					<th colspan="2">		<!-- 2 espacios para el boton agregar -->
						<a href="formAgregarProducto.php" class="btn btn-dark">
							Agregar
						</a>
					</th>
				</tr>
			</thead>
			<tbody>

<?php 				
				while ( $producto = mysqli_fetch_assoc($productos) ) {	// OJO marca / marcas
?>
					<tr>
						<td><?= $producto['prdNombre'] ?></td>       <!-- esto con mysqli_fetch_assoc -->
						<td><?= $producto['prdPrecio'] ?></td>
						<td><?= $producto['mkNombre'] ?></td>		<!-- de la otra tabla -->
						<td><?= $producto['catNombre'] ?></td>		<!-- de la otra tabla -->					
						<td><?= $producto['prdPresentacion'] ?></td>
						<td>
							<!-- la clase img-thumbnail es RESPONSIVA sino siempre se ve del mismo tamaño -->
							<img src="productos/<?= $producto['prdImagen']; ?>"  class="img-thumbnail" alt="">
						</td>
						
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