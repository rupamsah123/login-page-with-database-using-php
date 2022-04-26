<?php
echo"conecting my sql database from php script";
echo "<br>";
// the way to the connect the my sql database
// 1.mysqli extension
// 2.pdo
//conecting to the database
$servername = "localhost";
$username = "root";
$password = "";
//create a connection
$conn = mysqli_connect($servername,$username,$password);
if(!$conn)
{
    die("sorry we fatch to connect:". mysqli_connect_error());
}
else{
    echo"connecton was succesful";

}




?>