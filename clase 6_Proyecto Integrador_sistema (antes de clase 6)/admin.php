<?php  
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de administración Principal</h1>

		<!-- .list-group>a.list-group-item.list-group-item-action..... EMMET usa clases Bootstrap-->
		<div class="list-group">
			<a href="adminMarcas.php" class="list-group-item list-group-item-action">
				Panel de administración de marcas
			</a>
			<a href="adminCategorias.php" class="list-group-item list-group-item-action">
				Panel de administración de categorias
			</a>
			<a href="adminProductos.php" class="list-group-item list-group-item-action">
				Panel de administración de productos
			</a>
			<a href="adminUsuarios.php" class="list-group-item list-group-item-action">
				Panel de administración de usuarios
			</a>
		</div>

    </main>

<?php  include 'includes/footer.php';  ?>