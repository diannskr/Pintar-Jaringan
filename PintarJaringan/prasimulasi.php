<!DOCTYPE html>
<html>
<head>
    <title>Pilih Simulasi</title>
    <link rel="stylesheet" href="css/style.css">

    <style>

        .simulasi-grid{

            display: grid;

            grid-template-columns:
            repeat(auto-fit,minmax(280px,1fr));

            gap: 25px;

        }

        .simulasi-card{

            background: rgba(255,255,255,0.96);

            border-radius: 28px;

            padding: 30px;

            text-decoration: none;

            color: inherit;

            box-shadow:
            0 10px 25px rgba(0,0,0,0.08);

            transition: 0.25s;

            position: relative;

            overflow: hidden;

        }

        .simulasi-card:hover{

            transform: translateY(-6px);

            box-shadow:
            0 18px 35px rgba(99,102,241,0.14);

        }

        .sim-icon{

            width: 90px;
            height: 90px;

            border-radius: 22px;

            display: flex;
            justify-content: center;
            align-items: center;

            font-size: 45px;

            margin-bottom: 25px;

            background:
            linear-gradient(
            135deg,
            #eef2ff,
            #dbeafe);

        }

        .sim-title{

            font-size: 24px;

            font-weight: bold;

            margin-bottom: 12px;

            color: #1e293b;

        }

        .sim-desc{

            font-size: 15px;

            line-height: 1.7;

            color: #64748b;

            margin-bottom: 22px;

        }

        .sim-level{

            display: inline-block;

            padding: 8px 14px;

            border-radius: 14px;

            font-size: 13px;

            font-weight: bold;

            background: #eef2ff;

            color: #4f46e5;

        }

        .sim-arrow{

            position: absolute;

            right: 25px;
            bottom: 25px;

            width: 48px;
            height: 48px;

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

            font-size: 22px;

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
            <b>PILIH SIMULASI</b>
        </span>

    </div>

    <div></div>

</div>

<div class="container">

    <div class="simulasi-grid">

        <!-- ================= SIMULASI 1 ================= -->

        <a href="simulasi.php?sim=1"
        class="simulasi-card">

            <div class="sim-icon">
                🖧
            </div>

            <div class="sim-title">
                Topologi Dasar
            </div>

            <div class="sim-desc">

                Susun jaringan sederhana menggunakan
                Router dan PC sesuai instruksi.

            </div>

            <div class="sim-level">
                Level Mudah
            </div>

            <div class="sim-arrow">
                →
            </div>

        </a>

        <!-- ================= SIMULASI 2 ================= -->

        <a href="simulasi.php?sim=2"
        class="simulasi-card">

            <div class="sim-icon">
                🔀
            </div>

            <div class="sim-title">
                Simulasi Switch
            </div>

            <div class="sim-desc">

                Hubungkan beberapa PC menggunakan
                Switch sebagai pusat jaringan.

            </div>

            <div class="sim-level">
                Level Menengah
            </div>

            <div class="sim-arrow">
                →
            </div>

        </a>

        <!-- ================= SIMULASI 3 ================= -->

        <a href="simulasi.php?sim=3"
        class="simulasi-card">

            <div class="sim-icon">
                🌐
            </div>

            <div class="sim-title">
                Simulasi Internet
            </div>

            <div class="sim-desc">

                Bangun jaringan yang terhubung
                ke server dan internet.

            </div>

            <div class="sim-level">
                Level Sulit
            </div>

            <div class="sim-arrow">
                →
            </div>

        </a>

    </div>

</div>

</body>
</html>