<?php
require_once "database.php";
$conn = getDB();
$sql = "SELECT * 
        FROM article 
        ORDER BY published_at DESC";

$results = mysqli_query($conn, $sql);



if ($results === false) {
    echo mysqli_error($conn);
} else {
    $id = mysqli_insert_id($conn);
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
}
require_once "header.php";
?>
        <?php if (empty($articles)) : ?>
            <h1>No Items Found</h1>
        <?php else : ?>
            <ul>
                <?php foreach ($articles as $article) : ?>
                    <li>
                        <h2><a href="single article.php?id=<?= $article['id'] ?>"><?= $article["title"] ?></a></h2>
                        <p><?= $article["content"] ?></p>
                        <hr>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <h2><a href="new-article.php">Add a new Article</a></h2>
<?php require_once "footer.php"; ?>