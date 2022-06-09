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



// if ($results === false) {
//     echo mysqli_error($conn);
// } else {
//     $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
//     echo "<pre>";
//     var_dump($articles);
//     echo "</pre>";
// }
?>

<?php if ($results === false) :
    echo mysqli_error($conn);
?>

<?php else :
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
?>
    <pre>
<?php var_dump($articles); ?>
    </pre>
<?php endif; ?>
