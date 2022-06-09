<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Types in form</title>
</head>

<body>
    <form action="" method="post">
        <input type="date" name="date" id=""><br>
        <input type="email" name="email" id=""><br>
        <input type="color" name="color" id=""><br>
        <input type="tel" name="tel" id=""><br>
        <input type="number" name="number" id=""><br>
        <input type="password" name="password" id=""><br>
        <input type="time" name="time" id=""><br>
        <input type="radio" name="colours" id="" value="red">Red <br>
        <input type="radio" name="colours" id="" value="blue">Blue <br>
        <input type="checkbox" name="subjects[]" id="" value="science"> Science <br>
        <input type="checkbox" name="subjects[]" id="" value="math"> Math <br>
        <select name="cars" id="">
            <option value="BMW">BMW</option>
            <option value="Auto">Auto</option>
            <option value="Ferrari">Ferrari</option>
            <option value="Honda">Honda</option>
        </select><br>
        <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
        <br><br>
        <input type="submit">
    </form>

</body>

</html>