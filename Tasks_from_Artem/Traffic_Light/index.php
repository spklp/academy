<?php

$data = [
        'year' => date('Y'),
        'day' => date('j'),
        'hour' => date('G'),
        'min' => date('i'),
        'sec' => date('s'),
];

?>

<?php if (($data['min'] % 3) == 0): ?>
    <div style='width: <?= $data['hour'] * 20; ?>px; height: <?= $data['day'] ** 3; ?>px; background-color: red'>
    </div>
<?php elseif ((($data['min'] % 2) == 0) and (($data['min'] % 3) != 0)): ?>
    <div style='width: <?= round(sqrt($data['year'])) * 5; ?>px; height: <?= round(sqrt($data['year'])) * 5; ?>px; background-color: yellow'>
    </div>
<?php else: ?>
    <div style='width: <?= $data['min'] * $data['sec']; ?>px; height: <?= $data['hour'] ** 2; ?>px; background-color: green'>
    </div>
<?php endif; ?>


