#Join vs Table Ralation

##INNER JOIN

> SELECT idProducto, prdNombre, prdPrecio,
         productos.idMarca, marcas.mkNombre,
         productos.idCategoria, categorias.catNombre,
         prdPresentacion, prdStock,
         prdImagen
  	FROM productos
      INNER JOIN marcas ON productos.idMarca = marcas.idMarca
      INNER JOIN categorias ON productos.idCategoria = categorias.idCategoria

##Table Relation

> SELECT idProducto, prdNombre, prdPrecio,
         productos.idMarca, marcas.mkNombre,
         productos.idCategoria, categorias.catNombre,
         prdPresentacion, prdStock,
         prdImagen
  	FROM productos, marcas, categorias
      WHERE productos.idMarca = marcas.idMarca
       AND productos.idCategoria = categorias.idcategoria 

##Table Relation con Alias

> SELECT idProducto, prdNombre, prdPrecio,
         p.idMarca, mkNombre,
         p.idCategoria, catNombre,
         prdPresentacion, prdStock,
         prdImagen
  	FROM productos p, marcas m, categorias c 
      WHERE p.idMarca = m.idMarca
       AND p.idCategoria = c.idCategoria

> 