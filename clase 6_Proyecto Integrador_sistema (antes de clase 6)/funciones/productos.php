<?php 
	#######################################
	###	        CRUD de productos       ###
	
	/**
	 * listarProductos()		HECHO
	 * verProductoPorID()
	 * agregarProducto()
	 * modificarProducto()
	 * eliminarProducto()
	 */
	
	/**
	  * Funcion para listar Productos
	  * @return $listaProductos mysqli_result 	
	  */
	function listarProductos()
	{
		$link = conectar();
		/* con JOIN */ 
		/* $sql = "SELECT idProducto, prdNombre, prdPrecio, productos.idMarca, marcas.mkNombre, productos.idCategoria, categorias.catNombre, prdPresentacion, prdStock, prdImagen 
			FROM productos 
			INNER JOIN marcas ON productos.idMarca=marcas.idMarca
			INNER JOIN categorias ON productos.idCategoria=categorias.idCategoria"; */

		/* con producto cartesiano */
		/* $sql = "SELECT idProducto, prdNombre, prdPrecio, productos.idMarca, marcas.mkNombre, productos.idCategoria, categorias.catNombre, prdPresentacion, prdStock, prdImagen 
				FROM productos, marcas, categorias
				WHERE productos.idMarca = marcas.idMarca
				AND productos.idCategoria = categorias.idCategoria"; */

		/* con ALIAS en producto carteriano*/
		$sql = "SELECT idProducto, prdNombre, prdPrecio, p.idMarca, mkNombre, p.idCategoria, catNombre, prdPresentacion, prdStock, prdImagen 
				FROM productos p, marcas m, categorias c
				WHERE p.idMarca = m.idMarca
				AND p.idCategoria = c.idCategoria";

		$resultado = mysqli_query( $link, $sql )
							or die(mysqli_error($link));
		return $resultado;
	}

	/**
	 * Agrega un nuevo producto
	 * @return Verdadero si pudo agregarlo, Falso en caso contrario
	 */
	function agregarProducto()
	{
		/*
		prdNombre
		prdPrecio       double
		idMarca			FK
		idCategoria		FK
		prdPresentacion
		prdStock 		int(6)
		prdImagen		tinytext (y upload)		
				
				HACER QUE SI NO PUEDE UPLOAD NO HAGA SQL 
				1-upload
				2-si pudo
					3-sql
					4-si pudo retorno ok
				DEBIDO AL DIE no hay opcion de borrar upload si falla sql

	 	*/
	 	$prdNombre = $_POST['prdNombre'];
	 	$prdPrecio = $_POST['prdPrecio'];
	 	$idMarca = $_POST['idMarca'];
	 	$idCategoria = $_POST['idCategoria'];
	 	$prdPresentacion = $_POST['prdPresentacion'];
	 	$prdStock = $_POST['prdStock'];
	 	$prdImagen = $_POST['prdImagen'];
	 	$link = conectar();
	 	$sql = "INSERT INTO productos 
	 				(prdNombre, prdPrecio, idMarca, idCategoria, prdPresentacion, prdStock, prdImagen) 
	 		VALUES 	('" . $prdNombre . "','" . $prdPrecio . "','" . $idMarca . "','" . $idCategoria . "','" . $prdPresentacion. "','" . $prdStock . "','" . $prdImagen . "')";
	 	$resultado = mysqli_query( $link, $sql )
							or die(mysqli_error($link));
		return $resultado;	 
	}
	