    <?php
    session_start();
    include "koneksi.php";

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
        $data = mysqli_fetch_assoc($query);

        if ($data) {
            if (password_verify($password, $data['password'])) {
                $_SESSION['login'] = true;
                $_SESSION['username'] = $data['username'];

                header("Location: ../Admin/Dashboard.php");
                exit;
            } else {
                $error = "Password salah";
            }
        } else {
            $error = "Email tidak ditemukan";
        }
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>Login - SB Admin</title>
            <link href="/WSI/assetsFront/css/styles.css" rel="stylesheet" />
            <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        </head>
        <body class="bg-primary">
            <?php include 'contentlogin.php'; ?>
            <?php include 'footerlogin.php'; ?>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="/WSI/assets/js/scripts.js"></script>
        </body>
    </html>