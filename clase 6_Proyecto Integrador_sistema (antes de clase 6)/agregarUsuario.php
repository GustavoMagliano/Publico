<?php  
	require "funciones/conexion.php";
	require "funciones/usuarios.php";
	$chequeo = agregarUsuario();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de nuevo Usuario</h1>
<?php 
		$class="danger";			/* Bootstrap: ROJO  */
		$mensaje="No pudo agregarse el Usuario";
		if ($chequeo)
		{
			$class="success";		/* Bootstrap: VERDE */
			$mensaje="Usuario agregado exitosamente";
		}
?>        
		<div class="alert alert-<?= $class; ?>">  <!-- clases de Bootstrap VERDE ó ROJO -->
			<?= $mensaje; ?>				
		</div>
    </main>

<?php  include 'includes/footer.php';  ?>