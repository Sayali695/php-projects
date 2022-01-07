<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbsayali2";

$conn = mysqli_connect($servername,$username,$password,$database);

if (!$conn){
    die("Sorry we failed to connect :( ".mysqli_connect_error());
}
else{
    echo"Connection was Successfull !!!";
}


// delete records

$sql = "DELETE FROM `employees` WHERE `employees`.`Name` = 'Sayali' LIMIT 3";
// LIMIT helps to delete the specified number of records.


$result = mysqli_query($conn, $sql);
echo"<br>";
$aff = mysqli_affected_rows($conn);
echo "Number of rows affected ".$aff;
