<?php

$data = require_once ("data.php");
$educData = $data['education']

?>

<div class="education-container container-block">
    <h2 class="container-block-title">Образование</h2>
    <?php foreach ($educData as $educ): ?>
    <div class="item">
        <h4 class="degree"><?= $educ['faculty']; ?></h4>
        <h5 class="meta"><?= $educ['university']; ?></h5>
        <div class="time"><?= $educ['yearStart']; ?> -
            <?= $educ['yearEnd']; ?></div>
    </div>
     <?php endforeach; ?>
</div>