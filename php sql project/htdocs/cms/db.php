<?php 
$server = "localhost" ;
$user = "root" ;
$password = "" ;
$db = "cms";

$conn = mysqli_connect($server, $user, $password, $db) ;

if(! $conn) {
    echo "Connection Failed" ; 
}


?>