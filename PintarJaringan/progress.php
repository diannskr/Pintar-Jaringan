<?php
session_start();

/* ========================= */
/* DEFAULT SESSION */
/* ========================= */

if(!isset($_SESSION['xp'])){
    $_SESSION['xp'] = 0;
}

if(!isset($_SESSION['level'])){
    $_SESSION['level'] = 1;
}

if(!isset($_SESSION['quiz_selesai'])){
    $_SESSION['quiz_selesai'] = 0;
}

if(!isset($_SESSION['simulasi_selesai'])){
    $_SESSION['simulasi_selesai'] = 0;
}

if(!isset($_SESSION['materi_selesai'])){
    $_SESSION['materi_selesai'] = 0;
}

/* ========================= */
/* HITUNG LEVEL */
/* ========================= */

$_SESSION['level'] =
floor($_SESSION['xp'] / 500) + 1;

$xp = $_SESSION['xp'];

$level = $_SESSION['level'];

$quiz =
$_SESSION['quiz_selesai'];

$simulasi =
$_SESSION['simulasi_selesai'];

$materi =
$_SESSION['materi_selesai'];

/* ========================= */
/* PERSEN PROGRESS */
/* ========================= */

$quizProgress =
min($quiz * 10, 100);

$simulasiProgress =
min($simulasi * 20, 100);

$materiProgress =
min($materi * 10, 100);

/* ========================= */
/* XP BAR */
/* ========================= */

