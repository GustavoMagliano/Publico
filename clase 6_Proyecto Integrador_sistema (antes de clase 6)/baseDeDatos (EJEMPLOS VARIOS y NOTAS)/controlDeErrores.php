<?php

    require 'config.php';

    $link = mysqli_connect(
        'localhost',
        'root',
        '',
        'catalogo'
    );

    verContenido($link);

    $sql = "SELECT idCategoria, catNombre6
                    FROM categorias";

    $resultado = mysqli_query( $link, $sql)
                    or die(mysqli_error($link));



//$fila = mysqli_fetch_array($resultado);
    //$fila = mysqli_fetch_row($resultado);
    $fila = mysqli_fetch_assoc($resultado);


?>
