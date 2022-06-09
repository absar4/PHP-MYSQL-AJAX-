<?php
// database into funcion
// title and content validation
require_once "database.php";

$errors = [];
$title = '';
$content = '';
$published_at = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = getDB();

    $title = mysqli_escape_string($conn, $_POST['title']);
    $content = mysqli_escape_string($conn, $_POST['content']);
    $published_at = mysqli_escape_string($conn, $_POST['published_at']);

    if ($_POST['title'] == '') {
        $errors[] = "Title is not found please write down title of the article";
    }
    if ($_POST['content'] == '') {
        $errors[] = "Content is not found please write down content of the article";
    }
    if ($_POST['published_at'] == '') {
        $errors[] = "Published date is not found of the article";
    }

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
<?php if (!empty($errors)) : ?>
    <ul>
        <?php foreach ($errors as $error) : ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<form method="post">

    <!-- title,content,published_at -->
    <input type="text" name="title" placeholder="Enter Title" value="<?= htmlspecialchars($title) ?>">
    <br><br>
    <textarea name="content" placeholder="Enter Content" cols="30" rows="10"><?= htmlspecialchars($content) ?></textarea>
    <br><br>
    <input type="datetime-local" name="published_at" value="<?= htmlspecialchars($published_at) ?>">
    <br><br>
    <input type="submit">
</form>
<h3><a href="Dynamic website.php">Go Back</a></h3>
<?php require_once "footer.php"; ?>