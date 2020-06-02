<?php
include './db/Database.php';
include './config/config.php';

//Database::createnewobject();

//echo $config->applicationtitle;
 //echo $config->applicationversion;
//$config = new config();
//$config::$applicationtitle = "new db";
//echo '<br>';

//echo config::$applicationtitle;

//$database = new Database();
//$database->query("insert into testhr1.users(email,password)
            //values('pesho@mail.bg', 'ihopeso')");
//var_dump (($database->query("select * from testhr1.users"))->fetch());
//$database->numberofconnection();
//$database->showconnectionnumber();        
//var_dump($database->fetch());
//include './config/config1.php';
//include(db/Database1.php);
//include '.db/Database.php';
//include (config/config.php);
//$database= new database();
//$database1->query1("insert into employees(first_name, last_name, email, password, age)
//values ('Petar', 'Nikolov', 'pesho@abv.bg', '12345678', '55')");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lazytown HR</title>
    <link rel="stylesheet" link href="style/style.css" type="text/css"/>
    <link href="style/footer.css" rel="stylesheet" type="text/css"/>
    </head>

        
  <body>
       <div class="navbar">
           <a href="About Us.html">About Us</a>
        <div class="dropdown">
            <button class="dropbtn">Registration
          <i class="fa caret-down"></i>
        </button>
       <div class="dropdown-content">
           <a href="c_register.php">Company</a>
           <a href="u_register.php">User</a>
      </div>
   </div>
         <a href="Login.php">Login</a>    
 </div>

      
      <h1 class="carousel-quote">Be the change that you wish to see in the world</h2>
           <div id="wrapper-carousel">
             <div class="img-slide-start" >
              <img class="FadeSlide" <img src="img/pic1.png" alt=""/>
              <img class="FadeSlide" <img src="img/pic2.png" alt="2"/>
              <img class="FadeSlide" <img src="img/pic3.png" alt="3"/>
             </div>
           </div>  
      
      
        
      <tr>
       <a href="Contacts.html"  class="footer">Contacts</a>
       <span class="footer">|</span>
       <a href="Policy.html" class="footer">Privacy Policy</a>
       <span class="footer">|</span>
     </tr>


     
       
        
             
     <script src="Mainpage-carousel.js" type="text/javascript"></script>
   
   





 </body>
</html>
