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

$sql = "SELECT * 
        FROM article 
        ORDER BY published_at";

$results = mysqli_query($conn, $sql);



if ($results === false) {
    echo mysqli_error($conn);
} else {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
</head>
<body>
<header>
        <h1>Welcome to My Blog</h1>
    </header>
    <main>
    <?php if (empty($articles)) : ?>
        <h1>No Items Found</h1>
        <?php else : ?>
        <ul>
            <?php foreach ($articles as $article) : ?>
                <li>
                    <h2><a href="9.3.2 single article.php?id=<?=$article['id']?>"><?= $article["title"] ?></a></h2>
                    <p><?= $article["content"] ?></p>
                    <hr>
                </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>

    </main>
</body>
</html>