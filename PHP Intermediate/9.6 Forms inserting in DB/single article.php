<?php
require_once "database.php";
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $sql = "SELECT * FROM article WHERE id = " . $_GET['id'];
    $results = mysqli_query($conn, $sql);

    if ($results === false) {
        echo mysqli_errno($conn);
    } else {
        $article = mysqli_fetch_assoc($results);
    }
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