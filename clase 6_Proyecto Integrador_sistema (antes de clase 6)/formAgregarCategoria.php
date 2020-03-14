<?php  
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una nueva Categoría</h1>		
		<div class="alert bg-light p-3">									<!-- class de bootstrap -->
			<form action="agregarCategoria.php" method="post">
        		Categoría
        		<br>
				<input type="text" name="catNombre" class="form-control">	<!-- class de bootstrap -->
				<br>
				<button class="btn btn-dark">Agregar Categoría</button>
				<a href="adminCategorias.php" class="btn btn-outline-secondary ml-2">
		 			Volver a panel de categorías
		 		</a>
        	</form>	
		</div>    
    </main>

<?php  include 'includes/footer.php';  ?>