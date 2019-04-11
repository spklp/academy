<?php

require_once 'ClassSl.php';
require_once 'connect.php';

// блок проверки для редикта и редикт
$sl = new Sl($connection);
$sl->checkTableOrCreate();
$uri = $sl->getURI();
if ($uri)
{
    $sl->checkURI($uri);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Короткие ссылки</title>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
        google.load("jquery", "1.3.2");
        google.load("jqueryui", "1.7.2");
    </script>
    <script type="text/javascript">
        function send(url,form_id,result_div)
        {
            $.ajax
            ({
                type: "POST",
                url:  url,
                data: $("#"+form_id).serialize(),

                success: function(html)
                {
                    $("#"+result_div).empty();
                    $("#"+result_div).append(html);
                },
                error: function()
                {
                    $("#"+result_div).empty();
                    $("#"+result_div).append("Ошибка!");
                }
            });
        }
    </script>
</head>
<body>
<div>
    <div>
        <h3>Добро пожаловать на сервис генерации</h3>
        <h2>Коротких ссылок</h2>
    </div>
    <div style="display: block">
        <form method="post" action="javascript:send('main.php','myform','result');" id="myform">
            <input type="text" name="link" placeholder="Ваша ссылка" size="40" required>
            <input type="button" value="Отправить" onClick="send('main.php','myform','result');" value="Короткая ссылка">
        </form>
    </div>
    <div id="result">

    </div>
</div>
</body>
</html>
