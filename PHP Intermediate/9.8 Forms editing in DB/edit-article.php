<?php
require_once "database.php";
require_once "article-func.php";

$conn = getDB();
if (isset($_GET['id'])) {
    $article = getArticle($conn, $_GET['id']);
} else {
    $article = null;
}
var_dump($article);     