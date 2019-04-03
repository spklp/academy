<?php
$difficult = [
        'GET-запрос отображается в адресной строке, а POST-нет',
        'GET-запрос можно редактировать прямо в адресной строке, а POST-запрос только через формы',
        'Длина GET-запроса ограничена, поэтому чтобы передать длинный текст или картинку используется именно POST-запрос'
]
?>
<pre>
    <?php var_dump($difficult); ?>
</pre><br>

<h3>GET-запрос</h3>
<?php

if (isset($_GET['name'])): ?>
    <?= "Привет меня зовут " . $_GET['name'] . " " . $_GET['surname'] . ", мой возраст - " . $_GET['age']; ?>
<?php endif; ?>
<form>

    <input type="text" name="name" required placeholder="Имя">
    <input type="text" name="surname" required placeholder="Фамилия">
    <input type="number" name="age" required placeholder="Возраст">
    <input type="submit">
</form>

<h3>POST-запрос</h3>
<?php if (isset($_POST['name'])): ?>
<?= "Привет меня зовут " . $_POST['name'] . " " . $_POST['surname'] . ", мой возраст - " . $_POST['age'] . "<br>"; ?>

<?php endif; ?>
<form method="post">

    <input type="text" name="name" required placeholder="Имя">
    <input type="text" name="surname" required placeholder="Фамилия">
    <input type="number" name="age" required placeholder="Возраст">
    <input type="submit">
</form>
