<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = mysqli_connect($servername, $username, $password, $dbname) ;
if(!$conn) {
    die ("Connection Failed : " . mysqli_connect_error());
}

else {
    echo "Connected Successfully" ;
}

$sql = "INSERT INTO users (id, first_name, last_name, email)
VALUES (NULL, 'HUZ', 'CH', 'chhuzaifaiftikhar@gmail.com')";

//WE'll not gonna write this like we did in 'CREATE Table' SO , real insert work differently.

// if(mysqli_query($conn, $sql)) {
//     echo "Connected Successfully" ;
// }
// else {
//     echo "Connection Failed" ;
// }

if (mysqli_query($conn, $sql)) {
    echo "Connected Successfully" 
}
else {
    echo "connection failed" . mysqli_connect_error() ;
}


?>