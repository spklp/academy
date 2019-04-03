<?php

$data = require_once 'data.php';
$lessonsData = $data ['lessons'];
$linkData = $data['links'] ;
?>
<link id="theme-style" rel="stylesheet" href="css/style.css">
<body>
<header class="links">
    <?php foreach ($lessonsData as $lesson): ?>
        <a href="<?= $lesson['url']; ?>"><?= $lesson['name']; ?></a>
    <?php endforeach; ?>
</header>