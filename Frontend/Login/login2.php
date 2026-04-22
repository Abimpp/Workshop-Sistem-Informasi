<?php
require_once "database.php";
require_once "auth.php";

$db = new Database();
$conn = $db->getConnection();
$auth = new Auth($conn);
// Proses login ketika form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    // Panggil method login
    if ($auth->login($email, $password)) {
        // Redirect jika berhasil
        header("Location: ../Admin/Dashboard.php");
        exit;
    } else {
        $error = "Username atau Password salah!";
    }
}
?>