<?php

require_once __DIR__ . '/lib/mysqli.php';

function readReview($link, $reviewId)
{
    $review = [
        'id' => $reviewId,
    ];

    $sql = <<<EOT
    SELECT title, author, status, score, summary FROM reviews WHERE id = "{$reviewId}"
    EOT;

    $result = mysqli_query($link, $sql);
    if ($result) {
        $selectedReview = mysqli_fetch_assoc($result);
        foreach ($selectedReview as $key => $value) {
            $review[$key] = $value;
        }
        mysqli_free_result($result);
    }

    return $review;
}

$reviewId = $_POST['id'];
$link = dbConnect();

$review = readReview($link, $reviewId);
$errors = [];

$title = '読書ログの編集';
$content = __DIR__ . '/views/detail.php';
include __DIR__ . '/views/layout.php';
