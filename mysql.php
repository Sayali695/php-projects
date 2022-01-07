<?php
echo"Welcome to the stage where you are ready to connect to the database.";
echo"<br>";
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password);


if (!$conn){
    die("Sorry we failed to connect :( ".mysqli_connect_error());
}
else{
    echo"Connection was Successfull !!!";
}


// creating database
$sql = "CREATE DATABASE dbsayali2";
$result = mysqli_query($conn, $sql);
echo "the result is ";
echo var_dump($result);
echo"<br>";

if ($result){
    echo"The database is created successfully !!!";
}
else{
    echo"The database was not created successfully :(  ".mysqli_error($conn);
}

?>