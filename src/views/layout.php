<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheets/css/app.css">
    <title><?php echo $title ?></title>
</head>

<body>
    <header class="navbar shadow-sm p-3 mb-5 bg-white">
        <h1 class="h2">
            <a class="text-body text-decoration-none" href="index.php">読書ログ</a>
        </h1>
    </header>
    <div class="container">
        <h1 class="h2 text-dark mt-4 mb-4"><?php echo $title ?></h1>
        <?php include $content; ?>
    </div>
</body>

</html>