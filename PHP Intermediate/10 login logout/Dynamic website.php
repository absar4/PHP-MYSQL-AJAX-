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


<?php
session_start(); 
// var_dump($_SESSION); 
if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']):
?>
<p>You are logged in <a href="logout.php">Logout</a></p>
<?php $link = '<h2><a href="new-article.php">Add a new Article</a></h2>'; ?>
<?php else : ?>
    <p>You are logged out <a href="login.php">Login</a></p>
    <?php $link = ''; ?>
<?php endif; ?>

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
        <?= $link ?>

<?php require_once "footer.php"; ?>