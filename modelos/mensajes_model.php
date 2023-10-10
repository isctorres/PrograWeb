<?php
//error_reporting(E_ALL);
class MensajesModel{

    private $idMensaje;
    private $nombre; 
    private $apepat;
    private $apemat;
    private $email;
    private $telefono;

    private $db;

    /*public function __construct($idMensaje,$nombre,$apepat,$apemat,$email,$telefono){
        $this->idMensaje = $idMensaje;
        $this->nombre = $nombre;
        $this->apepat = $apepat;
        $this->apemat = $apemat;
        $this->email = $email;
        $this->telefono = $telefono;

        $con = new Conexion();
        $this->db = $con->conectar();
    }*/

    public function __construct(){
        $con = new Conexion();
        $this->db = $con->conectar();
    }

    public function insertMensaje($nom){
        $table = 'tblMensajes';
        $record = array();
        $record['nombre'] = $nom;
        $record['apepat'] = $_POST['txtApePat'];
        $record['apemat'] = $_POST['txtApeMat'];
        $record['email'] = $_POST['txtEmail'];
        $record['telefono'] = $_POST['txtTel'];
        $this->db->autoExecute($table,$record,'INSERT');
    }

    public function updateMensaje($nom){
        $table = 'tblMensajes';
        $record = array();
        $record['nombre'] = $nom;
        $record['apepat'] = $_POST['txtApePat'];
        $record['apemat'] = $_POST['txtApeMat'];
        $record['email'] = $_POST['txtEmail'];
        $record['telefono'] = $_POST['txtTel'];
        $this->db->autoExecute($table,$record,'UPDATE','idMensaje = '.'\''.$_POST['hddId'].'\'');
    }
    public function deleteMensaje(){

    }
    public function getAllMensajes(){
        $query = "SELECT * FROM tblMensajes";
        $rs = $this->db->Execute($query);
        // print_r($rs->getRows());
        return $rs;
    }

}
?>