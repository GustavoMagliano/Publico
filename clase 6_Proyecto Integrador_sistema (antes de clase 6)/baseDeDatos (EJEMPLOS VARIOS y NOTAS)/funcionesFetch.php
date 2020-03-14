<?php

    require 'config.php';

    $link = mysqli_connect(
        'localhost',
        'root',
        '',
        'catalogo'
    );

    $sql = "SELECT idCategoria, catNombre
                    FROM categorias";

    $resultado = mysqli_query( $link, $sql);
    //$fila = mysqli_fetch_array($resultado);
    //$fila = mysqli_fetch_row($resultado);
    $fila = mysqli_fetch_assoc($resultado);

    verContenido($fila);
?>
