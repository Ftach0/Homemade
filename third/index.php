<?php
$servername = "localhost";         
$username = "root"; 
$password = "root";         
$dbname = "development";

$conn = new mysqli($servername, $username, $password, $dbname);// Создаем подключение
// Получаем список всех таблиц в базе данных
$tables_query = "SHOW TABLES";
$tables_result = $conn->query($tables_query);
if ($tables_result->num_rows > 0) {
while ($table_row = $tables_result->fetch_row()) {
$table_name = $table_row[0];
        $columns_query = "SHOW COLUMNS FROM $table_name";// Получаем столбцы (поля) для каждой таблицы
        $columns_result = $conn->query($columns_query);
        echo "<h2>Таблица: $table_name</h2>";// Выводим названия таблиц
        echo "<table border='1'><tr>";// Выводим названия полей
        while ($column_row = $columns_result->fetch_assoc()) {
            echo "<th>" . $column_row['Field'] . "</th>";
        }
        echo "</tr>";
        $data_query = "SELECT * FROM $table_name";// Выбираем все строки из таблицы
        $data_result = $conn->query($data_query);
        while ($data_row = $data_result->fetch_assoc()) {// Выводим содержание каждой строки и содержание столбцов
            echo "<tr>";
            foreach ($data_row as $column => $value) {
                echo "<td>";
                echo "<b>$column:</b> $value";
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<br>";
    }
}
?>
