<?php 
	#######################################
	###	        CRUD de usuarios        ###
	
	/**
	 * listarUsuarios()		HECHO
	 * verUsuarioPorID()
	 * agregarUsuario()
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
		$resultado = mysqli_query( $link, $sql );
		return $resultado;
	}