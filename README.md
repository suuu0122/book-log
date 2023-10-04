# book-log

## Overview
CRUD機能を備えた読書ログアプリケーションです。
<br />

## Get Start
* 下記コマンドを実行後、[localhost:50080/index.php](http://localhost:50080/index.php)にアクセスしてください。
    ```zsh
    docker-compose build
    docker-compose up -d
    docker-compose exec app php databases/initialize_reviews_table.php 
    ```
