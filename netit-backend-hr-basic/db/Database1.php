<?php


class Database1 {

    private $dbConnection;
    private $lastexecutedquery1 = null;
    
 
    public function __construct ($param) { 
     
     $dbHost ='localhost';
     $dbUsername ='root';
     $dbPassword ='';
     $dbName ='testhr1';
    
    $this->dbConnection=new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
 }     
        


public function query1($query1) {  
    
    $this->lastexecutedquery1= $query1;
    $this->dbConnection->query1($query1);
    }
    
    public function fetch($query1result) {
       return $query1result->fetch_assoc();
    }


public function lastexecutedquery1() {
    return $this->lastexecutedquery1;}
    
  }
