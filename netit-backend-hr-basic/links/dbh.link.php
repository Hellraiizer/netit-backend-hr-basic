<?php

$servername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="testhr1";

$conn= mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);

if($conn) {
    echo("Successfully logged in".mysqli_connect_error());
}