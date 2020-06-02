<?php
namespace db {

    class Database {

        private $dbConnection;
        private $lastExecutedQuery = null;
        private $executeError      = null;
        private $resultCollection  = null;

        private static $instance   = null;

        
        public static function getInstance() {

            if(!Database::$instance) {
                Database::$instance =  new Database();
            }

            return Database::$instance;
        }


        private function __construct() {

            $dbHandler    = NULL;
            $dbHost       = \config\config::db($dbHandler)['dbHost'];
            $dbUsername   = \config\config::db($dbHandler)['dbUsername'];
            $dbName       = \config\config::db($dbHandler)['dbName'];
            $dbPass       = \config\config::db($dbHandler)['dbPass'];

         
            $this->dbConnection = new mysqli($dbHost, $dbUsername, $dbName, $dbPass);
        }
       
        public function query($query) {

            $this->lastExecutedQuery = $query;
            $this->resultCollection  = $this->dbConnection->query($query);
            
            if($this->dbConnection->error) {
                
                echo '<br>';
                echo '<strong>SQL Error</strong>';
                echo '<hr>';
                var_dump($this->dbConnection->error);
                echo '<hr>';
                echo '<br>';
            }
            
            return $this->resultCollection;
        }

        public function fetch() {
            return $this->resultCollection->fetch_assoc();
        }
        
        
        public function fetchCollection() {
            
            $collection = array();
            
            while($element = $this->resultCollection->fetch_assoc()) {
                array_push($collection, $element);
            }
            
            return $collection;
        }        

        public function lastExecutedQuery() {
            return $this->lastExecutedQuery;
        }

        public function showError() {

            if(empty($this->executeError)) {
                $this->executeError = $this->dbConnection->error;
            }

            return $this->executeError;
        }
        
        
        public function lastInsertedId() {
            return $this->dbConnection->insert_id;
        }
        
        
        public function affectedRows() {
            return $this->dbConnection->affected_rows;
        }
    
    }
}
