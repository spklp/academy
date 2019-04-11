<?php

require_once 'ClassSl.php';
require_once 'connect.php';

// обработка POST запроса
$sl = new Sl($connection);
if (isset ($_POST['link']))
{
    $sl->addPostLink();
    $res = $sl->parsPostLink();
    if($res == true)
    {
        if($sl->checkPostLink())
        {
            $sl->checkPostLinkInDBOrGenerate();
        }
        else
        {
            $sl->resultCheckPostLink = false;
            echo "Ваша ссылка не работает!<br>";
        }
    }
    else
    {
        echo "Неверный формат ссылки, пример:<br>http://www.domen.com";
    }
}
