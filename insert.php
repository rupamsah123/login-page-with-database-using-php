<?php
//connection to server

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
$name="rup";
$last ="sah";
$sql= "INSERT INTO `myguests` (`id`, `firstname`, `lastname`, `email`, `reg_date`) VALUES (NULL, '$name', '$last', 'namo199@gmail.com', '2022-04-12 19:40:13')";
$result= mysqli_query($conn,$sql);
if($result)
{
    echo"the insertion  was done succesfully";
}
else{
    echo"the insertion was not done successfully---->". mysqli_error($conn);
}








?>