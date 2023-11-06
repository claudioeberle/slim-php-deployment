<?php

include_once "accesoDatos.php";

class MesaRepository{

    static function InsertarMesaParametros($mesa)
    {
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        $consulta = $objetoAccesoDato->RetornarConsulta("INSERT into mesas (libre)values(:libre)");
        $consulta->bindValue(':libre', $mesa->_libre, PDO::PARAM_INT);
        $consulta->execute();
        return $objetoAccesoDato->RetornarUltimoIdInsertado();
    }
}
?>