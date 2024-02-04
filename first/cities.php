<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "development";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Ошибка подключения к базе данных: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $regionId = $_GET["regionId"];
    $sqlCities = "SELECT id, name FROM cities WHERE region_id = $regionId";
    $resultCities = $conn->query($sqlCities);
    if ($resultCities->num_rows > 0) {
        $cities = array();
        while($row = $resultCities->fetch_assoc()) {
            $cities[$row["id"]] = $row["name"];
        }
        echo json_encode(array("cities" => $cities));
    } 
    
}
?>