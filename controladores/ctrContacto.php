<?php
    require_once '../modelos/mensajes_model.php';
    require_once '../modelos/conexion.php';
    include_once '../assets/adodb5/adodb.inc.php';

    if( isset($_GET['opc']) ){
        $msjModel = new MensajesModel();

        switch($_GET['opc']){
            case 1: // INSERT TO DB
                $nom = $_POST['txtNombre'];
                if(!empty($_POST['hddId']) )
                    $msjModel->updateMensaje($nom);
                else
                    $msjModel->insertMensaje($nom);
                break;
            case 2: // UPDATE TO BD
                $msjModel->updateMensaje();
                break;
            case 3: // DELETE TO DB
                $idMsj = $_POST['idMsj'];
                $msjModel->deleteMensaje($idMsj);
                echo '<h5 class="miclasecss"><strong>Respuesta a la peticion AJAX</strong></h5>';
                break;
            case 4: // SELECT TO DB
                $msjModel->getAllMensajes();
        }
    }else{
        header('Location: ../index.html');
    }
?> 

