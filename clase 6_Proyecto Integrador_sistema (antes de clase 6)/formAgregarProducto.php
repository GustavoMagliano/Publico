<?php  
	require "funciones/conexion.php";	
	require "funciones/marcas.php";			// para listarMarcas()
	$marcas = listarMarcas();
	require "funciones/categorias.php";		// para listarCategorias()
	$categorias = listarCategorias();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h2>Crear nuevo Producto</h2>
        <div class="alert bg-light p-3">
        	<form action="agregarProducto.php" method="post">
				<?php  /*
				prdNombre
				prdPrecio       double
				idMarca			FK
				idCategoria		FK
				prdPresentacion
				prdStock 		int(6)
				prdImagen		tinytext (y upload)
	 			*/ ?>
	 	
	 			Nombre
	 			<br>										 <!-- form-control-sm reduce altura Bootstrap -->
	 			<input type="text" name="prdNombre" class="form-control form-control-sm"> 
	 			<br>
				Precio
				<br>
				<input type="text" name="prdPrecio" class="form-control form-control-sm">
				<br>
				<!-- marca -->	
				Marca
				<br>											<!-- btn-sm pequeño, primary AZUL -->
				<select name="idMarca" class="btn btn-primary btn-sm dropdown-toggle">	
<?php 		
					while ( $marca = mysqli_fetch_assoc($marcas) ) {
?>
  						<option value="<?= $marca['idMarca'] ?>"><?= $marca['mkNombre'] ?></option>
<?php 
					}
 ?>  				
				</select>	
				<br>	
				<br>
				<!-- categoria -->
				Categoria
				<br>											 <!-- btn-sm pequeño, success VERDE -->
				<select name="idCategoria" class="btn btn-success btn-sm dropdown-toggle"> 
<?php 		
					while ( $categoria = mysqli_fetch_assoc($categorias) ) {
?>
  						<option value="<?= $categoria['idCategoria'] ?>"><?= $categoria['catNombre'] ?></option>
<?php 
					}
 ?>  				
				</select>	
				<br>
				<br>				
				Presentación
				<br>
				<input type="text" name="prdPresentacion" class="form-control form-control-sm">
				<br>
				Stock
				<br>
				<input type="text" name="prdStock" class="form-control form-control-sm">
				<br>
				<!-- imagen (a /productos)  para que quede bien con Bootstrap hay que usar algo de Javascript -->
				Imagen
				<br>
				<input type="file" name="prdImagen" value="1.jpg"> 
				<br>				
				<br>

				<button class="btn btn-dark">Agregar Producto</button>
				<a href="adminProductos.php" class="btn btn-outline-secondary ml-2">
		 			Volver a panel de Productos
		 		</a>
			</form>

        </div>
    </main>
	
<?php  include 'includes/footer.php';  ?>