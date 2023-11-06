<?php

abstract class Persona{

    public $_nombre; //string
    public $_apellido; //string
    public $_dni; //int

    function __construct($nombre, $apellido, $dni)
    {
        if($nombre !== null && $apellido !== null && $dni !== null)
        {
            $this->_nombre = $nombre;
            $this->_apellido = $apellido;
            $this->_dni = $dni;
        }
    }

}
?>