$xpProgress =
($xp % 500) / 500 * 100;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Progress Belajar</title>

    <link rel="stylesheet"
    href="css/style.css">

    <style>

        .progress-wrapper{

            display: grid;

            grid-template-columns:
            repeat(auto-fit,minmax(320px,1fr));

            gap: 25px;

        }

        .progress-card-modern{

            background:
            rgba(255,255,255,0.97);

            border-radius: 30px;

            padding: 28px;

            box-shadow:
            0 10px 30px rgba(0,0,0,0.08);

        }

        .progress-title{

            font-size: 24px;

            font-weight: bold;

            color: #1e293b;

            margin-bottom: 25px;

        }

        /* ================= LEVEL ================= */

        .level-center{

            text-align: center;

        }

        .level-circle{

            width: 140px;
            height: 140px;

            border-radius: 50%;

            margin: auto;

            display: flex;

            justify-content: center;
            align-items: center;

            background:
            linear-gradient(
            135deg,
            #6366f1,
            #8b5cf6);

            color: white;

            font-size: 42px;

            font-weight: bold;

            box-shadow:
            0 12px 25px rgba(99,102,241,0.25);

        }

        .xp-text{

            margin-top: 20px;

            font-size: 18px;

            color: #64748b;

        }

        .xp-bar{

            width: 100%;

            height: 16px;

            background: #e2e8f0;

            border-radius: 20px;

            overflow: hidden;

            margin-top: 18px;

        }

        .xp-fill{

            height: 100%;

            border-radius: 20px;

            background:
            linear-gradient(
            135deg,
            #6366f1,
            #8b5cf6);

        }

        /* ================= BADGE ================= */

        .badge-list{

            display: flex;

            flex-wrap: wrap;

            gap: 14px;

        }

        .badge-item{

            background: #eef2ff;

            color: #4f46e5;

            padding: 14px 18px;

            border-radius: 18px;

            font-weight: bold;

            font-size: 14px;

        }

        /* ================= PROGRESS ================= */

        .progress-item{

            margin-bottom: 25px;

        }

        .progress-label{

            display: flex;

            justify-content: space-between;

            margin-bottom: 10px;

            font-weight: bold;

            color: #334155;

        }

        .progress-bar{

            width: 100%;

            height: 15px;

            background: #e2e8f0;

            border-radius: 20px;

            overflow: hidden;

        }

        .progress-fill{

            height: 100%;

            border-radius: 20px;

            background:
            linear-gradient(
            135deg,
            #22c55e,
            #16a34a);

        }

        /* ================= STAT ================= */

        .stat-grid{

            display: grid;

            grid-template-columns:
            repeat(2,1fr);

            gap: 15px;

        }

        .stat-box{

            background: #f8fbff;

            border-radius: 22px;

            padding: 22px;

            text-align: center;

        }

        .stat-number{

            font-size: 34px;

            font-weight: bold;

            color: #4f46e5;

        }

        .stat-text{

            margin-top: 6px;

            font-size: 14px;

            color: #64748b;

        }

        /* ================= RESPONSIVE ================= */

        @media(max-width:768px){

            .progress-wrapper{

                grid-template-columns: 1fr;

            }

            .level-circle{

                width: 120px;
                height: 120px;

                font-size: 36px;

            }

        }

    </style>

</head>

<body>

<!-- ================= TOPBAR ================= -->

<div class="topbar">

    <a href="dashboard.php"
    class="back-btn">⬅</a>

    <div class="welcome">

        <span class="welcome-text">
            <b>PROGRESS BELAJAR</b>
        </span>

    </div>

    <div></div>

</div>

<!-- ================= CONTENT ================= -->

<div class="container">

<div class="progress-wrapper">

    <!-- ================= LEVEL ================= -->

    <div class="progress-card-modern">

        <div class="progress-title">
            🎖️ Level Belajar
        </div>

        <div class="level-center">

            <div class="level-circle">
                Lv <?= $level; ?>
            </div>

            <div class="xp-text">

                XP :
                <b><?= $xp; ?></b>/500

            </div>

            <div class="xp-bar">

                <div class="xp-fill"
                style="
                width:
                <?= $xpProgress; ?>%;
                ">
                </div>

            </div>

        </div>

    </div>

    <!-- ================= BADGE ================= -->

    <div class="progress-card-modern">

        <div class="progress-title">
            🏅 Badge
        </div>

        <div class="badge-list">

            <div class="badge-item">
                🎯 Aktif Belajar
            </div>

            <div class="badge-item">
                📘 Rajin Quiz
            </div>

            <div class="badge-item">
                🧠 Pemula TKJ
            </div>

            <div class="badge-item">
                🚀 Semangat
            </div>

            <div class="badge-item">
                💻 Ahli Simulasi
            </div>

        </div>

    </div>

    <!-- ================= PROGRESS ================= -->

    <div class="progress-card-modern">

        <div class="progress-title">
            📈 Progress Aktivitas
        </div>

        <!-- QUIZ -->

        <div class="progress-item">

            <div class="progress-label">

                <span>📝 Quiz</span>

                <span>
                    <?= $quizProgress; ?>%
                </span>

            </div>

            <div class="progress-bar">

                <div class="progress-fill"
                style="
                width:
                <?= $quizProgress; ?>%;
                ">
                </div>

            </div>

        </div>

        <!-- SIMULASI -->

        <div class="progress-item">

            <div class="progress-label">

                <span>🖥️ Simulasi</span>

                <span>
                    <?= $simulasiProgress; ?>%
                </span>

            </div>

            <div class="progress-bar">

                <div class="progress-fill"
                style="
                width:
                <?= $simulasiProgress; ?>%;
                ">
                </div>

            </div>

        </div>

        <!-- MATERI -->

        <div class="progress-item">

            <div class="progress-label">

                <span>📘 Materi</span>

                <span>
                    <?= $materiProgress; ?>%
                </span>

            </div>

            <div class="progress-bar">

                <div class="progress-fill"
                style="
                width:
                <?= $materiProgress; ?>%;
                ">
                </div>

            </div>

        </div>

    </div>

    <!-- ================= STATISTIK ================= -->

    <div class="progress-card-modern">

        <div class="progress-title">
            📊 Statistik Belajar
        </div>

        <div class="stat-grid">

            <div class="stat-box">

                <div class="stat-number">
                    <?= $quiz; ?>
                </div>

                <div class="stat-text">
                    Quiz Selesai
                </div>

            </div>

            <div class="stat-box">

                <div class="stat-number">
                    <?= $simulasi; ?>
                </div>

                <div class="stat-text">
                    Simulasi
                </div>

            </div>

            <div class="stat-box">

                <div class="stat-number">
                    <?= $materi; ?>
                </div>

                <div class="stat-text">
                    Materi Dibaca
                </div>

            </div>

            <div class="stat-box">

                <div class="stat-number">
                    <?= $xp; ?>
                </div>

                <div class="stat-text">
                    Total XP
                </div>

            </div>

        </div>

    </div>

</div>

</div>

</body>
</html>