<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "contacts";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "Connected successfully<br>";
}
$sql= "SELECT * FROM `contactus`";
$result = mysqli_query($conn,$sql);
//no. of records in database
$num= mysqli_num_rows($result);
echo $num;

//fecth the data from database to dispaly
echo "<br>";
// if($num>0)
// {
//     $row= mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     $row= mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     $row= mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     $row= mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     $row= mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     $row= mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
// }
// echo "<br>";
//to fecth datav using loop also
while($row=mysqli_fetch_assoc($result))
{
    //echo var_dump($row);
    echo $row['sno']. "Hello";
    echo "<br>";
}
?>