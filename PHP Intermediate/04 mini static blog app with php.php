<?php
$articles = [
    [
        "title" => "Eating Apple",
        "content" => "Eating Apple is good for health, it keeps you away from doctors"
    ],
    [
        "title" => "Eating Banana",
        "content" => "Eating Banana is good for bones, it keeps your bones strong"
    ]
]



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
        <ul>
            <?php foreach ($articles as $key => $article) : ?>
                <li>
                    <h2><?= $article["title"] ?></h2>
                    <p><?= $article["content"] ?></p>
                    <hr>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>

</html>