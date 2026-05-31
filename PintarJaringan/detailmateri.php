<?php
session_start();

$id = $_GET['id'];

/* ========================= */
/* DEFAULT SESSION */
/* ========================= */

if(!isset($_SESSION['materi_selesai'])){
    $_SESSION['materi_selesai'] = 0;
}

if(!isset($_SESSION['xp'])){
    $_SESSION['xp'] = 0;
}

if(!isset($_SESSION['level'])){
    $_SESSION['level'] = 1;
}

$judul = "";
$materi = "";

/* ================================================= */
/* ================= MATERI 1 ====================== */
/* ================================================= */

if($id == 1){

    $judul = "Topologi Jaringan";

    $materi = "

<h3>Pengertian Topologi Jaringan</h3>

<p>
Topologi jaringan adalah bentuk atau susunan hubungan antar perangkat komputer dalam sebuah jaringan komputer.
Topologi menentukan bagaimana komputer saling terhubung dan bagaimana data dikirim dari satu perangkat ke perangkat lainnya.
</p>

<p>
Topologi jaringan sangat penting karena mempengaruhi kecepatan komunikasi, keamanan jaringan, kestabilan koneksi, serta kemudahan dalam pengelolaan jaringan komputer.
</p>

<hr>

<h3>Fungsi Topologi Jaringan</h3>

<ul>
<li>Mengatur alur komunikasi data dalam jaringan</li>
<li>Mempermudah proses instalasi jaringan</li>
<li>Membantu pengelolaan jaringan komputer</li>
<li>Memudahkan proses perawatan dan perbaikan jaringan</li>
<li>Meningkatkan efisiensi pertukaran data</li>
</ul>

<hr>

<h3>Jenis-Jenis Topologi Jaringan</h3>

<h4>1. Topologi Bus</h4>

<p>
Topologi bus adalah topologi jaringan yang menggunakan satu kabel utama sebagai jalur komunikasi data.
Semua perangkat dihubungkan pada kabel utama tersebut.
</p>

<p>
Ketika sebuah komputer mengirim data, maka data akan berjalan sepanjang kabel utama hingga diterima perangkat tujuan.
</p>

<b>Kelebihan:</b>

<ul>
<li>Hemat penggunaan kabel</li>
<li>Biaya instalasi murah</li>
<li>Mudah dipasang</li>
</ul>

<b>Kekurangan:</b>

<ul>
<li>Jika kabel utama rusak, seluruh jaringan terganggu</li>
<li>Kecepatan menurun jika pengguna banyak</li>
<li>Sulit mendeteksi kerusakan</li>
</ul>

<hr>

<h4>2. Topologi Star</h4>

<p>
Topologi star adalah topologi yang menggunakan perangkat pusat seperti switch atau hub.
Seluruh perangkat komputer dihubungkan ke perangkat pusat tersebut.
</p>

<p>
Topologi ini paling sering digunakan pada jaringan modern karena mudah dikelola dan lebih stabil.
</p>

<b>Kelebihan:</b>

<ul>
<li>Mudah menambah perangkat baru</li>
<li>Kerusakan mudah dideteksi</li>
<li>Jaringan lebih stabil</li>
<li>Jika satu kabel rusak, perangkat lain tetap berjalan</li>
</ul>

<b>Kekurangan:</b>

<ul>
<li>Membutuhkan banyak kabel</li>
<li>Biaya lebih mahal</li>
<li>Jika switch rusak, seluruh jaringan terganggu</li>
</ul>

<hr>

<h4>3. Topologi Ring</h4>

<p>
Topologi ring adalah topologi jaringan yang membentuk lingkaran.
Setiap perangkat terhubung dengan dua perangkat lainnya.
</p>

<p>
Data akan berjalan mengikuti arah lingkaran hingga mencapai perangkat tujuan.
</p>

<b>Kelebihan:</b>

<ul>
<li>Aliran data lebih teratur</li>
<li>Minim tabrakan data</li>
<li>Performa cukup stabil</li>
</ul>

<b>Kekurangan:</b>

<ul>
<li>Jika satu perangkat rusak jaringan terganggu</li>
<li>Perawatan lebih sulit</li>
<li>Instalasi cukup rumit</li>
</ul>

<hr>

<h4>4. Topologi Mesh</h4>

<p>
Topologi mesh adalah topologi dimana setiap perangkat saling terhubung langsung satu sama lain.
</p>

<p>
Topologi ini memiliki tingkat keamanan dan kestabilan yang sangat tinggi karena memiliki banyak jalur komunikasi.
</p>

<b>Kelebihan:</b>

<ul>
<li>Koneksi sangat stabil</li>
<li>Keamanan data lebih baik</li>
<li>Jika satu jalur rusak masih ada jalur cadangan</li>
</ul>

<b>Kekurangan:</b>

<ul>
<li>Membutuhkan banyak kabel</li>
<li>Biaya instalasi mahal</li>
<li>Konfigurasi rumit</li>
</ul>

<hr>

<h4>5. Topologi Tree</h4>

<p>
Topologi tree adalah gabungan dari topologi bus dan star yang membentuk struktur seperti pohon.
</p>

<p>
Topologi ini sering digunakan pada jaringan besar seperti sekolah, kampus, dan perusahaan.
</p>

<b>Kelebihan:</b>

<ul>
<li>Mudah dikembangkan</li>
<li>Cocok untuk jaringan besar</li>
<li>Manajemen jaringan lebih mudah</li>
</ul>

<b>Kekurangan:</b>

<ul>
<li>Membutuhkan banyak kabel</li>
<li>Konfigurasi lebih rumit</li>
<li>Jika backbone rusak jaringan terganggu</li>
</ul>

<hr>

<h3>Perangkat dalam Topologi Jaringan</h3>

<ul>
<li><b>Router</b> → Menghubungkan jaringan berbeda</li>
<li><b>Switch</b> → Menghubungkan perangkat dalam satu jaringan</li>
<li><b>Hub</b> → Membagi koneksi jaringan</li>
<li><b>Kabel UTP</b> → Media penghantar data</li>
<li><b>Konektor RJ45</b> → Penghubung kabel jaringan</li>
</ul>

<hr>

<h3>Kesimpulan</h3>

<p>
Topologi jaringan menentukan bagaimana perangkat saling terhubung dalam jaringan komputer.
Setiap topologi memiliki kelebihan dan kekurangan masing-masing.
Topologi star menjadi topologi yang paling sering digunakan karena lebih stabil dan mudah dikelola.
</p>

";
}

