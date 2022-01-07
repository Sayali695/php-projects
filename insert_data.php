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

// insert data
$name = "Atharva";
$role = "Associate";

$sql = "INSERT INTO `employees` (`Name`, `Role`) 
       VALUES ('$name', '$role')";


$result = mysqli_query($conn, $sql);

echo"<br>";

if ($result){
    echo"The record is inserted successfully !!!";
}
else{
    echo"The rcord is not inserted successfully :(  ".mysqli_error($conn);
}


?>
