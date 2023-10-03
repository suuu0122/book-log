<?php

require_once __DIR__ . '/lib/mysqli.php';

function createReview($link, $review)
{
    $sql = <<<EOT
    INSERT INTO reviews (
        title,
        author,
        status,
        score,
        summary
    ) VALUES (
        "{$review['title']}",
        "{$review['author']}",
        "{$review['status']}",
        "{$review['score']}",
        "{$review['summary']}"
    )
    EOT;

    $result = mysqli_query($link, $sql);
    if ($result) {
        echo '登録が完了しました' . PHP_EOL;
    } else {
        echo 'Error: 登録に失敗しました' . PHP_EOL;
        echo 'Debugging Error:' . mysqli_error($link) . PHP_EOL;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $review = [
        'title' => $_POST['title'],
        'author' => $_POST['author'],
        'status' => $_POST['status'],
        'score' => $_POST['score'],
        'summary' => $_POST['summary']
    ];

    // ToDo:バリデーション

    $link = dbConnect();

    createReview($link, $review);

    mysqli_close($link);
}
