<?php

class DBConexao
{
    private $host = "localhost";
    private $dbname = "pi";
    private $username = "root";
    private $password = "";

    private $conn;
    private static $instance = null;

    public function __construct()
    {
        try{
            $this->conn = new PDO("mysql:host=$this->host; dbname=$this->dbname; charset=utf-8", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            echo "Erro na conexão com o banco de dados" . $e->getMessage();
        }
    }

    public static function getConexao()
    {
        if(!self::$instance){
            self::$instance = new DBConexao();
        }
        return self::$instance->conn;
    }
}