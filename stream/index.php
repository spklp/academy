<?php

if (isset($_GET['text']))
{
    $text = $_GET['text'];
    $newText = mb_strtolower(str_replace(' ', '', $text));

    function reverse(string $str){
        $arr = [];
        for($i = mb_strlen($str)-1; $i >= 0; $i--){
            $arr[] = mb_substr($str, $i, 1);
        }
        return implode($arr);
    }

    function findMiniPalindrom (string $str){
        $miniPalindrom = '';
        for ($i = 0; $i < mb_strlen($str)-2; $i++){
            for ($k = 3; $k <= mb_strlen($str); $k++){
                if ((mb_substr($str, $i, $k) == reverse(mb_substr($str, $i, $k))) and
                (mb_strlen(mb_substr($str, $i, $k)) > mb_strlen($miniPalindrom)))
                {
                    $miniPalindrom = mb_substr($str, $i, $k);
                }
            }
        }
        return $miniPalindrom;
    }

    //echo "<pre>";
    //var_dump(reverse($newText));
    //echo "</pre>";

    if ($newText == reverse($newText))
    {
        echo "УРА, ваша фраза является палиндромом: " . $text;
    }
    else{
        if(!findMiniPalindrom($newText)){
        echo "Палиндромов и подпалиндромов не найдено. Первый символ фразы: " . mb_substr($text, 0 , 1);
        }
        else{
            echo "Палиндромов не найдено, но найден самый длинный подпалиндром: " . findMiniPalindrom($newText);
        }

    }
}
?>

<!doctype html>
<html lang="ру">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form>
    <h2>Палиндром-проверка</h2>
    <input type="text" name="text">
    <input type="submit">

</form>
</body>
</html>
