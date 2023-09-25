<?php
    require_once '../modelos/mensajes_model.php';
    require_once '../modelos/conexion.php';
    include_once '../assets/adodb5/adodb.inc.php';

    if( isset($_GET['opc']) ){
        $msjModel = new MensajesModel();

        switch($_GET['opc']){
            case 1: // INSERT TO DB
                break;
            case 2: // UPDATE TO BD
                break;
            case 3: // DELETE TO DB
                break;
            case 4: // SELECT TO DB
                $msjModel->getAllMensajes();
        }
    }else{
        header('Location: ../index.html');
    }
?> 

