<?php
session_start();
include 'koneksi.php';

if(isset($_POST['login'])){

    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = $_POST['password'];

    $query = mysqli_query(
        $conn,
        "SELECT * FROM users WHERE email='$email'"
    );

    if(mysqli_num_rows($query) > 0){

        $user = mysqli_fetch_assoc($query);

        if(password_verify($password,$user['password'])){

            $_SESSION['id'] = $user['id'];
            $_SESSION['nama'] = $user['nama'];
            $_SESSION['xp'] = $user['xp'];
            $_SESSION['level'] = $user['level_user'];

            header("Location: dashboard.php");
            exit;

        }else{
            $error = "Password salah!";
        }

    }else{
        $error = "Email tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="login-container">

    <div class="login-card">

        <h2>Pintar Jaringan</h2>
        <p>Media Pembelajaran TKJ</p>

        <?php if(isset($error)){ ?>
            <p style="color:red"><?= $error ?></p>
        <?php } ?>

        <form method="POST">

            <input
                type="email"
                name="email"
                placeholder="Email"
                required
            >

            <input
                type="password"
                name="password"
                placeholder="Password"
                required
            >

            <button class="btn" name="login">
                Login
            </button>

        </form>

        <br>

        <p>
            Belum punya akun?
            <a href="register.php">
                Daftar Sekarang
            </a>
        </p>

    </div>

</div>

</body>
</html>