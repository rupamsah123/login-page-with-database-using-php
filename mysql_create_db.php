<?php

// the way to the connect the my sql database
// 1.mysqli extension
// 2.pdo
//conecting to the database
// $servername = "localhost";
// $username = "root";
// $password = "";
// //create a connection
// $conn = mysqli_connect($servername,$username,$password);
// if(!$conn)
// {
//     die("sorry we fatch to connect:". mysqli_connect_error());
// }
// else{
//     echo"connecton was succesful<br>";

// }
$servername = "localhost";
$username = "root";
$password = "pqr";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";

//create db
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
// echo"the result is";
// echo var_dump($result);
// echo"<br>";




?>