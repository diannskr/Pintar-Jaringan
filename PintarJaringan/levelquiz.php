<?php

$bab = $_GET['bab'];

?>

<!DOCTYPE html>
<html>
<head>

    <title>Level Quiz</title>

    <link rel="stylesheet" href="css/style.css">

    <style>

        .level-container{
            padding: 20px;
        }

        .level-grid{
            display: grid;
            grid-template-columns:
            repeat(auto-fit,minmax(260px,1fr));

            gap: 22px;
            margin-top: 25px;
        }

        .level-card{

            background: white;

            border-radius: 26px;

            padding: 24px;

            text-decoration: none;

            box-shadow:
            0 10px 25px rgba(0,0,0,0.08);

            transition: 0.3s;

        }

        .level-card:hover{
            transform: translateY(-5px);
        }

        .level-icon{
            font-size: 42px;
            margin-bottom: 16px;
        }

        .level-title{
            font-size: 22px;
            font-weight: bold;
            color: #1e293b;
            margin-bottom: 10px;
        }

        .level-desc{
            color: #64748b;
            line-height: 1.7;
            font-size: 14px;
        }

        .level-badge{

            display: inline-block;

            margin-top: 18px;

            background: #eef2ff;

            color: #4f46e5;

            padding: 8px 14px;

            border-radius: 12px;

            font-size: 13px;
            font-weight: bold;

        }

    </style>

</head>

<body>

<div class="topbar">

    <a href="quiz.php" class="back-btn">
        ⬅
    </a>

    <div class="welcome">

        <span class="welcome-text">
            <b>Pilih Level Quiz</b>
        </span>

    </div>

    <div></div>

</div>

<div class="container level-container">

    <div class="level-grid">

        <!-- LEVEL 1 -->
        <a href="soalquiz.php?bab=<?= $bab; ?>&level=1"
        class="level-card">

            <div class="level-icon">
                🟢
            </div>

            <div class="level-title">
                Level 1
            </div>

            <div class="level-desc">

                Level dasar dengan soal mudah
                untuk memahami materi awal.

            </div>

            <div class="level-badge">
                10 Soal
            </div>

        </a>

        <!-- LEVEL 2 -->
        <a href="soalquiz.php?bab=<?= $bab; ?>&level=2"
        class="level-card">

            <div class="level-icon">
                🔥
            </div>

            <div class="level-title">
                Level 2
            </div>

            <div class="level-desc">

                Level lanjutan dengan soal
                yang lebih sulit dan menantang.

            </div>

            <div class="level-badge">
                10 Soal
            </div>

        </a>

    </div>

</div>

</body>
</html>