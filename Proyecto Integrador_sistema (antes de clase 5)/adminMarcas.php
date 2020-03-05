<?php  										// VISTA
	require 'funciones/conexion.php';		// Estas 3 son sistematicamente asi
	require 'funciones/marcas.php';
	$marcas = listarMarcas();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de admnistración de Marcas</h1>

		<a href="admin.php" class="btn btn-outline-secondary m-2">     <!-- m-2 es un separador -->
			Volver a principal
		</a>

		<!-- striped colores alternados -->
		<!-- table.table.table-hover.table-bordered.table-striped EMMET -->
		<table class="table table-hover table-bordered table-striped">
			<!-- thead.thead-dark  EMMET -->
			<thead class="thead-dark">		<!-- color oscuro, para que no afecte la clase striped de bootstrap-->
				<tr>
					<th>id</th>
					<th>Marca</th>
					<th colspan="2">		<!-- 2 espacios para el boton agregar -->
						<!-- a.btn.btn-dark{Agregar}   EMMET  recordar son clases de bootstrap-->
						<a href="" class="btn btn-dark">
							Agregar
						</a>
					</th>
				</tr>
			</thead>
			<tbody>

<?php 
				//while ( $marca = mysqli_fetch_array($marcas) ) {	// OJO marca / marcas
				while ( $marca = mysqli_fetch_assoc($marcas) ) {	// OJO marca / marcas
?>
					<tr>
						<!-- <td>1</td>		   		puesto al principio para hacer esquema estetico
						<td>nombre marca</td>		-->

						<!-- <td><?= $marca[0] ?></td>       esto con mysqli_fetch_array
						  	 <td><?= $marca[1] ?></td> -->
						<td><?= $marca['idMarca'] ?></td>       <!-- esto con mysqli_fetch_assoc -->
						<td><?= $marca['mkNombre'] ?></td>
						
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