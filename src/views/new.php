<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheets/css/app.css">
    <title>読書ログの登録</title>
</head>

<body>
    <header class="navbar shadow-sm p-3 mb-5 bg-white">
        <h1 class="h2">
            <a class="text-body text-decoration-none" href="index.php">読書ログ</a>
        </h1>
    </header>
    <div class="container">
        <h1 class="h2 text-dark mt-4 mb-4">読書ログの登録</h1>
        <form action="create.php" method="post">
            <?php if (count($errors)) : ?>
                <ul class="text-danger">
                    <?php foreach ($errors as $error) : ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            
            <div class="form-group">
                <label for="title">書籍名</label>
                <input type="text" name="title" id="title" class="form-control" value="<?php echo $review['title'] ?>">
            </div>
            <div class="form-group">
                <label for="author">著者名</label>
                <input type="text" name="author" id="author" class="form-control" value="<?php echo $review['author'] ?>">
            </div>
            <div class="form-group">
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
            <div class="form-group">
                <label for="score">評価（5点満点の整数）</label>
                <input type="number" name="score" id="score" class="form-control" value="<?php echo $review['score'] ?>">
            </div>
            <div class="form-group">
                <label for="summary">感想</label>
                <textarea type="text" name="summary" id="summary" class="form-control" rows="10" placeholder="<?php echo $review['summary'] ?>"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">登録する</button>
        </form>
    </div>
</body>

</html>