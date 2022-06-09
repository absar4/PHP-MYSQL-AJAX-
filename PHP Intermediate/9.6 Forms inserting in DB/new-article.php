<?php
// FIRST STEP VIDEO
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     var_dump($_POST);
// }

// =================================================================


// 2nd STEP VIDEO

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {


//     // $sql = "INSERT INTO article (title,content,published_at)
//     //         VALUES ('" . $_POST['title'] . "','"
//     //     . $_POST['content'] . "','"
//     //     . $_POST['published_at'] . "')";

//     var_dump($sql);
//     exit;
// }

// =================================================================

// 3rd STEP VIDEO
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once "database.php";

    $title = mysqli_escape_string($conn, $_POST['title']);
    $content = mysqli_escape_string($conn, $_POST['content']);
    $published_at = mysqli_escape_string($conn, $_POST['published_at']);

    $sql = "INSERT INTO article (title,content,published_at)
            VALUES ('$title','$content','$published_at')";

    $results = mysqli_query($conn, $sql);

    if ($results === false) {
        echo mysqli_errno($conn);
    } else {
        $id = mysqli_insert_id($conn);
        echo $id;
    }
    

}

?>




<?php require_once "header.php"; ?>
<h3>New Article</h3>
<form method="post">
    <!-- title,content,published_at -->
    <input type="text" name="title" placeholder="Enter Title">
    <br><br>
    <textarea name="content" placeholder="Enter Content" cols="30" rows="10"></textarea>
    <br><br>
    <input type="datetime-local" name="published_at">
    <br><br>
    <input type="submit">
</form>
<h3><a href="Dynamic website.php">Go Back</a></h3>
<?php require_once "footer.php"; ?>