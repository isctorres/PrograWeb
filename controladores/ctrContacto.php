<?php
    require_once '../modelos/mensajes_model.php';
    require_once '../modelos/conexion.php';
    include_once '../assets/adodb5/adodb.inc.php';

    $msjModel = new MensajesModel();
    $msjModel->getAllMensajes();
?> 

