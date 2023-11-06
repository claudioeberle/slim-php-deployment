<?php

include_once "persona.php";


class Usuario extends Persona{

    public $_pedidos; // array Pedido
    public $_tipoUsuario; // TipoEmpleado enum
    public $_areaTrabajo;
    public $_activo; // bool

    function __construct(
        $nombre, 
        $apellido, 
        $dni, 
        $tipoUsuario)
    {
        if($nombre !== null && $apellido !== null &&  $dni !== null &&  $tipoUsuario !== null)
        {
            parent::__construct($nombre, $apellido, $dni);
            $this->_tipoUsuario = $tipoUsuario;
            $this->_pedidos = array();
            $this->_activo = true;
        }
    }
}
?>