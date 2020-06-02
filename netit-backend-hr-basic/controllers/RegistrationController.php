<?php

class RegistrationController {
    
public function index() {    
   

    if(isset($_POST) && isset($_POST['post_token'])){
    
         $Username = $_POST ['Username'];
         $FirstName = $_POST ['First_Name'];
         $LastName = $_POST ['Last_Name'];
         $Email = $_POST ['Email'];
         $Password = $_POST ['Password'];
         $Age = $_POST ['Age'];
         
         if(Employee::registration($Username, $FirstName, $LastName, $Email, $Password, $Age)){       
          echo "Succesfully registrated";
         }
      }
    }
  }



// var_dump($_POST); 