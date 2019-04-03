<h3>Проверка GET-запроса</h3>
<?php

if (isset($_GET['name'])): ?>
    <?php foreach ($_GET as $key => $get): ?>
        <span>
            <?= $key ?> : <?= $get ?>
        </span><br>
    <?php endforeach; ?>
<?php endif; ?>

<form>
    <input type="text" name="name" required placeholder="Имя">
    <input type="text" name="surname" required placeholder="Фамилия">
    <input type="number" name="age" required placeholder="Возраст">
    <input type="submit" href="#.html">
</form>

<h3>Проверка POST-запрос</h3>
<?php if (isset($_POST['name'])): ?>
    <?php foreach ($_POST as $key => $post): ?>
        <span>
            <?= $key ?> : <?= $post ?>
        </span><br>
    <?php endforeach; ?>
<?php endif; ?>

<form method="post">
    <input type="text" name="name" required placeholder="Имя">
    <input type="text" name="surname" required placeholder="Фамилия">
    <input type="number" name="age" required placeholder="Возраст">
    <input type="submit">
</form>

<h3>Глобальный массив $_REQUEST</h3>
<?php foreach ($_REQUEST as $key => $request): ?>
    <span>
        <?= $key ?> : <?= $request ?>
    </span><br>
<?php endforeach; ?>
