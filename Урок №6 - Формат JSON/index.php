<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Формат JSON</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>

    <!-- Формат JSON позваляет передавать массив на сервер
        и так же получать массив с сервера. 
        Что бы связать два массива js и php
        был придуман формат JSON 
    -->

    <label>Pass country:</label>
    <select name="country" id="">
        <option value="0" selected="selected"></option>
        <option value="1">USA</option>
        <option value="2">France</option>
    </select>
    <label>States:</label>
    <select name="city" id=""></select>
        <option value="0"></option>
    <script>

        $(document).ready(function(){
            // выборка элемента, change - изменение значения
            $('select[name="country"]').bind('change', function(){
                // в тех ajax есть несколько способов передавать данные
                // раньше писали ajax , сейчас напишем get можно post 
                // куда отправляем , что отправлем , что получаем
                $.get("countryCheck.php", {country: $('select[name="country"]').val()}, function(data){
                    // получаем данные и выводим их на экран
                    // здесь мы получаем фомат json c бека и должны раскодировать
                    // JSON.parse для преобразования JSON обратно в объект.
                    data = JSON.parse(data);


                })
            });
        });

    </script>
</body>
</html>