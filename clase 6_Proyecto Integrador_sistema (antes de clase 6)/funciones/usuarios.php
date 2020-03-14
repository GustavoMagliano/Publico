<?php 
	#######################################
	###	        CRUD de usuarios        ###
	
	/**
	 * listarUsuarios()		HECHO
	 * verUsuarioPorID()
	 * agregarUsuario()		HECHO
	 * modificarUsuario()
	 * eliminarUsuario()
	 */

	 /**
	  * Funcion para listar Usuarios
	  * @return $listaUsuarios mysqli_result 	
	  */
	function listarUsuarios()
	{
		$link = conectar();
		$sql = "SELECT idUsuario, usuNombre, usuApellido, usuEmail, usuPass, usuEstado FROM usuarios";
		$resultado = mysqli_query( $link, $sql )
						or die(mysqli_error($link));
		return $resultado;
	}

	/**
	 * Funcion para agregar nuevo usuario
	 * @return Verdadero si fue exitoso, falso en caso contrario
	 */
	function agregarUsuario()
	{
		$usuNombre = $_POST['usuNombre'];
		$usuApellido = $_POST['usuApellido'];
		$usuEmail = $_POST['usuEmail'];
		$usuPass = $_POST['usuPass'];
		/* $usuEstado = 1    tinyInt */
		$link = conectar();
		$sql = "INSERT INTO usuarios (usuNombre, usuApellido, usuEmail, usuPass, usuEstado) 
					VALUES ('". $usuNombre ."', '" . $usuApellido. "', '" . $usuEmail. "', '" . $usuPass . "', 1)";
		$resultado = mysqli_query( $link, $sql )
						or die(mysqli_error($link));
		return $resultado;
	}
		 
		
		