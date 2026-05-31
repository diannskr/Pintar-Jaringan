<!-- detailtips.php -->
<?php

$id = isset($_GET['id']) ? $_GET['id'] : 0;

$judul = "";
$isi = "";

/* ================= TIPS 1 ================= */
if($id == 1){

    $judul = "📘 Belajar Jaringan dari Dasar";

    $isi = "
🧠 Belajar jaringan komputer sebaiknya dimulai dari materi dasar terlebih dahulu agar lebih mudah dipahami.

📌 Hal pertama yang perlu dipelajari:
• Pengertian jaringan komputer
• Fungsi jaringan
• Jenis perangkat jaringan

⚠️ Jangan langsung mempelajari konfigurasi yang sulit sebelum memahami konsep dasarnya.

✨ Tips:
✔️ Catat istilah penting
✔️ Gunakan gambar topologi
✔️ Belajar rutin setiap hari
";
}

/* ================= TIPS 2 ================= */
elseif($id == 2){

    $judul = "🖧 Cara Cepat Menghafal Topologi";

    $isi = "
📚 Topologi jaringan sering muncul dalam pelajaran maupun ujian praktik.

💡 Cara mudah menghafal:
🔹 Bus → satu kabel utama
🔹 Star → semua menuju switch
🔹 Ring → membentuk lingkaran
🔹 Mesh → saling terhubung

🎨 Gunakan gambar sederhana agar lebih mudah dipahami.

✨ Tips tambahan:
✔️ Buat mind map
✔️ Gunakan warna berbeda
✔️ Latihan menggambar topologi
";
}

/* ================= TIPS 3 ================= */
elseif($id == 3){

    $judul = "💻 Belajar Praktik dengan Simulasi";

    $isi = "
🚀 Belajar jaringan tidak cukup hanya membaca teori.

🛠️ Gunakan aplikasi simulasi seperti:
• Cisco Packet Tracer
• GNS3

📡 Dengan simulasi kamu bisa belajar:
✔️ Konfigurasi IP
✔️ Routing dasar
✔️ Menghubungkan perangkat

🎯 Keuntungan simulasi:
⭐ Aman untuk latihan
⭐ Tidak perlu perangkat asli
⭐ Mudah mencoba konfigurasi
";
}

/* ================= DEFAULT ================= */
else{

    $judul = "❌ Tips Tidak Ditemukan";

    $isi = "
Tips yang kamu pilih tidak tersedia.
";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $judul; ?></title>
    <link rel="stylesheet" href="css/style.css">

<style>

/* WRAPPER */
.detail-wrapper{
    display: flex;
    justify-content: center;
    margin-top: 5px;
}

/* BOX */
.detail-materi-box{
    width: 100%;
    max-width: 720px;

    background: white;
    color: #222;

    padding: 24px 28px;

    border-radius: 22px;

    box-shadow: 0 6px 20px rgba(0,0,0,0.12);
}

/* ISI */
.detail-materi-content{
    font-size: 15px;
    line-height: 1;
    white-space: pre-line;
}

/* TITLE */
.page-title{
    text-align: center;
    font-size: 32px;
    font-weight: 800;
    margin-bottom: 20px;
}

/* MOBILE */
@media(max-width:768px){

    .detail-materi-box{
        padding: 20px;
    }

    .detail-materi-content{
        font-size: 14px;
    }

    .page-title{
        font-size: 24px;
    }
}

</style>

</head>

<body>

<!-- TOPBAR -->
<div class="topbar">

    <!-- BACK -->
    <a href="tipsMenu.php" class="back-btn">⬅</a>

    <!-- TITLE -->
    <div class="welcome">
        <span class="welcome-text">
            Tips & Trik
        </span>
    </div>

    <div></div>

</div>

<!-- CONTENT -->
<div class="container">

    <!-- JUDUL -->
    <div class="page-title">
        <?= $judul; ?>
    </div>

    <!-- WRAPPER -->
    <div class="detail-wrapper">

        <!-- BOX -->
        <div class="detail-materi-box">

            <div class="detail-materi-content">
                <?= nl2br($isi); ?>
            </div>

        </div>

    </div>

</div>

</body>
</html>