/* ================================================= */
/* ================= MATERI 2 ====================== */
/* ================================================= */

elseif($id == 2){

    $judul = "TCP/IP";

    $materi = "

<h3>Pengertian TCP/IP</h3>

<p>
TCP/IP adalah sekumpulan protokol komunikasi yang digunakan agar komputer dapat saling terhubung dalam jaringan maupun internet.
</p>

<p>
TCP/IP merupakan standar komunikasi utama pada internet modern.
</p>

<hr>

<h3>Pengertian TCP</h3>

<p>
TCP atau Transmission Control Protocol adalah protokol yang bertugas memastikan data dikirim dengan benar, lengkap, dan berurutan.
</p>

<p>
TCP melakukan pemeriksaan data sebelum dan sesudah pengiriman.
</p>

<hr>

<h3>Fungsi TCP</h3>

<ul>
<li>Memastikan data sampai tujuan</li>
<li>Mengatur urutan pengiriman data</li>
<li>Mengecek kesalahan pengiriman</li>
<li>Mengirim ulang data yang rusak</li>
</ul>

<hr>

<h3>Pengertian IP</h3>

<p>
IP atau Internet Protocol adalah protokol yang bertugas memberikan alamat pada perangkat jaringan.
</p>

<p>
Alamat IP digunakan agar perangkat dapat saling mengenali dalam jaringan.
</p>

<hr>

<h3>Fungsi IP</h3>

<ul>
<li>Memberikan alamat perangkat</li>
<li>Mengarahkan data ke tujuan</li>
<li>Menghubungkan jaringan berbeda</li>
</ul>

<hr>

<h3>Jenis IP Address</h3>

<h4>1. IPv4</h4>

<p>
IPv4 menggunakan 32 bit alamat dan terdiri dari 4 blok angka.
Contoh: 192.168.1.1
</p>

<h4>2. IPv6</h4>

<p>
IPv6 menggunakan 128 bit alamat sehingga mampu menyediakan lebih banyak alamat IP.
</p>

<hr>

<h3>Model Lapisan TCP/IP</h3>

<ul>
<li><b>Application Layer</b> → Tempat aplikasi berjalan</li>
<li><b>Transport Layer</b> → Mengatur pengiriman data</li>
<li><b>Internet Layer</b> → Mengatur alamat IP</li>
<li><b>Network Access Layer</b> → Mengatur koneksi jaringan fisik</li>
</ul>

<hr>

<h3>Kelebihan TCP/IP</h3>

<ul>
<li>Standar internasional</li>
<li>Dapat digunakan di berbagai perangkat</li>
<li>Stabil dan fleksibel</li>
<li>Mendukung internet modern</li>
</ul>

<hr>

<h3>Kesimpulan</h3>

<p>
TCP/IP merupakan dasar komunikasi jaringan dan internet.
TCP bertugas memastikan data terkirim dengan benar, sedangkan IP bertugas mengatur alamat dan tujuan data.
</p>

";
}

