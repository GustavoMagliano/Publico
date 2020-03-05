<?php 
	#######################################
	###	        CRUD de marcas          ###
	
	/**
	 *       Estos son los HABITUALES EN TODAS. 
	 *       CADA UNA DEBE TENER UNA SOLA TAREA O FUNCIONALIDAD (no recordó el nombre de este 
	 *           paradigma o principio, que se aplica tambien a Clases: TAL VEZ es SOLID 
	 *			 donde S es Principio de responsabilidad única ó Single Responsibility Principle)
	 *
	 * listarMarcas()    HECHO
	 * verMarcaPorID()
	 * agregarMarca()
	 * modificarMarca()
	 * eliminarMarca()
	 */

	/**
	 * Funcion para listar Marcas
	 * @return $listaMarcas mysqli_result 	// es un array
	 */
	function listarMarcas()
	{
		$link = conectar();
		$sql = "SELECT idMarca, mkNombre FROM marcas";	// recordar ;" sólo si a la SQL le sigue otra instrucc
		$resultado = mysqli_query( $link, $sql );
		return $resultado;
	}

