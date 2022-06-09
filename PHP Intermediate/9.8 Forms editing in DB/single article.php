<?php
require_once "database.php";
require_once "article-func.php";

$conn = getDB();
if (isset($_GET['id'])) {
    $article = getArticle($conn, $_GET['id']);
} else {
    $article = null;
}

require_once "header.php";
?>

<?php if ($article === null) : ?>
    <h3>No Article</h3>
    <a href="Dynamic website.php">GO BACK</a>
<?php else : ?>
    <ul>
        <li>
            <h1><?= $article['title'] ?></h1>
            <p><?= $article['content'] ?></p>
            <a href="Dynamic website.php">GO BACK</a>
        </li>
    </ul>
<?php endif; ?>
<?php require_once "footer.php"; ?>