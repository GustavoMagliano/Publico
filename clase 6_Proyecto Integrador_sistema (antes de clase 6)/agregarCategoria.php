<?php  
	require "funciones/conexion.php";
	require "funciones/categorias.php";
	$chequeo = agregarCategoria();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una nueva Categoría</h1>
<?php 
		$class="danger";			/* Bootstrap: ROJO  */
		$mensaje="No pudo agregarse la Categoría";
		if ($chequeo)
		{
			$class="success";		/* Bootstrap: VERDE */
			$mensaje="Categoría agregada exitosamente";
		}
?>
		<div class="alert alert-<?= $class; ?>">  <!-- clases de Bootstrap VERDE ó ROJO -->
			<?= $mensaje; ?>						
		</div>
    </main>

<?php  include 'includes/footer.php';  ?>