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


// Creating Table
$sql = "CREATE TABLE `employees` ( `SR.NO.` INT NOT NULL AUTO_INCREMENT ,  `Name` VARCHAR(100) NOT NULL ,  `Role` VARCHAR(100)
NOT NULL ,  `DOJ` DATETIME NOT NULL ,    PRIMARY KEY  (`SR.NO.`))";
$result = mysqli_query($conn, $sql);

echo"<br>";
if ($result){
    echo"The Table is created successfully !!!";
}
else{
    echo"The Table was not created successfully :(  ".mysqli_error($conn);
}

?>


