<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['username'] == "ali" && $_POST['password'] == "love") {
        session_regenerate_id(true); 
        $_SESSION['is_logged_in'] = true; 
        header("Location:Dynamic website.php?msg=Logged In");
    } else {
       $err = "login incorrect";
    }
}

require_once "header.php";
?>
<h3>Login</h3>
<?php
if (! empty($err)) {
    echo $err;
}
?>

<form method="post" autocomplete="off">

<div>
    <label for="username"></label>
    <input type="text" id="username" name="username">
</div>

<div>
    <label for="pass"></label>
    <input type="password" id="pass" name="password">
</div>
<button>Submit</button>
</form>

<?php require_once "footer.php";?>