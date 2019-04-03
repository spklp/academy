<?php

$dir = scandir(__DIR__);
$dir = array_splice($dir, 2);
?>

<header>
    <?php foreach ($dir as $dirL): ?>
        <?php if (substr($dirL, -4) != ".php"): ?>
            <a href= "<?= $dirL; ?>"><?= $dirL; ?></a>
        <?php endif; ?>
    <?php endforeach; ?>
</header>