/* ================================================= */
/* ================= MATERI 3 ====================== */
/* ================================================= */

elseif($id == 3){

    $judul = "Keamanan Jaringan";

    $materi = "

<h3>Pengertian Keamanan Jaringan</h3>

<p>
Keamanan jaringan adalah proses melindungi jaringan komputer, data, dan perangkat dari ancaman digital maupun akses yang tidak sah.
</p>

<p>
Tujuan utama keamanan jaringan adalah menjaga kerahasiaan, keutuhan, dan ketersediaan data.
</p>

<hr>

<h3>Tujuan Keamanan Jaringan</h3>

<ul>
<li>Melindungi data penting</li>
<li>Mencegah pencurian data</li>
<li>Menghindari kerusakan sistem</li>
<li>Menjaga stabilitas jaringan</li>
<li>Mencegah akses ilegal</li>
</ul>

<hr>

<h3>Jenis Ancaman Jaringan</h3>

<h4>1. Virus</h4>

<p>
Virus adalah program berbahaya yang dapat merusak sistem komputer.
</p>

<h4>2. Malware</h4>

<p>
Malware adalah perangkat lunak berbahaya yang dirancang untuk merusak atau mencuri data.
</p>

<h4>3. Hacker</h4>

<p>
Hacker adalah orang yang mencoba masuk ke sistem jaringan tanpa izin.
</p>

<h4>4. Phishing</h4>

<p>
Phishing adalah upaya penipuan untuk mencuri informasi penting seperti password.
</p>

<h4>5. Spyware</h4>

<p>
Spyware digunakan untuk memata-matai aktivitas pengguna.
</p>

<hr>

<h3>Cara Menjaga Keamanan Jaringan</h3>

<ul>
<li>Menggunakan password yang kuat</li>
<li>Menggunakan antivirus</li>
<li>Melakukan update sistem</li>
<li>Mengaktifkan firewall</li>
<li>Membatasi hak akses pengguna</li>
<li>Menggunakan enkripsi data</li>
</ul>

<hr>

<h3>Firewall</h3>

<p>
Firewall adalah sistem keamanan yang bertugas menyaring lalu lintas jaringan masuk dan keluar.
</p>

<p>
Firewall membantu mencegah akses ilegal ke dalam jaringan.
</p>

<hr>

<h3>Antivirus</h3>

<p>
Antivirus adalah aplikasi yang digunakan untuk mendeteksi dan menghapus virus dari komputer.
</p>

<hr>

<h3>Kesimpulan</h3>

<p>
Keamanan jaringan sangat penting untuk melindungi data dan sistem komputer dari berbagai ancaman digital.
Penggunaan firewall, antivirus, dan password yang kuat dapat membantu meningkatkan keamanan jaringan.
</p>

";
}

/* ================================================= */
/* ================= MATERI 4 ====================== */
/* ================================================= */

