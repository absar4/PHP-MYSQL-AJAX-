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

    $id = $article['id'];
    $title = mysqli_escape_string($conn, $_POST['title']);
    $content = mysqli_escape_string($conn, $_POST['content']);
    $published_at = mysqli_escape_string($conn, $_POST['published_at']);

    $errors = validateArticle($title, $content, $published_at);

    if (empty($errors)) {
        $sql = "UPDATE article SET title = '$title', content = '$content', published_at = '$published_at' WHERE id = $id";
        $results = mysqli_query($conn, $sql);

        if ($results === false) {
            echo mysqli_errno($conn);
        } else {
            $id = mysqli_insert_id($conn);
            // echo $id;
            header("Location:Dynamic website.php?msg=updated");
        }

        // ==============================================================================================
        // $sql = "UPDATE article SET title = ?, content = ?, published_at = ? WHERE id = ?";
        // $stmt = mysqli_prepare($conn, $sql);

        // if ($stmt === false) {
        //     echo mysqli_error($conn);
        // } else {
        //     if ($published_at == '') {
        //         $published_at = null;
        //     }

        //     mysqli_stmt_bind_param($stmt, "sssi", $title, $content, $published_at, $id);

        //     if (mysqli_stmt_execute($stmt)) {

        //         if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
        //             $protocol = 'https';
        //         } else {
        //             $protocol = 'http';
        //         }
        //         // header("Location: $protocol://" . $_SERVER['HTTP_HOST'] . "/article.php?id=$id");
        //         header("Location:Dynamic website.php?msg=updated");
        //         exit;
        //     } else {
        //         echo mysqli_stmt_error($stmt);
        //     }
        // }
    }
}

?>
<?php require_once "header.php"; ?>
<h3>Edit Article</h3>
<?php require_once "article-form.php"; ?>
<?php require_once "footer.php"; ?>