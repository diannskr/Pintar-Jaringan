<?php
session_start();

/* ========================= */
/* AMBIL SKOR */
/* ========================= */

$skor = isset($_GET['skor']) ? $_GET['skor'] : 0;

$nilai = $skor * 10;

/* ========================= */
/* DEFAULT SESSION */
/* ========================= */

if(!isset($_SESSION['quiz_selesai'])){
    $_SESSION['quiz_selesai'] = 0;
}

if(!isset($_SESSION['xp'])){
    $_SESSION['xp'] = 0;
}

if(!isset($_SESSION['level'])){
    $_SESSION['level'] = 1;
}

/* ========================= */
/* TAMBAH PROGRESS QUIZ */
/* ========================= */

$_SESSION['quiz_selesai'] += 1;

/* ========================= */
/* TAMBAH XP */
/* ========================= */

$_SESSION['xp'] += 50;

/* ========================= */
/* UPDATE LEVEL */
/* ========================= */

$_SESSION['level'] =
floor($_SESSION['xp'] / 500) + 1;

/* ========================= */
/* PESAN BERDASARKAN NILAI */
/* ========================= */

if($nilai >= 80){

    $pesan =
    "Kerja bagus! Pertahankan ya 🚀";

    $emoji = "🏆";

}else if($nilai >= 50){

    $pesan =
    "Lumayan bagus, tetap semangat 👍";

    $emoji = "🔥";

}else{

    $pesan =
    "Jangan menyerah, terus belajar 💪";

    $emoji = "📚";

}

?>

<!DOCTYPE html>
<html>
<head>

    <title>Hasil Quiz</title>

    <link rel="stylesheet" href="css/style.css">

    <style>

        body{

            background:
            linear-gradient(
            135deg,
            #eef2ff,
            #f5f7ff);

            min-height: 100vh;

        }

        .hasil-container{

            padding: 40px 20px;

        }

        .hasil-card{

            background: white;

            border-radius: 35px;

            padding: 45px 35px;

            box-shadow:
            0 15px 35px rgba(0,0,0,0.08);

            text-align: center;

            max-width: 700px;

            margin: auto;

        }

        .hasil-icon{

            font-size: 70px;

            margin-bottom: 15px;

        }

        .hasil-title{

            font-size: 42px;

            font-weight: bold;

            color: #1e293b;

            margin-bottom: 10px;

        }

        .hasil-pesan{

            font-size: 18px;

            color: #64748b;

            line-height: 1.7;

            margin-bottom: 30px;

        }

        .hasil-skor-box{

            background:
            linear-gradient(
            135deg,
            #eef2ff,
            #f5f3ff);

            padding: 30px;

            border-radius: 30px;

            margin-bottom: 30px;

        }

        .hasil-label{

            font-size: 20px;

            color: #64748b;

            margin-bottom: 12px;

        }

        .hasil-skor{

            font-size: 90px;

            font-weight: bold;

            color: #4f46e5;

            line-height: 1;

        }

        .hasil-detail{

            font-size: 20px;

            color: #334155;

            margin-bottom: 35px;

        }

        .btn-group{

            display: flex;

            justify-content: center;

            gap: 15px;

            flex-wrap: wrap;

        }

        .btn-hasil{

            background:
            linear-gradient(
            135deg,
            #6366f1,
            #8b5cf6);

            color: white;

            padding: 15px 28px;

            border-radius: 16px;

            text-decoration: none;

            font-weight: bold;

            transition: 0.3s;

            box-shadow:
            0 10px 20px rgba(99,102,241,0.18);

        }

        .btn-hasil:hover{

            transform:
            translateY(-3px);

        }

        @media(max-width:768px){

            .hasil-card{

                padding: 35px 20px;

            }

            .hasil-title{

                font-size: 32px;

            }

            .hasil-skor{

                font-size: 70px;

            }

        }

    </style>

</head>

<body>

<!-- ================= TOPBAR ================= -->

<div class="topbar">

    <a href="quiz.php"
    class="back-btn">
        ⬅
    </a>

    <div class="welcome">

        <span class="welcome-text">
            <b>HASIL QUIZ</b>
        </span>

    </div>

    <div></div>

</div>

<!-- ================= CONTENT ================= -->

<div class="container hasil-container">

    <div class="hasil-card">

        <div class="hasil-icon">
            <?= $emoji; ?>
        </div>

        <div class="hasil-title">
            Quiz Selesai
        </div>

        <div class="hasil-pesan">
            <?= $pesan; ?>
        </div>

        <div class="hasil-skor-box">

            <div class="hasil-label">
                Nilai Kamu
            </div>

            <div class="hasil-skor">
                <?= $nilai; ?>
            </div>

        </div>

        <div class="hasil-detail">

            ✅ Jawaban Benar :
            <b><?= $skor; ?>/10</b>

            <br><br>

            ⭐ XP Bertambah :
            <b>+50 XP</b>

        </div>

        <div class="btn-group">

            <a href="quiz.php"
            class="btn-hasil">

                🔄 Ulangi Quiz

            </a>

            <a href="progress.php"
            class="btn-hasil">

                📈 Lihat Progress

            </a>

            <a href="dashboard.php"
            class="btn-hasil">

                🏠 Dashboard

            </a>

        </div>

    </div>

</div>

</body>
</html>