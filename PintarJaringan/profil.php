<?php
session_start();

/* ========================= */
/* DEFAULT DATA */
/* ========================= */

if(!isset($_SESSION['xp'])){
    $_SESSION['xp'] = 0;
}

if(!isset($_SESSION['materi_selesai'])){
    $_SESSION['materi_selesai'] = 0;
}

if(!isset($_SESSION['quiz_selesai'])){
    $_SESSION['quiz_selesai'] = 0;
}

if(!isset($_SESSION['simulasi_selesai'])){
    $_SESSION['simulasi_selesai'] = 0;
}

if(!isset($_SESSION['foto'])){
    $_SESSION['foto'] = "";
}

$level = floor($_SESSION['xp'] / 500) + 1;

/* ========================= */
/* SIMPAN PERUBAHAN PROFIL */
/* ========================= */

if(isset($_POST['simpan'])){

    /* ========================= */
    /* GANTI NAMA */
    /* ========================= */

    if($_POST['nama'] != ""){
        $_SESSION['nama'] =
        $_POST['nama'];
    }

    /* ========================= */
    /* UPLOAD FOTO */
    /* ========================= */

    if(isset($_FILES['foto'])){

        $namaFile =
        $_FILES['foto']['name'];

        $tmp =
        $_FILES['foto']['tmp_name'];

        if($namaFile != ""){

            $folder = "upload/";

            if(!is_dir($folder)){
                mkdir($folder);
            }

            $path =
            $folder .
            time() .
            "_" .
            $namaFile;

            move_uploaded_file(
                $tmp,
                $path
            );

            $_SESSION['foto'] = $path;

        }

    }

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>

    <link rel="stylesheet"
    href="css/style.css">

    <style>

        .profil-wrapper{

            max-width: 950px;

            margin: auto;

        }

        /* ================= CARD ================= */

        .profil-card{

            background:
            rgba(255,255,255,0.96);

            border-radius: 24px;

            padding: 25px;

            box-shadow:
            0 10px 25px rgba(0,0,0,0.08);

            margin-bottom: 20px;

        }

        /* ================= HEADER ================= */

        .profil-header{

            display: flex;

            align-items: center;

            gap: 20px;

            flex-wrap: wrap;

        }

        /* ================= FOTO ================= */

        .foto-profil{

            width: 95px;
            height: 95px;

            border-radius: 50%;

            overflow: hidden;

            background:
            linear-gradient(
            135deg,
            #6366f1,
            #8b5cf6);

            display: flex;

            justify-content: center;
            align-items: center;

            font-size: 42px;

            color: white;

            font-weight: bold;

            box-shadow:
            0 8px 20px rgba(99,102,241,0.25);

        }

        .foto-profil img{

            width: 100%;
            height: 100%;

            object-fit: cover;

        }

        /* ================= INFO ================= */

        .profil-info h2{

            margin: 0;

            font-size: 24px;

            color: #1e293b;

        }

        .profil-info p{

            margin: 6px 0;

            color: #64748b;

            font-size: 14px;

        }

        /* ================= BUTTON ================= */

        .ubah-btn{

            margin-top: 12px;

            padding: 10px 18px;

            border: none;

            border-radius: 14px;

            background:
            linear-gradient(
            135deg,
            #6366f1,
            #8b5cf6);

            color: white;

            font-weight: bold;

            cursor: pointer;

            font-size: 14px;

        }

        /* ================= FORM ================= */

        .form-box{

            margin-top: 20px;

            display: none;

        }

        .form-box input{

            width: 100%;

            padding: 12px;

            margin-bottom: 12px;

            border-radius: 12px;

            border: 1px solid #dbeafe;

            outline: none;

            font-size: 14px;

            box-sizing: border-box;

        }

        .save-btn{

            width: 100%;

            padding: 12px;

            border: none;

            border-radius: 14px;

            background:
            linear-gradient(
            135deg,
            #10b981,
            #059669);

            color: white;

            font-weight: bold;

            cursor: pointer;

            font-size: 14px;

        }

        /* ================= STATISTIK ================= */

        .stat-grid{

            display: grid;

            grid-template-columns:
            repeat(auto-fit,minmax(160px,1fr));

            gap: 15px;

            margin-top: 10px;

        }

        .stat-box{

            background: #f8fbff;

            border-radius: 18px;

            padding: 18px;

            text-align: center;

        }

        .stat-number{

            font-size: 28px;

            font-weight: bold;

            color: #4f46e5;

        }

        .stat-text{

            margin-top: 6px;

            font-size: 13px;

            color: #64748b;

        }

        /* ================= MENU ================= */

        .menu-grid{

            display: grid;

            grid-template-columns:
            repeat(auto-fit,minmax(180px,1fr));

            gap: 15px;

        }

        .menu-card{

            background:
            rgba(255,255,255,0.96);

            border-radius: 20px;

            padding: 20px;

            text-align: center;

            text-decoration: none;

            color: #1e293b;

            font-weight: bold;

            box-shadow:
            0 10px 20px rgba(0,0,0,0.08);

            transition: 0.2s;

        }

        .menu-card:hover{

            transform: translateY(-4px);

        }

        .menu-icon{

            font-size: 32px;

            margin-bottom: 10px;

        }

        /* ================= RESPONSIVE ================= */

        @media(max-width:768px){

            .profil-header{

                flex-direction: column;

                text-align: center;

            }

        }

    </style>

</head>

<body>

<!-- ================= TOPBAR ================= -->

<div class="topbar">

    <a href="dashboard.php"
    class="back-btn">
        ⬅
    </a>

    <div class="welcome">

        <span class="welcome-text">
            <b>PROFIL</b>
        </span>

    </div>

    <div></div>

</div>

<!-- ================= CONTENT ================= -->

<div class="container">

<div class="profil-wrapper">

    <!-- ================= PROFIL ================= -->

    <div class="profil-card">

        <div class="profil-header">

            <!-- FOTO -->
            <div class="foto-profil">

                <?php
                if($_SESSION['foto'] != ""){
                ?>

                    <img src="<?= $_SESSION['foto']; ?>">

                <?php
                }else{
                ?>

                    👤

                <?php
                }
                ?>

            </div>

            <!-- INFO -->
            <div class="profil-info">

                <h2>
                    <?= $_SESSION['nama']; ?>
                </h2>

                <p>
                    Kelas :
                    XII TKJ
                </p>

                <p>
                    Jurusan :
                    Teknik Komputer & Jaringan
                </p>

                <p>
                    XP :
                    <?= $_SESSION['xp']; ?>
                    |
                    Level :
                    <?= $level; ?>
                </p>

                <button class="ubah-btn"
                onclick="toggleForm()">

                    ✏️ Ubah Profil

                </button>

            </div>

        </div>

        <!-- ================= FORM ================= -->

        <form method="POST"
        enctype="multipart/form-data"
        class="form-box"
        id="formProfil">

            <input type="text"
            name="nama"
            placeholder="Nama Baru">

            <input type="file"
            name="foto">

            <button type="submit"
            name="simpan"
            class="save-btn">

                💾 Simpan Perubahan

            </button>

        </form>

    </div>

    <!-- ================= STATISTIK ================= -->

    <div class="profil-card">

        <h3 style="
        margin-top:0;
        color:#1e293b;
        ">

            📊 Statistik Belajar

        </h3>

        <div class="stat-grid">

            <div class="stat-box">

                <div class="stat-number">
                    <?= $_SESSION['materi_selesai']; ?>
                </div>

                <div class="stat-text">
                    Materi Dibaca
                </div>

            </div>

            <div class="stat-box">

                <div class="stat-number">
                    <?= $_SESSION['quiz_selesai']; ?>
                </div>

                <div class="stat-text">
                    Quiz Selesai
                </div>

            </div>

            <div class="stat-box">

                <div class="stat-number">
                    <?= $_SESSION['simulasi_selesai']; ?>
                </div>

                <div class="stat-text">
                    Simulasi
                </div>

            </div>

            <div class="stat-box">

                <div class="stat-number">
                    <?= $_SESSION['xp']; ?>
                </div>

                <div class="stat-text">
                    Total XP
                </div>

            </div>

        </div>

    </div>

    <!-- ================= MENU ================= -->

    <div class="menu-grid">

        <a href="progress.php"
        class="menu-card">

            <div class="menu-icon">
                📈
            </div>

            Progress

        </a>

        <a href="logout.php"
        class="menu-card">

            <div class="menu-icon">
                🚪
            </div>

            Logout

        </a>

    </div>

</div>

</div>

<script>

function toggleForm(){

    let form =
    document.getElementById(
    "formProfil"
    );

    if(form.style.display == "block"){

        form.style.display = "none";

    }else{

        form.style.display = "block";

    }

}

</script>

</body>
</html>