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
$sql = "SELECT * FROM `employees` WHERE `Role` = ' Engineer'";


$result = mysqli_query($conn, $sql);
echo"<br>";

if ($result){
    $num = mysqli_num_rows($result);
    echo"$num";
    echo "<br>";

    if ($num>0){
        while ($row = mysqli_fetch_assoc($result)){
            echo $row['SR.NO.']. " Hello ". $row['Name'] . " Your designation is ".$row['Role']." and the Date of joining is ".$row['DOJ']; 
            echo"<br>"; 
        }
    }
}

$sql = "UPDATE `employees` SET `Name` = 'Duggu' WHERE `employees`.`SR.NO.` = 6";

$result = mysqli_query($conn, $sql);

echo"<br>";

$aff = mysqli_affected_rows($conn);

echo "<br> Number of affected rows.$aff";

if ($result){
    echo"We updated the record successfully";
}else{
    echo "We could not update the record. sorry for the inconvinence caused";
}

?>