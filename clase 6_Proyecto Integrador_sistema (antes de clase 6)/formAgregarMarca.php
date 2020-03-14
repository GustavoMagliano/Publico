<?php  								//	SIEMPRE ARRANCA DE PLANTILLA.php en vez de copiar otro .php
	include 'includes/header.html';  
	include 'includes/nav.php';  	
?>

    <main class="container">
        <h1>Alta de una nueva Marca</h1>
        <!-- .alert.bg-light.p-3      padding 3  -->
		<!-- form:post[agregarMarca.php]    -->
		<div class="alert bg-light p-3">						<!-- solo lo pone x cuestion de lectura-->
		 	<form action="agregarMarca.php" method="post">
		 		Marca
		 		<br>
		 		<input type="text" name="mkNombre" class="form-control">	<!-- form-control es de bootstrap-->
		 		<br>
		 		<!-- button.btn.btn-dark{Agregar marca} -->
		 		<button class="btn btn-dark">Agregar marca</button>
		 		<a href="adminMarcas.php" class="btn btn-outline-secondary ml-2">
		 			Volver a panel de marcas
		 		</a>
		 	</form>
		</div>
    </main>

<?php  include 'includes/footer.php';  ?>