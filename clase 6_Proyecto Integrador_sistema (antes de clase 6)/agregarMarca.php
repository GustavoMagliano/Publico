<?php  
    require 'funciones/conexion.php';
	require 'funciones/marcas.php';
	$chequeo = agregarMarca();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una nueva marca</h1>
<?php 
		$class='danger';							// con esto evita usar else que a él no le gusta
		$mensaje='No se pudo agregar la marca';
		if ($chequeo) {
			$class = 'success';
			$mensaje="Marca agregada correctamente";
		}
?>
		<div class="alert alert-<?= $class; ?>">  <!-- Bootstrap:alert-success es VERDE alert-danger es ROJO -->
			<?= $mensaje; ?>
		</div>
    </main>

<?php  include 'includes/footer.php';  ?>