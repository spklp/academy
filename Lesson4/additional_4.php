<?php

$maxDate = date('Y-m-d');
$age = [];

function age($age, $today){
    foreach ($today as $key => $day ){
        $age[$key] = $day - $age[$key];
    }

    if ($age[1]  < 0){
        $age = $age[0] - 1;
    }
    elseif (($age[1]  < 0) and ($age[2]  < 0)){
        $age = $age[0] - 1;
    }
    else{
        $age = $age[0];
    }
    return $age;
}

function msg ($age){
    $msg = "Привет меня зовут " . $_POST['name'] . " " . $_POST['surname'] . ", мой возраст - " . $age;
    if (($age % 100 < 15) and ($age % 100 > 10)){
        $msg .= " лет";
    }
    elseif($age % 10 > 4){
        $msg .= " лет";
    }
    elseif($age % 10 > 1){
        $msg .= " года";
    }
    else{
        $msg .= " год";
    }
    return $msg;
}

if (isset($_POST['name'])){
    $age = explode('-', $_POST['age']);
    $today = explode('-', $maxDate = date('Y-m-d'));
    $age = age($age, $today);
    echo msg($age);
}
?>

<form method="post">
    <input type="text" name="name" required placeholder="Имя">
    <input type="text" name="surname" required placeholder="Фамилия">
    <input type="date" name="age"  max="<?= $maxDate; ?>" min="1900-00-00" required placeholder="Дата рождения">
    <input type="submit">
</form>

