<?php 
	###############################################
	###	        rutina de conexion a BD         ###
	
	define ('SERVER', 'localhost');		// en objetos es MEJOR declararlas con const() por diversas causas
	define ('USUARIO', 'root');
	define ('CLAVE', '');
	define ('BASE', 'catalogo');

	function conectar()
	{
		$link = mysqli_connect(
					SERVER,
					USUARIO,
					CLAVE,
					BASE
		);
		return $link;
	}