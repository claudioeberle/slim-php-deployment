<?php

class Mesa{

    public $_id;
    public $_libre;

    function __construct($id, $libre = true)
    {
        $this->_id = $id;
        $this->_libre = $libre;
    }
}
?>