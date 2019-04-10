<?php
$connection = new PDO('mysql:host = localhost; dbname = valid; charset = utf8',
        'root', '');

function generateRandomString() {
    $char = '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
    $random = '';
    for ($i = 0; $i < 20; $i++){
        $random .= $char[rand(0, strlen($char)-1)];
    }
    return $random;
}

if ($_POST['username']){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $authKey = generateRandomString();
    $query = $connection ->query("INSERT INTO valid.table_name (name, email, auth_key) VALUES 
('$username', '$email', '$authKey')");

    if ($query) {
        mail($email, 'Подтвердите почту', "Перейдите по ссылке <a href='http://academy/tasks-from-artem/valid/?auth=$authKey'>link</a>");
        echo 'Подтвердите почту (отправлено письмо)';
    }
    else
    {
        $findUser = $connection->query("SELECT * FROM valid WHERE  email = '$email'");
        $findUser = $findUser->fetch();
        if(!$findUser['validate'])
        {
            echo 'Ваша почта не подтверждена';
        }
        else
        {
            echo 'Ваша почта уже используется';
        }
    }

}

if ($_GET['auth']){
    $auth = $_GET['auth'];
    $search = $connection->query("SELECT * FROM valid.table_name WHERE  auth_key = '$authKey'");
    if($search){
        $connection->query("UPDATE valid.table_name SET validate = TRUE, updated_at = CURRENT_TIMESTAMP 
WHERE auth_key = '$auth'");
        echo 'Ваша почта подтверждена!';
    }

}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    *{
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    body{
        font-family: 'Arial';
    }

    input{
        width: 300px;
        display: block;
        margin: 5px;
    }
</style>
<form action="" method="post">
    <input type="text" name="username" required>
    <input type="email" name="email" required>
    <input type="submit">
</form>
</body>
</html>