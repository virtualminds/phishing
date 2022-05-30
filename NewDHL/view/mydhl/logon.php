<?php

session_start();

if($_SERVER['REQUEST_METHOD'] != "POST") {
    header("HTTP/1.0 403 Forbidden");
    print("Forbidden");
    exit();
}

$_SESSION["em"] = $em = $_POST['person'];
$id = base64_encode($em);

if (empty($em)) {
	header("Location: ./?id=$id");
}
else {
	header("Location: ./track.php?id=$id");
}

?>