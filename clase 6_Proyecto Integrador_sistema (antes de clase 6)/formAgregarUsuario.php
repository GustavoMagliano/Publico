<?php  
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de Usuario nuevo</h1>

		<div class="alert bg-light p-3">									<!-- class de bootstrap -->
			<form action="agregarUsuario.php" method="post">
				Nombre
				<br>
				<input type="text" name="usuNombre" class="form-control">	<!-- class es de bootstrap -->
				<br>
				Apellido
				<br>
				<input type="text" name="usuApellido" class="form-control">
				<br>				
				Email
				<br>
				<input type="email" name="usuEmail" class="form-control">
				<br>
				Password
				<br>
				<input type="password" name="usuPass" class="form-control">
				<br>
				<button class="btn btn-dark">Agregar Usuario</button>
				<a href="adminUsuarios.php" class="btn btn-outline-secondary ml-2">
		 			Volver a panel de usuarios
		 		</a>
			</form>
		</div>
    </main>

<?php  include 'includes/footer.php';  ?>