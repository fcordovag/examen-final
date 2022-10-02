<?php
class Db
{
    private static $instance = NULL;
    private $_con = NULL;
    private $host   = "localhost";
    private $dbName = "store";
    private $userBd = "root";
    private $passBd = "";
    private function __construct() {
        try {
            $this->_con = new PDO("mysql:host=".$this->host.";dbname=".$this->dbName."", $this->userBd, $this->passBd);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    private function __clone() { }
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Db();
        }
        return self::$instance;
    }
    public function query($sql,$binding){
        try{
            $prep     = $this->_con->prepare($sql);
            $prep->execute($binding);
            $data = $prep->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }catch(Throwable $e){
            return ($e->getMessage());
        }
    }
    public function insertData($sql, $binding)
    {
        $conexion   = $this->_con;  
        $ins        = $conexion->prepare($sql);
        try{
            $conexion->beginTransaction();
            $d = $ins->execute($binding);
            $conexion->commit();
            return $d;
        }catch(Throwable $e) {
            return ($e->getMessage());
        }
    }
}