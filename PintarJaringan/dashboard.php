<?php
session_start();

if(!isset($_SESSION['nama'])){
    header("Location: login.php");
    exit;
}

/* ========================= */
/* DEFAULT SESSION */
/* ========================= */

if(!isset($_SESSION['xp'])){
    $_SESSION['xp'] = 0;
}

if(!isset($_SESSION['level'])){
    $_SESSION['level'] = 1;
}

/* ========================= */
/* HITUNG LEVEL */
/* ========================= */

$_SESSION['level'] =
floor($_SESSION['xp'] / 500) + 1;

$xp = $_SESSION['xp'];
$level = $_SESSION['level'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">

    <style>

.progress-mini{

    background:
    linear-gradient(
    135deg,
    #6366f1,
    #8b5cf6);

    color: white;

    padding: 12px 15px;

    border-radius: 16px;

    min-width: 140px;

    text-align: center;

    box-shadow:
    0 8px 18px rgba(99,102,241,0.22);

}

.progress-mini .lvl{

    font-size: 17px;
    font-weight: bold;

    margin-bottom: 3px;

}

.progress-mini .xp{

    font-size: 12px;

    margin-bottom: 8px;

}

.mini-bar{

    width: 100%;
    height: 7px;

    background:
    rgba(255,255,255,0.25);

    border-radius: 20px;

    overflow: hidden;

}

.mini-fill{

    height: 100%;

    background: white;

    border-radius: 20px;

    width:
    <?= ($xp % 500) / 5; ?>%;
}

    </style>

</head>

<body>

<div class="container">

    <!-- TOPBAR -->
    <div class="topbar">

        <div class="menu-icon">
            ☰
        </div>

        <div class="welcome">

            <div class="welcome-text">
                Selamat Datang
            </div>

            <div class="welcome-name">
                <?= $_SESSION['nama']; ?> 👋
            </div>

        </div>

        <!-- ================= LEVEL & XP ================= -->

        <div class="progress-mini">

            <div class="lvl">
                Level <?= $level; ?>
            </div>

            <div class="xp">
                XP <?= $xp; ?>/500
            </div>

            <div class="mini-bar">
                <div class="mini-fill"></div>
            </div>

        </div>

    </div>

    <!-- GRID MENU -->
    <div class="grid">

        <!-- MATERI -->
        <a href="materi.php" class="menu-box">

            <div class="menu-icon-box">
                <i>📚</i>
            </div>

            <div class="menu-content">

                <div class="menu-title">
                    Materi
                </div>

                <div class="menu-desc">
                    Pelajari materi jaringan komputer secara lengkap
                </div>

            </div>

            <div class="menu-btn">
                →
            </div>

        </a>

        <!-- QUIZ -->
        <a href="quiz.php" class="menu-box">

            <div class="menu-icon-box">
                <i>📝</i>
            </div>

            <div class="menu-content">

                <div class="menu-title">
                    Quiz
                </div>

                <div class="menu-desc">
                    Uji pemahamanmu dengan berbagai soal menarik
                </div>

            </div>

            <div class="menu-btn">
                →
            </div>

        </a>

        <!-- SIMULASI -->
        <a href="prasimulasi.php" class="menu-box">

            <div class="menu-icon-box">
                <i>🖥️</i>
            </div>

            <div class="menu-content">

                <div class="menu-title">
                    Simulasi
                </div>

                <div class="menu-desc">
                    Latihan praktik membangun jaringan secara interaktif
                </div>

            </div>

            <div class="menu-btn">
                →
            </div>

        </a>

        <!-- PROGRESS -->
        <a href="progress.php" class="menu-box">

            <div class="menu-icon-box">
                <i>📊</i>
            </div>

            <div class="menu-content">

                <div class="menu-title">
                    Progress
                </div>

                <div class="menu-desc">
                    Lihat perkembangan belajarmu secara detail
                </div>

            </div>

            <div class="menu-btn">
                →
            </div>

        </a>

        <!-- PROFIL -->
        <a href="profil.php" class="menu-box profil-box">

            <div class="menu-icon-box">
                <i>👤</i>
            </div>

            <div class="menu-content">

                <div class="menu-title">
                    Profil
                </div>

                <div class="menu-desc">
                    Kelola informasi profil dan pengaturan akunmu
                </div>

            </div>

            <div class="menu-btn">
                →
            </div>

        </a>

    </div>

</div>

</body>
</html>