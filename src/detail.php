<?php

$review = [
    'id' => $_POST['id'],
    'title' => '',
    'author' => '',
    'status' => '未読',
    'score' => '',
    'summary' => ''
];

$errors = [];

$title = '読書ログの編集';
$content = __DIR__ . '/views/detail.php';
include __DIR__ . '/views/layout.php';
