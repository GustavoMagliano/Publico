<?php 
	#######################################
	###	        CRUD de marcas          ###
	
	/**
	 *       Estos son los HABITUALES EN TODAS. 
	 *       CADA UNA DEBE TENER UNA SOLA TAREA O FUNCIONALIDAD (no recordó el nombre de este 
	 *           paradigma o principio, que se aplica tambien a Clases: TAL VEZ es SOLID 
	 *			 donde S es Principio de responsabilidad única ó Single Responsibility Principle)
	 *
	 * listarMarcas()		HECHO
	 * verMarcaPorID()
	 * agregarMarca()		HECHO
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
		$resultado = mysqli_query( $link, $sql )
						or die(mysqli_error($link));
		return $resultado;
	}

	// Principio de Encapsulamiento: todo lo que deba necesitar una funcion meterlo dentro NO COMO PARAMETRO
	// Es porque si son muchos parametros es un lio meterlo como parametros
	

	/**
	 * Funcion para agregar nueva marca	 
	 * @return [type] [description]
	 */
	function agregarMarca()
	{
		$mkNombre= $_POST['mkNombre'];
		$link = conectar();
		// EDITOR DE TEXTO al seleccionar $mkNombre y click en ' encierra entre '' idem click en " al pulsarla
		// No puedo dejar así una variable dentro de las comillas (aunque funcione) PERO ademas debe tener el SQL
		//   las comillas que encierren el string
		$sql = "INSERT INTO marcas (mkNombre) VALUE ('" . $mkNombre . "')";   
		$resultado = mysqli_query ($link, $sql)
						or die(mysqli_error($link));
		return $resultado; 	// true si insertó, false si falló

		/*  si quisiera id y otras cosas las meto en un array para el return y uso el array AFUERA
		if ($resultado){
			$id = mysql_insert_id($link);
			$salida = [$resultado, $id, $ mkNombre];
		}
		return $salida; 
		*/
	}
