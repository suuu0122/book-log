<?php

require_once __DIR__ . '/lib/mysqli.php';

function deleteReview($link, $reviewId)
{
    $sql = <<<EOT
    DELETE FROM reviews WHERE id = "{$reviewId}"
    EOT;

    $result = mysqli_query($link, $sql);
    if (!$result) {
        error_log('Error: fail to delete review');
        error_log('Debuuging Error: ' . mysqli_error($link));
    }
}

$reviewId = $_POST['id'];

$link = dbConnect();
deleteReview($link, $reviewId);

header("Location: index.php");
