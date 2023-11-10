<?php
    require_once '../modelos/mensajes_model.php';
    require_once '../modelos/conexion.php';
    include_once '../assets/adodb5/adodb.inc.php';

    $msjModel = new MensajesModel();
    $request = $_SERVER['REQUEST_METHOD'];
    switch ($request) {
        case 'GET': $response = '';
                    $mensajes = $msjModel->getAllMensajes();
                    echo json_encode($mensajes->GetArray());
                    break;
        case 'POST':   
                $arData = json_decode(file_get_contents('php://input'),true);
                $msjModel->insertMensajeREST($arData);
            break;
        case 'PUT':     
                $arData = json_decode(file_get_contents('php://input'),true);
                $msjModel->updateMensajeREST($arData);
            break;
        case 'DELETE':  
                $arData = json_decode(file_get_contents('php://input'),true);
                $msjModel->deleteMensaje($arData['idMensaje']);
            break;
        default: header('HTTP 400 Bad Request');
    }


    http://localhost:8080/prograweb/controladores/restContacto.php
?>