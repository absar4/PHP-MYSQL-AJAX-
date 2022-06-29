<?php
require_once "classes/Database.php";
session_start();

$db = new Database();
$conn = $db->getConn();

$sql = "SELECT * 
        FROM article 
        ORDER BY published_at DESC";

// $results = mysqli_query($conn, $sql);
$results = $conn->query($sql);


$articles = $results->fetchAll(PDO::FETCH_ASSOC);
require_once "header.php";
?>


<?php
// var_dump($_SESSION); 
if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']) :
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