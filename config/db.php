<?php

class DB{
    public $pdo;
    public function __construct($settings)
    {
        $this->pdo=new PDO('mysql:host='.$settings["database"]["host"].';dbname='.$settings["database"]["database"].'', $settings["database"]["user"], $settings["database"]["password"]);
    }
     function getAll($table){
        $sql ="SELECT * FROM $table";
        $statement=$this->pdo->prepare($sql);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}


?>