elseif($id == 4){

    $judul = "Kabel dan Konektor";

    $materi = "

<h3>Pengertian Kabel Jaringan</h3>

<p>
Kabel jaringan adalah media penghantar yang digunakan untuk mengirim data antar perangkat komputer dalam jaringan.
</p>

<hr>

<h3>Jenis Kabel Jaringan</h3>

<h4>1. Kabel UTP</h4>

<p>
UTP atau Unshielded Twisted Pair adalah kabel jaringan yang paling sering digunakan pada LAN.
</p>

<b>Kelebihan:</b>

<ul>
<li>Harga murah</li>
<li>Mudah dipasang</li>
<li>Fleksibel</li>
</ul>

<b>Kekurangan:</b>

<ul>
<li>Mudah terkena gangguan elektromagnetik</li>
</ul>

<hr>

<h4>2. Kabel STP</h4>

<p>
STP atau Shielded Twisted Pair memiliki pelindung tambahan untuk mengurangi gangguan sinyal.
</p>

<b>Kelebihan:</b>

<ul>
<li>Lebih tahan gangguan</li>
<li>Kualitas sinyal lebih baik</li>
</ul>

<b>Kekurangan:</b>

<ul>
<li>Harga lebih mahal</li>
<li>Instalasi lebih sulit</li>
</ul>

<hr>

<h4>3. Fiber Optik</h4>

<p>
Fiber optik adalah kabel jaringan yang menggunakan cahaya untuk mengirim data.
</p>

<p>
Kabel ini memiliki kecepatan sangat tinggi dan mampu menjangkau jarak jauh.
</p>

<b>Kelebihan:</b>

<ul>
<li>Kecepatan sangat tinggi</li>
<li>Stabil</li>
<li>Tahan gangguan elektromagnetik</li>
</ul>

<b>Kekurangan:</b>

<ul>
<li>Harga mahal</li>
<li>Instalasi rumit</li>
</ul>

<hr>

<h3>Konektor RJ45</h3>

<p>
RJ45 adalah konektor yang digunakan pada kabel jaringan LAN seperti UTP dan STP.
</p>

<p>
RJ45 digunakan untuk menghubungkan kabel jaringan ke komputer, switch, atau router.
</p>

<hr>

<h3>Susunan Kabel Jaringan</h3>

<h4>Straight Through</h4>

<p>
Digunakan untuk menghubungkan perangkat berbeda seperti komputer ke switch.
</p>

<h4>Cross Over</h4>

<p>
Digunakan untuk menghubungkan perangkat sejenis seperti komputer ke komputer.
</p>

<hr>

<h3>Alat Instalasi Kabel</h3>

<ul>
<li>Tang crimping</li>
<li>LAN tester</li>
<li>Kabel UTP</li>
<li>Konektor RJ45</li>
</ul>

<hr>

<h3>Kesimpulan</h3>

<p>
Kabel dan konektor merupakan bagian penting dalam jaringan komputer karena berfungsi sebagai media penghantar data.
Jenis kabel dipilih sesuai kebutuhan kecepatan, jarak, dan biaya instalasi.
</p>

";
}

/* ================================================= */
/* ================= MATERI 5 ====================== */
/* ================================================= */

