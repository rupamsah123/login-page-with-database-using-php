<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";

//create db
//$sql= "CREATE TABLE `trip` ( `sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `rollno` INT(11) NOT NULL , PRIMARY KEY ('sno'))";
$sql = "CREATE TABLE MyGuests (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
$result= mysqli_query($conn,$sql);
if($result)
{
    echo"the table was created succesfully"; 
}
else{
    echo"the table was not created---->". mysqli_error($conn);
}


?>