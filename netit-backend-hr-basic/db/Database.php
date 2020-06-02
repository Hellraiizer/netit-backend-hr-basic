<?php

class Database {
  
    private $dbconnection;
    private $lastexecutedquery = null;
    private $executeerror = null;
    private $resultcollection = null;
   
    private static $instance = null; 
    
    public static function getInstance() {
      
        if(!Database::$instance) { 
        Database::$instance = new Database();  
       }    
        return Database::$instance;  
    }
    
        private function __construct() { 
        
        $dbhandler = NULL;
        $dbhost = config::db($dbhandler)['host_db'];
        $dbuser = config::db($dbhandler)['user_db'];
        $dbbase = config::db($dbhandler)['basename_db'];
        $dbpass = config::db($dbhandler)['pass_db'];
       
        $this->dbconnection = new mysqli($dbhost, $dbbase , $dbpass, $dbuser);
        }
      
      public function query($query) {
      
      $this->lastexecutedquery = $query;
      $this->resultcollection = $this->dbconnection->query($query);
    
      return $this;
      
      }                
      
      public function fetch() {
      return $this->resultcollection->fetch_assoc();
      }    
      
      
      public function lastexecutedquery() {
      return $this->lastexecutedquery;
       }
        
       public function showerror() {
        if(empty($this->executeerror)) {
        $this->executeerror = $this->dbconnection->error;    
       }   
      
        return $this->executeerror;
       
       } 
        
        public function lastinsertedid() {
        return $this->dbconnection->insert_id;
        }
          
          
       
        }


        
        

