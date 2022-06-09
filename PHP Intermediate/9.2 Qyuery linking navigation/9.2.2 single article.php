<?php
$db_host = "localhost";
$db_name = "cms";
$db_user = "ali23";
$db_password = "R4y2Je4Hi*fWMWSN";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}

$sql = "SELECT * FROM article WHERE id = " . $_GET['id'];
$results = mysqli_query($conn, $sql);

if ($results === false) {
    echo mysqli_errno($conn);
} else {
    $article = mysqli_fetch_assoc($results);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog - Single Article</title>
</head>
<body>
    <header>
        <h1> My Blog </h1>
    </header>
    <?php if($article === null): ?>
        <h3>No Article</h3>
    <?php else: ?>
    <ul>
        <li>
            <h1><?= $article['title'] ?></h1>
            <p><?= $article['content'] ?></p>
        </li>
    </ul>
    <?php endif; ?>
</body>
</html>