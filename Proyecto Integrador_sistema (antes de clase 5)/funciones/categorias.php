<?php 
	#######################################
	###	        CRUD de categorias      ###
	
	/**
	 * listarCategorias()	HECHO
	 * verCategoriaPorID()
	 * agregarCategoria()
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
		$resultado = mysqli_query( $link, $sql );
		return $resultado;
	}