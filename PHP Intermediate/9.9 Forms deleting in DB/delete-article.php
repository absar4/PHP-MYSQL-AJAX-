<?php
require_once "database.php";
require_once "article-func.php";

$conn = getDB();
if (isset($_GET['id'])) {
    $article = getArticle($conn, $_GET['id']);
    if ($article) {
        $id = $article['id'];
        $title = $article['title'];
        $content = $article['content'];
        $published_at = $article['published_at'];
    } else {
        die("Article not Found!!!");
    }
} else {
    die("ID not Supplied");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $sql = "DELETE FROM article WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt === false) {
        echo mysqli_error($conn);
    } else {

        mysqli_stmt_bind_param($stmt, "i", $id);

        if (mysqli_stmt_execute($stmt)) {

            // header("Location: $protocol://" . $_SERVER['HTTP_HOST'] . "/article.php?id=$id");
            header("Location:Dynamic website.php?msg=deleted");
            exit;
        } else {
            echo mysqli_stmt_error($stmt);
        }
    }
}
?>
<?php require_once "header.php"; ?>
<p>Are You Sure?</p>
<form method="post">
    <button>Delete</button>
</form>
<a href="single article.php?id=<?=$article['id']?>">Cancel</a>
<?php require_once "footer.php"; ?>