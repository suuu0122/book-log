<?php

require_once __DIR__ . '/lib/mysqli.php';
require_once __DIR__ . '/lib/escape.php';

function listReviews($link)
{
    $reviews = [];

    $sql = <<<EOT
    SELECT id, title, author, status, score, summary FROM reviews
    EOT;
    $results = mysqli_query($link, $sql);

    if ($results) {
        while ($review = mysqli_fetch_assoc($results)) {
            $reviews[] = $review;
        }
        mysqli_free_result($results);
    }

    return $reviews;
}

$link = dbConnect();
$reviews = listReviews($link);

$title = '読書ログの一覧';
$content = __DIR__ . '/views/index.php';
include __DIR__ . '/views/layout.php';
