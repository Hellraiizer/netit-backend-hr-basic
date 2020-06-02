<?php

namespace controllers;

class LoginController {
    
    public function index() {
        
        if(isset($_POST) && isset($_POST['post_tokken'])) {
            
            $email      = $_POST['email'];
            $password   = $_POST['password'];
            
            // TODO : Optimize
            if(\user\User::isAvailable($email, $password)) { // 1. Count 
                
               $userObject = \user\User::login($email, $password); // 2. Count + Get
               \user\User::set($userObject);
               
               if(\user\User::role() == 1) {
                   redirect('index');
               }
               
               if(\user\User::role() == 2) {
                    header('Location: index.php');
               }
            }
            
            session\Session::setFlashMessage('error_message', 'Потребителя не е намерен в системата');
            
                  }
    }
}