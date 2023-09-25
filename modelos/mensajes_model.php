<?php
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

    public function insertMensaje(){
        
    }
    public function updateMensaje(){}
    public function deleteMensaje(){}
    public function getAllMensajes(){
        $query = "SELECT * FROM tblMensajes";
        $rs = $this->db->Execute($query);
        print_r($rs->getRows());
    }

}
?>