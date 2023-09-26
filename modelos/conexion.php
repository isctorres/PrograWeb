<?php
class Conexion{
    private $DBType = 'mysqli';
    private $DBServer = '127.0.0.1'; // server name or IP address
    private $DBUser = 'webmaster';
    private $DBPass = '1234';
    private $DBName = 'prograweb';

    public function __construct(){}
    
    public function conectar(){
        $con = adoNewConnection($this->DBType);
        $con->debug = true;
        $con->connect($this->DBServer,$this->DBUser,$this->DBPass,$this->DBName);
        return $con;
    }
}
?>