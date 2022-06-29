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

    <input type="datetime-local" name="published_at" value="<?= htmlspecialchars(str_replace(" ", "T", "$published_at")) ?>">

    <br><br>
    <input type="submit">
</form>
<h3><a href="Dynamic website.php">Go Back</a></h3>
<!-- 2022-06-05T16:19:40 -->
<!-- 2022-06-05 16:19:40 -->