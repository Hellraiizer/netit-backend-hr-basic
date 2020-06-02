<?php

//namespace config;

class Config {
    
    public static function db($dbhandler = null) {
        
        if($dbhandler == 'testing') {
    
            return array(
                'host_db' => 'localhost',
                'user_db' => 'root',
                'basename_db' => 'testhr1,employees',
                'pass_db' => ''
            );
          }

            
            
    }
}