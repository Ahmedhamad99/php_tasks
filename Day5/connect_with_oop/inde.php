<?php


class DB
{
    protected $dbType, $dbName, $host, $connection, $userName, $userPassword;
    function __construct($dbType, $dbName, $host, $userName, $userPassword)
    {
        $this->dbType = $dbType;
        $this->dbName = $dbName;
        $this->host = $host;
        $this->userName = $userName;
        $this->userPassword = $userPassword;
        $this->connection = new PDO("$this->dbType:host=$this->host;dbname=$this->dbName", $this->userName, $this->userPassword);
    }


    function index($table)  
    {
        $query = "select * from $table";  
        $sqlQuery = $this->connection->prepare($query);
        $sqlQuery->execute();
        $result = $sqlQuery->fetchAll(PDO::FETCH_ASSOC);
        if ($result) {
            return $result;
        } else {
            echo "Data Empty";
        }
    }

    function show($table, $id)
    {
       try {
        $query = "select * from $table where id=$id";
        $sqlQuery = $this->connection->prepare($query);
        $sqlQuery->execute();
        return $sqlQuery->fetch(PDO::FETCH_ASSOC);
       } catch (Error $e) {
       
        return null;
       }
    }
    function delete($table, $id)
    {
       try {
        $query = "delete from $table where id=$id";
        $sqlQuery = $this->connection->prepare($query);
        $sqlQuery->execute();
        return $sqlQuery->fetch(PDO::FETCH_ASSOC);
       } catch (Error $e) {
       
        return null;
       }
    }
}


$database = new DB(dbType: "mysql", dbName: "users", userName: "root", userPassword: "", host: "localhost:3307");
