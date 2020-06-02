<?php


//include '.db/dbtesting.php';
//include '.config/config.php';
//include '.user/u_employee.php';



?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/public.css">
    </head>
    <body>

        <div id="application-header" class="web-header">
            <h1 class="logo">Registration</h1>
        </div>
            
        <div class="wrapper-registration">
            <form method="POST" name="registration">
                <input class="form-input" type="text" placeholder="Username" name="Username">
                <input class="form-input" type="text" placeholder="E-mail" name="Email">
                <input class="form-input" type="text" placeholder="Password" name="Password">
                <input class="form-input" type="text" placeholder="Repeat Password" name="Repeat-password">
                
                <input class="button" type="submit" name="post_submit">
                <input type="hidden" name="post_tokken" value="1">
            </form>
        </div>
        
    </body>
</html>