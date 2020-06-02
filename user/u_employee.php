<?php


class Employee {
    
    public static function login() {
        
    }
    
    
    
    public static function registration($Username, $Firstname, $Lastname, $Email, $Password, $Age) {
               
             Database::getInstance()->query("INSERT INTO testhr1.employees(Username, Firstname, Lastname, Email, Password, Age, Role)    
                        values('{$Username}','{$Firstname}','{$Lastname}', '{$Email}', '{$Password}', '{$Age}', 2)");


          if(Database::getInstance()->lastinsertedid())  {           
                return true;
          }
          
                return false;
          }
    
    
    public static function logout() {
        
    }
    
    
    
    
    
    }