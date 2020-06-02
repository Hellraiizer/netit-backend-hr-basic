 <?php
 
   
 public function header() }
 
  if(isset($_POST['signup-submit'])) {

  require "..db/Database.php";
  
  
   $username= $_POST['uid'];
   $email = $_POST['email'];
   $password = $_POST['pwd'];
   $passwordRepeat = $_POST['pwd-repeat'];
      
 /*if(empty($username)|| (empty($email)|| (empty($password)|| (empty($passwordRepeat)) {
header("Location:../sign.php?error=You have an empty field&uid=".$username."&email")
exit ();
        
}


else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {   
header("Location:../sign.php?error=You have an empty field&uid=".$username."&email");
exit();
}

/* 
   /*session_start();
  require 'signup.php'; 
  if (isset($_POST['signup-submit'])){
     session_start();
     $username = mysql_real_escape_string($_POST["username"]);
     $email = mysql_real_escape_string($_POST["email"]);
     $password = mysql_real_escape_string($_POST["password"]);
     $password2 = mysql_real_escape_string($_POST["password2"]);

    if ($password == $password2){

       $password = md5($password);
       $sql = "INSERT INTO users(username, email, password, password2) 
       VALUES('$username', '$email', '$password', '$password2')"; 
       mysqli_query($conn, $sql);
       $_SESSION['message'] = "You are successfully logged in";
       $_SESSION['firstName'] = $firstName;
       $_SESSION['lastName'] = $lastName;

    }else {
        $_SESSION['message'] = "The Two password do not match";
    }
echo "Ogledai pak <br>"
  }

?> */

