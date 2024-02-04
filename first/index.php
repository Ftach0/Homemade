<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Выбор региона и города</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function(){
           fillRegions();
           $('#region').change(function(){
                var selectedRegion = $('#region').val();
                updateCityList(selectedRegion);
            });
            $('#selectButton').click(function(){
                var selectedRegion = $('#region option:selected').text();
                var selectedCity = $('#city option:selected').text();
                displaySelectionResults(selectedRegion, selectedCity);
            });
        });
        function fillRegions() {
            $.ajax({
                url: 'regions.php',
                method: 'GET',
                dataType: 'json',
                success: function(response){
                    $.each(response.regions, function(index, value){
                        $('#region').append('<option value="' + index + '">' + value + '</option>');
                    });
                }
            });
        }
        function updateCityList(selectedRegion) {
            if(selectedRegion === "0"){
                $('#city').hide();
                $('#selectButton').hide();
            } else {
                $('#city').show();
                $('#selectButton').show();
                $('#city').empty();
                $.ajax({
                    url: 'cities.php',
                    method: 'GET',
                    data: { regionId: selectedRegion },
                    dataType: 'json',
                    success: function(response){
                        $.each(response.cities, function(index, value){
                            $('#city').append('<option value="' + index + '">' + value + '</option>');
                        });
                    }
                });
            }
        }
        function displaySelectionResults(selectedRegion, selectedCity) {
            $('#result').html('<p>Выбранный регион: ' + selectedRegion + '</p><p>Выбранный город: ' + selectedCity + '</p>');
        }
    </script>
</head>
<body>
    <h1>Выбор региона и города</h1>
    <label for="region">Регион:</label>
    <select id="region"></select>
    <label for="city">Город:</label>
    <select id="city" style="display:none;"></select>
    <button id="selectButton" style="display:none;">Выбор</button>
    <div id="result"></div>
</body>
</html>
