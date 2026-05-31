<?php
include 'koneksi.php';

if(isset($_POST['register'])){

    $nama = mysqli_real_escape_string($conn,$_POST['nama']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = password_hash(
        $_POST['password'],
        PASSWORD_DEFAULT
    );

    $cek = mysqli_query(
        $conn,
        "SELECT * FROM users WHERE email='$email'"
    );

    if(mysqli_num_rows($cek) > 0){

        $error = "Email sudah digunakan!";

    }else{

        mysqli_query(
            $conn,
            "INSERT INTO users(
                nama,
                email,
                password,
                xp,
                level_user
            ) VALUES(
                '$nama',
                '$email',
                '$password',
                0,
                1
            )"
        );

        header("Location: login.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Akun</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="login-container">

    <div class="login-card">

        <h2>Buat Akun</h2>

        <?php if(isset($error)){ ?>
            <p style="color:red"><?= $error ?></p>
        <?php } ?>

        <form method="POST">

            <input
                type="text"
                name="nama"
                placeholder="Nama Lengkap"
                required
            >

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
                minlength="3"
                required
            >

            <button class="btn" name="register">
                Daftar
            </button>

        </form>

        <br>

        <p>
            Sudah punya akun?
            <a href="login.php">
                Login
            </a>
        </p>

    </div>

</div>

</body>
</html>