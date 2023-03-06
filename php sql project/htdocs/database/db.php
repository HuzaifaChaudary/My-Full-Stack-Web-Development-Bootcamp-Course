
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db    = 'student';

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "connected successfully" ;
}

$person = array('firstname' => 'roshan', 'lastname'=>'khan','city'=>'lahore');
  
echo $person['firstname'];

// // Create database 

// $sql = "CREATE DATABASE myDB";
// if (mysqli_query($conn, $sql)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }

?>


