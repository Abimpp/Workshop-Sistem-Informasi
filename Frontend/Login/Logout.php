<?php
require_once "./Login/login2.php";

$session = new Session();
$session->destroy();
header("Location: login.php");
exit;
?>