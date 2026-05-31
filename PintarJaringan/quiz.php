<!-- ========================= -->
<!-- FILE : quiz.php -->
<!-- ========================= -->

<!DOCTYPE html>
<html>
<head>

    <title>Quiz Pembelajaran</title>

    <link rel="stylesheet" href="css/style.css">

    <style>

        .quiz-container{
            padding: 20px;
        }

        .quiz-title{

            font-size: 30px;
            font-weight: bold;

            color: #1e293b;

            margin-bottom: 10px;

        }

        .quiz-subtitle{

            color: #64748b;

            margin-bottom: 30px;

            line-height: 1.7;

        }

        .mapel-grid{

            display: grid;

            grid-template-columns:
            repeat(auto-fit,minmax(260px,1fr));

            gap: 22px;

        }

        .mapel-card{

            background:
            rgba(255,255,255,0.96);

            border-radius: 28px;

            padding: 24px;

            text-decoration: none;

            box-shadow:
            0 10px 25px rgba(99,102,241,0.08);

            transition: 0.3s ease;

            position: relative;

            overflow: hidden;

        }

        .mapel-card:hover{

            transform: translateY(-5px);

            box-shadow:
            0 18px 35px rgba(99,102,241,0.14);

        }

        .mapel-card::before{

            content: "";

            position: absolute;

            width: 160px;
            height: 160px;

            border-radius: 50%;

            background:
            radial-gradient(circle,
            rgba(99,102,241,0.10),
            transparent 70%);

            top: -70px;
            right: -70px;

        }

        .mapel-icon{

            width: 80px;
            height: 80px;

            border-radius: 22px;

            display: flex;
            justify-content: center;
            align-items: center;

            font-size: 36px;

            margin-bottom: 18px;

            background:
            linear-gradient(
            135deg,
            #eef2ff,
            #f5f3ff);

        }

        .mapel-name{

            font-size: 24px;
            font-weight: 700;

            color: #0f172a;

            margin-bottom: 10px;

        }

        .mapel-desc{

            color: #64748b;

            line-height: 1.7;

            font-size: 14px;

        }

        .start-btn{

            margin-top: 22px;

            width: 50px;
            height: 50px;

            border-radius: 50%;

            display: flex;
            justify-content: center;
            align-items: center;

            background:
            linear-gradient(
            135deg,
            #6366f1,
            #8b5cf6);

            color: white;

            font-size: 20px;

            box-shadow:
            0 8px 18px rgba(99,102,241,0.25);

        }

    </style>

</head>

<body>

<!-- TOPBAR -->
<div class="topbar">

    <a href="dashboard.php" class="back-btn">
        ⬅
    </a>

    <div class="welcome">

        <span class="welcome-text">
            <b>Quiz Pembelajaran</b>
        </span>

    </div>

    <div></div>

</div>

<!-- CONTENT -->
<div class="container quiz-container">

    <div class="quiz-title">
        📘 Pilih Bab Quiz
    </div>

    <div class="quiz-subtitle">

        Pilih bab pembelajaran yang ingin kamu kerjakan.
        Setiap bab memiliki beberapa level quiz.

    </div>

    <div class="mapel-grid">

        <!-- BAB 1 -->
        <a href="levelquiz.php?bab=1"
        class="mapel-card">

            <div class="mapel-icon">
                🌐
            </div>

            <div class="mapel-name">
                Bab 1 - Topologi Jaringan
            </div>

            <div class="mapel-desc">

                Materi tentang topologi bus,
                star, ring, mesh,
                dan tree.

            </div>

            <div class="start-btn">
                →
            </div>

        </a>

        <!-- BAB 2 -->
        <a href="levelquiz.php?bab=2"
        class="mapel-card">

            <div class="mapel-icon">
                🌍
            </div>

            <div class="mapel-name">
                Bab 2 - TCP/IP
            </div>

            <div class="mapel-desc">

                Materi tentang IP Address,
                TCP/IP, subnet,
                dan komunikasi jaringan.

            </div>

            <div class="start-btn">
                →
            </div>

        </a>

        <!-- BAB 3 -->
        <a href="levelquiz.php?bab=3"
        class="mapel-card">

            <div class="mapel-icon">
                🔐
            </div>

            <div class="mapel-name">
                Bab 3 - Keamanan Jaringan
            </div>

            <div class="mapel-desc">

                Materi tentang firewall,
                hacker, malware,
                dan keamanan data.

            </div>

            <div class="start-btn">
                →
            </div>

        </a>

        <!-- BAB 4 -->
        <a href="levelquiz.php?bab=4"
        class="mapel-card">

            <div class="mapel-icon">
                🔌
            </div>

            <div class="mapel-name">
                Bab 4 - Kabel & Konektor
            </div>

            <div class="mapel-desc">

                Materi kabel UTP,
                STP, fiber optik,
                dan RJ45.

            </div>

            <div class="start-btn">
                →
            </div>

        </a>

        <!-- BAB 5 -->
        <a href="levelquiz.php?bab=5"
        class="mapel-card">

            <div class="mapel-icon">
                📡
            </div>

            <div class="mapel-name">
                Bab 5 - Routing Dasar
            </div>

            <div class="mapel-desc">

                Materi tentang router,
                static routing,
                dan dynamic routing.

            </div>

            <div class="start-btn">
                →
            </div>

        </a>

    </div>

</div>

</body>
</html>