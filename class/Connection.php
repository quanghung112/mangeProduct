<?php


class Connection
{
    private $serverName;
    private $userName;
    private $password;
    private $dbName;
    public function __construct($serverName,$dbName,$userName,$password)
    {
        $this->serverName = $serverName;
        $this->dbName = $dbName;
        $this->userName = $userName;
        $this->password = $password;
    }
    public function connect(){
        try {
            $connection = new PDO("$this->serverName;$this->dbName", $this->userName, $this->password);
            return $connection;
        } catch (PDOException $e) {
            echo 'Error: ', $e->getMessage(), "\n";;
        }
    }
}