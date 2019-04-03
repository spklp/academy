$data = require_once __DIR__  . '/data.php';
$lessons = scandir(__DIR__ . '/Lessons');
$lessons = array_splice($lessons, 2);
$linkData = $data['links'] ;

?>
<link id="theme-style" rel="stylesheet" href="../css/style.css">
<body>
<header class="links">
    <?php foreach ($lessons as $lesson): ?>
        <a href= "Lessons/<?= $lesson; ?>"><?= substr($lesson, 0, -4); ?></a>
    <?php endforeach; ?>
</header>