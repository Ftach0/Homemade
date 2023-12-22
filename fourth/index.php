<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>временной диапазону</title>
</head>
<body>




<form action="" method="post">
    <label for="start_year">Начальный год:</label>
    <select name="start_year" id="start_year">
        <?php
        for ($year = 1999; $year <= 2003; $year++) {
            echo "<option value='$year'>$year</option>";
        }
        ?>
    </select>

    <label for="start_month">Начальный месяц:</label>
    <select name="start_month" id="start_month">
        <?php
        $months = [
            'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
            'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'
        ];

        foreach ($months as $index => $month) {
            echo "<option value='" . ($index + 1) . "'>$month</option>";
        }
        ?>
    </select>

    <label for="end_year">Конечный год:</label>
    <select name="end_year" id="end_year">
        <?php
        for ($year = 2003; $year <= 2007; $year++) {
            echo "<option value='$year'>$year</option>";
        }
        ?>
    </select>

    <label for="end_month">Конечный месяц:</label>
    <select name="end_month" id="end_month">
        <?php
        foreach ($months as $index => $month) {
            echo "<option value='" . ($index + 1) . "'>$month</option>";
        }
        ?>
    </select>

    <input type="submit" value="Тык">
</form>

</body>
</html>
<?php
if ($_POST) {
   $start_year = $_POST['start_year'];
    $start_month = $_POST['start_month'];
    $end_year = $_POST['end_year'];
    $end_month = $_POST['end_month'];
    $start_date = strtotime("$start_year-$start_month-01");
    $end_date = strtotime("$end_year-$end_month-01");
    $total_months = 0;
    $total_weekend_days = 0;
    for ($current_date = $start_date; $current_date <= $end_date; $current_date = strtotime('+1 month', $current_date)) {
        $total_months++;
        for ($day = strtotime('first day', $current_date); $day < strtotime('first day +1 month', $current_date); $day = strtotime('next day', $day)) {
            $dayOfWeek = date('N', $day);
            if ($dayOfWeek == 6 || $dayOfWeek == 7) {
                $total_weekend_days++;
            }
        }
    }

   
 
    echo "<p>Всего месяцев в выбранном диапазоне: $total_months</p>";
    echo "<p>Всего выходных дней (суббот и воскресений) в выбранном диапазоне: $total_weekend_days</p>";
}
?>