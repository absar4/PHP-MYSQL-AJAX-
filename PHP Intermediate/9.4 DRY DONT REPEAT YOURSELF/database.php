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

?>