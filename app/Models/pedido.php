<?php

class Pedido{

    public $_id;
    public $_idProducto;
    public $_cantidad;
    public $_areaTrabajo;
    public $_idMesaCliente;
    public $_estadoPedido;

    function __construct($id, $idProducto, $cantidad, $estadoPedido)
    {
        if($id !== null && $idProducto !== null && $cantidad !== null && $estadoPedido !== null)
        {
            $this->_id = $id;
            $this->_idProducto = $idProducto;
            $this->_cantidad = $cantidad;
            $this->_estadoPedido = $estadoPedido;
        }
    }
}
?>