<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $birth_year = $_POST["birth_year"];
    $data = array($first_name, $last_name, $birth_year);
    $file = fopen("data.csv", "a");
    fputcsv($file, $data);
    fclose($file);
}
$data = array_map('str_getcsv', file('data.csv'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV Form</title>
</head>
<body>
    <h1>Введите данные</h1>
    <form method="post" action="index.php">
        <label for="first_name">Имя:</label>
        <input type="text" name="first_name" required><br>

        <label for="last_name">Фамилия:</label>
        <input type="text" name="last_name" required><br>

        <label for="birth_year">Год рождения:</label>
        <input type="text" name="birth_year" required><br>
        <input type="submit" value="Отправить">
    </form>

    <h2>Содержимое CSV-файла</h2>
    <table border="1">
        <tr> 
               <th>Имя</th>
            <th>Фамилия</th>
            <th>Год рождения</th>
        </tr>
        <?php foreach ($data as $row): ?>
        <tr>
            <td><?= $row[0] ?></td>
            <td><?= $row[1] ?></td>
            <td><?= $row[2] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
