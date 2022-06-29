<?php
// database into funcion
// title and content validation
require_once "database.php";
require_once "article-func.php";

$errors = [];
$title = '';
$content = '';
$published_at = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = getDB();

    $title = mysqli_escape_string($conn, $_POST['title']);
    $content = mysqli_escape_string($conn, $_POST['content']);
    $published_at = mysqli_escape_string($conn, $_POST['published_at']);

    $errors = validateArticle($title, $content, $published_at);

    if (empty($errors)) {


        $sql = "INSERT INTO article (title,content,published_at)
                VALUES ('$title','$content','$published_at')";

        $results = mysqli_query($conn, $sql);

        if ($results === false) {
            echo mysqli_errno($conn);
        } else {
            $id = mysqli_insert_id($conn);
            echo $id;

            $title = '';
            $content = '';
            $published_at = '';
        }
    }
}

?>

<?php require_once "header.php"; ?>
<h3>New Article</h3>
<?php require_once "article-form.php"; ?>
<?php require_once "footer.php"; ?>