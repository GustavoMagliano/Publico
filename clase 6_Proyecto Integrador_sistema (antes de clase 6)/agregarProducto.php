<?php  
	require "funciones/conexion.php";	
	require "funciones/productos.php";
	$chequeo = agregarProducto();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Agregar nuevo Producto</h1>
<?php 
		$class="danger";						/* Bootstrap: ROJO  */
		$mensaje="No pudo agregarse el Producto";
		if ($chequeo)
		{
			$class="success";					/* Bootstrap: VERDE */
			$mensaje="Producto agregado exitosamente";
		}
?>        
		<div class="alert alert-<?= $class; ?>">  <!-- clases de Bootstrap VERDE ó ROJO -->
			<?= $mensaje; ?>				
		</div>

    </main>

<?php  include 'includes/footer.php';  ?>