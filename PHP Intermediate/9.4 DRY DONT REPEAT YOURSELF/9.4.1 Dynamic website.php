<?php
require_once "database.php";
$sql = "SELECT * 
        FROM article 
        ORDER BY published_at";

$results = mysqli_query($conn, $sql);



if ($results === false) {
    echo mysqli_error($conn);
} else {
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
                        <h2><a href="9.4.2 single article.php?id=<?= $article['id'] ?>"><?= $article["title"] ?></a></h2>
                        <p><?= $article["content"] ?></p>
                        <hr>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
<?php require_once "footer.php"; ?>