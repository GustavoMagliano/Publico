<?php 
//$sql=...


$resultado = mysqli_query ( $link, $sql ) or die('Error');  // fciona porque el query da false si hay un error
$resultado = mysqli_query ( $link, $sql ) 
				or die(mysqli_error($link));  	// muestra un mensaje de error (hacerlo en tiempo de desarrollo)
												// DEBE ESTAR EN CADA mysqli_query

 ?>