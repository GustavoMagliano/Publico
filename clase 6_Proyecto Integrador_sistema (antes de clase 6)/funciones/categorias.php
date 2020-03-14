<?php 
	#######################################
	###	        CRUD de categorias      ###
	
	/**
	 * listarCategorias()	HECHO
	 * verCategoriaPorID()
	 * agregarCategoria()	HECHO
	 * modificarCategoria()
	 * eliminarCategoria()
	 */
	 
	 /**
	  * Funcion para listar Categorias
	  * @return $listaCategorias mysqli_result 	
	  */
	function listarCategorias()
	{
		$link = conectar();
		$sql = "SELECT idCategoria, catNombre FROM categorias";
		$resultado = mysqli_query( $link, $sql )
							or die(mysqli_error($link));
		return $resultado;
	}

	/**
	 * Funcion que agrega nueva categoria
	 * @return  Verdadero si tuvo éxito, Falso en caso contrario
	 */
	function agregarCategoria()
	{
		$catNombre = $_POST['catNombre'];		/* el name de formAgregarCategoria.php */
		$link = conectar();
		$sql = "INSERT INTO categorias (catNombre) VALUE ('" . $catNombre . "')";
		$resultado = mysqli_query( $link, $sql )
							or die(mysqli_error($link));
		return $resultado;						/* true si insertó, false si falló */
	}	