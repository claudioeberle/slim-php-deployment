<?php

class Producto{

    public $_id;
    public $_nombre;
    public $_tipoProducto;
    public $_precio;

    function __construct($id, $nombre, $tipoProducto, $precio)
    {
        if($id !== null && $nombre !== null && $tipoProducto !== null && $precio !== null){

            $this->_id = $id;
            $this->_nombre = $nombre;
            $this->_tipoProducto = $tipoProducto;
            $this->_precio = $precio;
        }
    }
}
?>