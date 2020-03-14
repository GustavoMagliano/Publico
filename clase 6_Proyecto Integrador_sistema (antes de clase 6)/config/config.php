<?php 			
	#####################################
	# archivo de configuracion			#
	# 
	# variables, constantes (q se usan para configurar el sistema en general)
	# nombre de aplicacion, sesiones, etc

	function verContenido ($datos)
	{
		echo '<pre>';			// aunque para el profesor NUNCA debiera haber un echo en una fcion
		print_r ($datos);
		echo '</pre>';
	}

