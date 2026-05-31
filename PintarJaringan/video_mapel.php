<?php

$mapel = $_GET['mapel'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Video</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="topbar">

    <a href="video.php" class="back-btn">⬅</a>

    <div class="welcome">

        <span class="welcome-text">
            <b>Daftar Video</b>
        </span>

    </div>

    <div></div>

</div>

<div class="container">

    <div class="materi-grid">

<?php

/* ========================= */
/* TOPOLOGI JARINGAN */
/* ========================= */

if($mapel == "topologi"){

?>

        <!-- TOPOLOGI BUS -->
        <a href="tonton_video.php?video=https://www.youtube.com/embed/_tCYZIkA8tc"
        class="materi-box">

            <div class="materi-title">
                📘 Topologi Bus
            </div>

            <div class="materi-desc">
                Belajar pengertian dan cara kerja topologi bus
            </div>

        </a>

        <!-- TOPOLOGI STAR -->
        <a href="tonton_video.php?video=https://www.youtube.com/embed/6_RL-1zHvks"
        class="materi-box">

            <div class="materi-title">
                📘 Topologi Star
            </div>

            <div class="materi-desc">
                Memahami topologi star dan penggunaannya
            </div>

        </a>

        <!-- TOPOLOGI RING -->
        <a href="tonton_video.php?video=https://www.youtube.com/embed/QH-qklhcsiQ"
        class="materi-box">

            <div class="materi-title">
                📘 Topologi Ring
            </div>

            <div class="materi-desc">
                Belajar konsep jaringan topologi ring
            </div>

        </a>

<?php
}

/* ========================= */
/* TCP/IP */
/* ========================= */

if($mapel == "tcpip"){

?>

        <a href="tonton_video.php?video=https://www.youtube.com/embed/0RedyOvvkM0"
        class="materi-box">

            <div class="materi-title">
                📘 TCP/IP Part 1
            </div>

            <div class="materi-desc">
                Pengertian dan fungsi TCP/IP
            </div>

        </a>

        <a href="tonton_video.php?video=https://www.youtube.com/embed/2QGgEk20RXM"
        class="materi-box">

            <div class="materi-title">
                📘 TCP/IP Part 2
            </div>

            <div class="materi-desc">
                Cara kerja TCP/IP dalam jaringan
            </div>

        </a>

        <a href="tonton_video.php?video=https://www.youtube.com/embed/YJGGYKAV4pA"
        class="materi-box">

            <div class="materi-title">
                📘 TCP/IP Part 3
            </div>

            <div class="materi-desc">
                Pembahasan IP Address dan TCP
            </div>

        </a>

<?php
}

/* ========================= */
/* KEAMANAN JARINGAN */
/* ========================= */

if($mapel == "keamanan"){

?>

        <a href="tonton_video.php?video=https://www.youtube.com/embed/j073qF5aojw"
        class="materi-box">

            <div class="materi-title">
                📘 Keamanan Jaringan Part 1
            </div>

            <div class="materi-desc">
                Dasar keamanan jaringan komputer
            </div>

        </a>

        <a href="tonton_video.php?video=https://www.youtube.com/embed/0JD4HE91y3w"
        class="materi-box">

            <div class="materi-title">
                📘 Keamanan Jaringan Part 2
            </div>

            <div class="materi-desc">
                Ancaman jaringan dan cara mengatasinya
            </div>

        </a>

        <a href="tonton_video.php?video=https://www.youtube.com/embed/vLAtAlUUUFg"
        class="materi-box">

            <div class="materi-title">
                📘 Keamanan Jaringan Part 3
            </div>

            <div class="materi-desc">
                Firewall dan proteksi jaringan
            </div>

        </a>

<?php
}

/* ========================= */
/* KABEL DAN KONEKTOR */
/* ========================= */

if($mapel == "kabel"){

?>

        <a href="tonton_video.php?video=https://www.youtube.com/embed/0gbO4VjMJao"
        class="materi-box">

            <div class="materi-title">
                📘 Kabel UTP 
            </div>

            <div class="materi-desc">
                Mengenal jenis kabel jaringan komputer
            </div>

        </a>

        <a href="tonton_video.php?video=https://www.youtube.com/embed/PCDgBOl0euc"
        class="materi-box">

            <div class="materi-title">
                📘 Kabel STP
            </div>

            <div class="materi-desc">
                Mengenal jenis kabel jaringan komputer
            </div>

        </a>

        <a href="tonton_video.php?video=https://www.youtube.com/embed/T-m72jLNA0Y"
        class="materi-box">

            <div class="materi-title">
                📘 Fiber Optik
            </div>

            <div class="materi-desc">
                Memahami kabel fiber optik
            </div>

        </a>

<?php
}

/* ========================= */
/* ROUTING DASAR */
/* ========================= */

if($mapel == "routing"){

?>

        <a href="tonton_video.php?video=https://www.youtube.com/embed/5YjRoxJYHgc"
        class="materi-box">

            <div class="materi-title">
                📘 Routing Dasar Part 1
            </div>

            <div class="materi-desc">
                Pengertian routing dan fungsi router
            </div>

        </a>

        <a href="tonton_video.php?video=https://www.youtube.com/embed/emcyqeOx_JY"
        class="materi-box">

            <div class="materi-title">
                📘 Routing Dasar Part 2
            </div>

            <div class="materi-desc">
                Cara kerja routing pada jaringan
            </div>

        </a>

        <a href="tonton_video.php?video=https://www.youtube.com/embed/sTMVKR5VTvQ"
        class="materi-box">

            <div class="materi-title">
                📘 Routing Dasar Part 3
            </div>

            <div class="materi-desc">
                Belajar static dan dynamic routing
            </div>

        </a>

<?php
}

?>

    </div>

</div>

</body>
</html>