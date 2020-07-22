<?php
    // получаем даннеы с помощь get , если бы был post,
    // то получали бы через post
    // $_GET - глобальная переменная get
    if($_GET["country"] === 1){
        // мы должны передать массив
        // что бы передать массив мы должны использовать формат json
        // функция php json_encode() — Возвращает JSON-представление данных
        echo json_encode( array("1" => "Washington", "2" => "Sietl"));  
    } else if($_GET["country"] === 2){
        echo json_encode( array("3" => "Paris", "4" => "Marsel"));  
    }

?>