<?php
require_once '../Login/database.php';
require_once '../Login/auth.php';
$db = new Database();
$conn = $db->getConnection();
$auth = new Auth($conn);
// Proses register ketika form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    // Panggil method register
    if ($auth->register($name, $email, $password)) {
    // Redirect ke halaman login jika berhasil
        header("Location: ../Login/Login.php");
        exit;
    } else {
        $error = "Pendaftaran gagal. Email sudah terdaftar.";
    }
}
?>