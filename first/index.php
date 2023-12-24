<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Выбор региона и города</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function(){
            // Заполняем первый выпадающий список при загрузке страницы
            var regions = ["Выберите регион", "Москва", "Санкт-Петербург", "Тверь", "Ярославль"];
            $.each(regions, function(index, value){
                $('#region').append('<option value="' + index + '">' + value + '</option>');
            });

            // Обработчик события изменения первого списка
            $('#region').change(function(){
                var selectedRegion = $('#region').val();

                // Если выбран "Выберите регион", скрываем второй список
                if(selectedRegion === "0"){
                    $('#city').hide();
                    $('#selectButton').hide();
                } else {
                    // Иначе показываем второй список и кнопку
                    $('#city').show();
                    $('#selectButton').show();

                    // Очищаем второй список перед добавлением новых данных
                    $('#city').empty();

                    // Заполняем второй список в зависимости от выбранного региона
                    var cities;
                    switch(selectedRegion){
                        case "1":
                            cities = ["Выберите город", "Москва 1", "Москва 2", "Москва 3"];
                            break;
                        case "2":
                            cities = ["Выберите город", "Санкт-Петербург 1", "Санкт-Петербург 2", "Санкт-Петербург 3"];
                            break;
                        case "3":
                            cities = ["Выберите город", "Тверь 1", "Тверь 2", "Тверь 3"];
                            break;
                        case "4":
                            cities = ["Выберите город", "Ярославль 1", "Ярославль 2", "Ярославль 3"];
                            break;
                        default:
                            cities = ["Выберите город"];
                    }

                    $.each(cities, function(index, value){
                        $('#city').append('<option value="' + index + '">' + value + '</option>');
                    });
                }
            });

            // Обработчик события нажатия кнопки "Выбор"
            $('#selectButton').click(function(){
                // Получаем выбранные значения
                var selectedRegion = $('#region option:selected').text();
                var selectedCity = $('#city option:selected').text();

                // Выводим результаты выбора
                $('#result').html('<p>Выбранный регион: ' + selectedRegion + '</p><p>Выбранный город: ' + selectedCity + '</p>');
            });
        });
    </script>
</head>
<body>
    <h1>Выбор региона и города</h1>

    <label for="region">Регион:</label>
    <select id="region">
        <!-- Здесь будут добавлены элементы списка динамически с использованием JavaScript -->
    </select>

    <label for="city">Город:</label>
    <select id="city" style="display:none;">
        <!-- Здесь будут добавлены элементы списка динамически с использованием JavaScript -->
    </select>

    <button id="selectButton" style="display:none;">Выбор</button>

    <div id="result"></div>
</body>
</html>
