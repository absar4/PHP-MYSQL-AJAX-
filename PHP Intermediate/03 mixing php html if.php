<?php
$hour = 12;
$num = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mixing PHP HTML</title>
</head>

<body>

    <?php if ($hour < 12) : ?>
        Good Morning
    <?php elseif ($hour < 18) : ?>
        Good Afternoon
    <?php elseif ($hour < 22) : ?>
        Good Evening
    <?php else : ?>
        Good Night
    <?php endif; ?>

    <br>
    <!-- Let's Print 1 to 10  -->

    <?php while ($num <= 10) : ?>
        <h1 style="display: inline;"><?= $num; ?></h1>
    <?php
        $num++;
    endwhile;
    ?>
</body>

</html>