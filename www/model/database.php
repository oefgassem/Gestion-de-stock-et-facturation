<?php

class connect
{
    private $host = 'db';
    private $dbname = 'gestock';
    private $user_name = 'root';
    private $pass = 'test';
    
    public function db_connect()
    {
        $dsn = "mysql:host=$this->host;dbname=$this->dbname";
        try {
            $db = new PDO($dsn, $this->user_name, $this->pass);
    //        echo "Connecté";
        } catch (Exception  $e) {
    //        echo "ERREUR :  " . $e->getMessage();
        }
        return $db;
    }
}
?>