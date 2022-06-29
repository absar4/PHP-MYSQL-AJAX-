<?php
require_once "classes/Database.php";
require_once "article-func.php";

$db = new Database();
$conn = $db->getConn();

if (isset($_GET['id'])) {
    $article = getArticle($conn, $_GET['id']);
} else {
    $article = null;
}

require_once "header.php";
?>

<?php if ($article) : ?>
    <ul>
        <li>
            <h1><?= $article['title'] ?></h1>
            <p><?= $article['content'] ?></p>
            <a href="edit-article.php?id=<?= $article['id'] ?>">Edit</a>
            <a href="delete-article.php?id=<?= $article['id'] ?>">Delete</a>
            <br><br>
            <a href="Dynamic website.php">GO BACK</a>
        </li>
    </ul>

<?php else : ?>
    <h3>No Article</h3>
    <a href="Dynamic website.php">GO BACK</a>
<?php endif; ?>
<?php require_once "footer.php"; ?>