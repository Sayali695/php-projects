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

// select data
$sql = "SELECT * FROM `employees`";


$result = mysqli_query($conn, $sql);
echo"<br>";

$num = mysqli_num_rows($result);
echo"$num";
echo "<br>";

if ($num>0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo"<br>";

    // while ($row = mysqli_fetch_assoc($result)){
    //     echo var_dump($row);
    //     echo"<br>"; 
    // }

    while ($row = mysqli_fetch_assoc($result)){
        echo $row['SR.NO.']. " Hello ". $row['Name'] . " Your designation is ".$row['Role']." and the Date of joining is ".$row['DOJ']; 
        echo"<br>"; 
    }
}
?>