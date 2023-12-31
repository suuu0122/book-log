<a class="btn btn-primary mb-4" href="new.php">読書ログを登録する</a>
<main>
    <?php if (count($reviews) > 0) : ?>
        <?php foreach ($reviews as $review) : ?>
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h3 class="card-title"><?php echo escape($review['title']); ?></h3>
                    <p class="cart-text pt-4">著者名: <?php echo escape($review['author']); ?> 読書状況: <?php echo escape($review['status']); ?>  評価: <?php echo escape($review['score']); ?></p>
                    <div><?php echo escape($review['summary']); ?></div>
                </div>
                <div class="d-flex p-2">
                    <form class="m-2" method="post" action="detail.php">
                        <input type="hidden" name="id" value="<?php echo $review['id']; ?>">
                        <button class="btn btn-success">編集する</button>
                    </form>
                    <form class="m-2" method="post" action="delete.php">
                        <input type="hidden" name="id" value="<?php echo $review['id']; ?>">
                        <button class="btn btn-success">削除する</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <p class="p-4">読書ログが登録されていません</p>
    <?php endif ?>
</main>