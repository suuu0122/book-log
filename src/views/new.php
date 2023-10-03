<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <title>読書ログ登録</title>
</head>

<body>
    <h1>読書ログの登録</h1>
    <form action="create.php" method="post">
        <?php if (count($errors)) : ?>
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <div>
            <label for="title">書籍名</label>
            <input type="text" name="title" id="title" value="<?php echo $review['title'] ?>">
        </div>
        <div>
            <label for="author">著者名</label>
            <input type="text" name="author" id="author" value="<?php echo $review['author'] ?>">
        </div>
        <div>
            <label for="status">読書状況</label>
            <div>
                <div>
                    <input type="radio" name="status" id="unread" value="未読"
                    <?php echo ($review['status'] === '未読') ? 'checked' : '' ?>>
                    <label for="unread">未読</label>
                </div>
                <div>
                    <input type="radio" name="status" id="current" value="読書中"
                    <?php echo ($review['status'] === '読書中') ? 'checked' : '' ?>>
                    <label for="current">読書中</label>
                </div>
                <div>
                    <input type="radio" name="status" id="complete" value="読了"
                    <?php echo ($review['status'] === '読了') ? 'checked' : '' ?>>
                    <label for="complete">読了</label>
                </div>
            </div>
        </div>
        <div>
            <label for="score">評価（5点満点の整数）</label>
            <input type="number" name="score" id="score" value="<?php echo $review['score'] ?>">
        </div>
        <div>
            <label for="summary">感想</label>
            <textarea type="text" name="summary" id="summary" rows="10" placeholder="<?php echo $review['summary'] ?>"></textarea>
        </div>
        <button type="submit">登録する</button>
    </form>
</body>

</html>