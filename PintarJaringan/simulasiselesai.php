<?php
session_start();

if(!isset($_SESSION['simulasi_selesai'])){
    $_SESSION['simulasi_selesai'] = 0;
}

if(!isset($_SESSION['xp'])){
    $_SESSION['xp'] = 0;
}

$_SESSION['simulasi_selesai'] += 1;

$_SESSION['xp'] += 50;

$_SESSION['level'] =
floor($_SESSION['xp'] / 500) + 1;

header("Location: progress.php");
exit;
?>