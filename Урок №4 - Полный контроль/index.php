<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
    <p id="load" style="cursor: pointer">load information</p>
    <div id="information"></div>
    <script>

    function funcBefore(){
        $("#information").text("Wait please")
        // можем сделать загрузку с методами .show() / .hide(), img в html сделать дисплей block
    }

    function funcSucces(data){
        $("#information").text(data)
        // можем сделать загрузку с методами .show() / .hide(), img в html сделать дисплей block
    }

        $(document).ready(function(){
            $("#load").bind("click", function(){
                var admin = "Admin";
                $.ajax({    
                    // то на какую страницу будем отправлять данные
                    url: "content.php",
                    // определяет каким образом мы будем отправлять данные есть POSET / GET
                    type: "POST",
                    // передаем переменые (параметры)
                    data: ({name: admin, number: 5}),
                    // что мы передаем? text или html
                    dataType: "html",
                    // вызывается до того как получили ответ от "content.php"
                    beforeSend: funcBefore, // имя функции
                    // успешно закончена
                    success: funcSucces
                })
            });
        });
    </script>
</body>
</html>