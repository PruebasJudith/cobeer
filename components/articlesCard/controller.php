<?php
include_once __DIR__ . '/../../DB/classes/Articulo.php';
function getArticulos()
{
    $articulosDB = new Articulo();
    $articulos = $articulosDB->listLast10();
    foreach ($articulos as $articulo) {
        include dirname(__DIR__, 1) . '/articleCard/component.php';
    }
}
?>