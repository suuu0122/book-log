<a class="btn btn-primary" href="new.php">読書ログを登録する</a>
<main>
    <?php if (count($reviews) > 0) : ?>
        <?php foreach ($reviews as $review) : ?>
            <section class="p-4">
                <h3><?php echo escape($review['title']); ?></h3>
                <div>著者名: <?php echo escape($review['author']); ?> 読書状況: <?php echo escape($review['status']); ?>  評価: <?php echo escape($review['score']); ?></div>
                <div><?php echo escape($review['summary']); ?></div>
            </section>
        <?php endforeach; ?>
    <?php else : ?>
        <p class="p-4">読書ログが登録されていません</p>
    <?php endif ?>
</main>