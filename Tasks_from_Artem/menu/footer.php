<footer class="links">
    <?php foreach ($linkData as $link): ?>
        <a href="<?= $link['url']; ?>"><?= $link['name']; ?></a>
    <?php endforeach; ?>
</footer>
</body>