<?php
    define ("HOSTNAME", "localhost");
    define ("USERNAME", "root");
    define ("PASSWORD", "");
    define ("DBNAME", "testhr1");

    $con = mysqli_connect ("HOSTNAME","USERNAME","PASSWORD","DBNAME") or die ("Connection failed again");
     if($con)
         echo 'You are connected finally';
?>