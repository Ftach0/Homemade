<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "development";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Ошибка подключения к базе данных: " . mysqli_connect_error());
}
$sqlRegions = "SELECT id, name FROM regions";
$resultRegions = $conn->query($sqlRegions);
if ($resultRegions->num_rows > 0) {
    $regions = array();
    while($row = $resultRegions->fetch_assoc()) {
        $regions[$row["id"]] = $row["name"];
    }
    echo json_encode(array("regions" => $regions));
} 
?>