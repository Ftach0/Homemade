<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Получаем данные из выпадающих списков
    $regionId = isset($_GET['region']) ? $_GET['region'] : null;
    $cityId = isset($_GET['city']) ? $_GET['city'] : null;

    // Здесь можно выполнить дополнительную обработку данных, если необходимо

    // Отправляем данные обратно в формате JSON
    echo json_encode(['region' => $regionId, 'city' => $cityId]);
} else {
    // Некорректный метод запроса
    header('HTTP/1.1 405 Method Not Allowed');
    echo 'Method Not Allowed';
}
?>