elseif($id == 5){

    $judul = "Routing Dasar";

    $materi = "

<h3>Pengertian Routing</h3>

<p>
Routing adalah proses menentukan jalur terbaik untuk mengirim data dari satu jaringan ke jaringan lain.
</p>

<p>
Routing dilakukan oleh perangkat jaringan yang disebut router.
</p>

<hr>

<h3>Pengertian Router</h3>

<p>
Router adalah perangkat jaringan yang digunakan untuk menghubungkan beberapa jaringan komputer.
</p>

<p>
Router bertugas mengatur lalu lintas data agar sampai ke tujuan yang benar.
</p>

<hr>

<h3>Fungsi Routing</h3>

<ul>
<li>Menghubungkan jaringan berbeda</li>
<li>Menentukan jalur terbaik pengiriman data</li>
<li>Mengatur lalu lintas jaringan</li>
<li>Meningkatkan efisiensi komunikasi data</li>
</ul>

<hr>

<h3>Jenis Routing</h3>

<h4>1. Static Routing</h4>

<p>
Static routing adalah routing yang dikonfigurasi secara manual oleh administrator jaringan.
</p>

<b>Kelebihan:</b>

<ul>
<li>Konfigurasi sederhana</li>
<li>Lebih aman</li>
<li>Tidak membebani router</li>
</ul>

<b>Kekurangan:</b>

<ul>
<li>Tidak fleksibel</li>
<li>Sulit untuk jaringan besar</li>
</ul>

<hr>

<h4>2. Dynamic Routing</h4>

<p>
Dynamic routing adalah routing yang dapat menentukan jalur otomatis menggunakan protokol routing.
</p>

<b>Kelebihan:</b>

<ul>
<li>Otomatis menyesuaikan perubahan jaringan</li>
<li>Cocok untuk jaringan besar</li>
</ul>

<b>Kekurangan:</b>

<ul>
<li>Konfigurasi lebih rumit</li>
<li>Membutuhkan sumber daya lebih besar</li>
</ul>

<hr>

<h3>Protokol Routing</h3>

<ul>
<li>RIP</li>
<li>OSPF</li>
<li>EIGRP</li>
<li>BGP</li>
</ul>

<hr>

<h3>Cara Kerja Routing</h3>

<p>
Ketika data dikirim, router akan membaca alamat tujuan pada paket data.
Router kemudian menentukan jalur terbaik agar data sampai ke tujuan dengan cepat dan efisien.
</p>

<hr>

<h3>Tabel Routing</h3>

<p>
Tabel routing adalah daftar jalur yang dimiliki router untuk menentukan arah pengiriman data.
</p>

<hr>

<h3>Kesimpulan</h3>

<p>
Routing merupakan proses penting dalam jaringan komputer karena menentukan jalur pengiriman data antar jaringan.
Router membantu mengatur lalu lintas data agar komunikasi berjalan dengan baik dan efisien.
</p>

";
}

/* ================================================= */
/* ================= SELESAI ======================= */
/* ================================================= */

if(isset($_POST['selesai'])){

    $_SESSION['materi_selesai'] += 1;

    $_SESSION['xp'] += 25;

    $_SESSION['level'] =
    floor($_SESSION['xp'] / 500) + 1;

    echo "
    <script>
        alert('🎉 Materi selesai dibaca! XP +25');
        window.location='progress.php';
    </script>
    ";

    exit;
}

?>

<!DOCTYPE html>
<html>
<head>

    <title><?= $judul; ?></title>

    <link rel='stylesheet' href='css/style.css'>

    <style>

    body{
        background:#f5f7ff;
    }

    .materi-detail{

        background:white;

        border-radius:25px;

        padding:30px;

        max-width:900px;

        margin:auto;

        box-shadow:
        0 10px 25px rgba(0,0,0,0.08);

        line-height:1.9;

    }

    .materi-detail h2{

        color:#2563eb;

        margin-bottom:25px;

        font-size:34px;

    }

    .materi-detail h3{

        margin-top:28px;

        color:#1e293b;

    }

    .materi-detail h4{

        margin-top:18px;

        color:#334155;

    }

    .materi-detail p,
    .materi-detail li{

        font-size:15px;

        color:#475569;

    }

    .materi-detail ul{

        padding-left:25px;

    }

    .materi-detail hr{

        border:none;

        border-top:1px solid #e2e8f0;

        margin:25px 0;

    }

    .btn-selesai{

        margin-top:40px;

        width:100%;

        padding:16px;

        border:none;

        border-radius:18px;

        background:
        linear-gradient(
        135deg,
        #6366f1,
        #8b5cf6);

        color:white;

        font-size:16px;

        font-weight:bold;

        cursor:pointer;

        transition:0.3s;

    }

    .btn-selesai:hover{

        transform:translateY(-3px);

    }

    </style>

</head>

<body>

<div class="topbar">

    <a href="rillmateri.php"
    class="back-btn">⬅</a>

    <div class="welcome">

        <span class="welcome-text">
            <b><?= $judul; ?></b>
        </span>

    </div>

    <div></div>

</div>

<div class="container">

    <div class="materi-detail">

        <h2><?= $judul; ?></h2>

        <?= $materi; ?>

        <form method="POST">

            <button
            type="submit"
            name="selesai"
            class="btn-selesai">

                ✅ Selesai Membaca

            </button>

        </form>

    </div>

</div>

</body>
</html>