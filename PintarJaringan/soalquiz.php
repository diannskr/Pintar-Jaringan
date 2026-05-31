<?php

$bab = isset($_GET['bab']) ? $_GET['bab'] : 1;
$level = isset($_GET['level']) ? $_GET['level'] : 1;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Soal Quiz</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="topbar">

    <a href="quiz.php" class="back-btn">⬅</a>

    <div class="welcome">
        <span class="welcome-text">
            <b>Quiz</b>
        </span>
    </div>

    <div class="timer-box" id="timer">
        10:00
    </div>

</div>

<div class="container">

    <div class="quiz-top">

        <div class="quiz-number">
            Soal <span id="nomor">1</span>/10
        </div>

        <div class="quiz-progress">
            <div class="quiz-progress-fill" id="progressBar"></div>
        </div>

    </div>

    <div class="quiz-card">

        <div class="soal-box">

            <div class="soal-label">
                📘 Pertanyaan
            </div>

            <div class="soal-text" id="soal"></div>

        </div>

        <form>

            <div class="opsi-group" id="opsiContainer"></div>

            <div class="quiz-button">

                <button type="button" class="btn btn-next" id="nextBtn">
                    Next →
                </button>

            </div>

        </form>

    </div>

</div>

<script>

const bab = "<?= $bab; ?>";
const level = "<?= $level; ?>";

let quizData = [];

/* ========================= */
/* BAB 1 LEVEL 1 */
/* TOPOLOGI JARINGAN */
/* ========================= */

if(bab == "1" && level == "1"){

    quizData = [

        {
            soal: "Topologi berbentuk bintang disebut?",
            opsi: ["Bus","Ring","Star","Mesh"],
            benar: "Star"
        },

        {
            soal: "Perangkat pusat pada topologi star adalah?",
            opsi: ["Switch","Printer","Speaker","Scanner"],
            benar: "Switch"
        },

        {
            soal: "Topologi berbentuk lingkaran disebut?",
            opsi: ["Bus","Ring","Mesh","Tree"],
            benar: "Ring"
        },

        {
            soal: "Topologi yang menggunakan satu kabel utama adalah?",
            opsi: ["Bus","Star","Mesh","Ring"],
            benar: "Bus"
        },

        {
            soal: "Topologi yang paling stabil untuk jaringan besar adalah?",
            opsi: ["Star","Bus","Ring","Linear"],
            benar: "Star"
        },

        {
            soal: "Kelebihan topologi bus adalah?",
            opsi: [
                "Hemat kabel",
                "Mahal",
                "Sulit dipasang",
                "Lambat"
            ],
            benar: "Hemat kabel"
        },

        {
            soal: "Kekurangan topologi ring adalah?",
            opsi: [
                "Jika satu komputer rusak jaringan terganggu",
                "Hemat kabel",
                "Mudah diperbaiki",
                "Kecepatan tinggi"
            ],
            benar: "Jika satu komputer rusak jaringan terganggu"
        },

        {
            soal: "Topologi mesh memiliki?",
            opsi: [
                "Banyak jalur koneksi",
                "Satu kabel utama",
                "Satu switch",
                "Tanpa kabel"
            ],
            benar: "Banyak jalur koneksi"
        },

        {
            soal: "Perangkat yang sering digunakan pada topologi star?",
            opsi: ["Switch","Modem","CPU","RAM"],
            benar: "Switch"
        },

        {
            soal: "Topologi yang paling sederhana adalah?",
            opsi: ["Bus","Star","Mesh","Tree"],
            benar: "Bus"
        }

    ];

}

/* ========================= */
/* BAB 1 LEVEL 2 */
/* TOPOLOGI LANJUTAN */
/* ========================= */

if(bab == "1" && level == "2"){

    quizData = [

        {
            soal: "Topologi yang paling mahal adalah?",
            opsi: ["Mesh","Bus","Ring","Star"],
            benar: "Mesh"
        },

        {
            soal: "Topologi tree merupakan gabungan dari?",
            opsi: [
                "Star dan Bus",
                "Ring dan Mesh",
                "Bus dan Ring",
                "Mesh dan Tree"
            ],
            benar: "Star dan Bus"
        },

        {
            soal: "Kelebihan topologi mesh adalah?",
            opsi: [
                "Koneksi stabil",
                "Murah",
                "Sedikit kabel",
                "Lambat"
            ],
            benar: "Koneksi stabil"
        },

        {
            soal: "Kekurangan topologi star adalah?",
            opsi: [
                "Butuh banyak kabel",
                "Tidak stabil",
                "Tidak memakai switch",
                "Lambat"
            ],
            benar: "Butuh banyak kabel"
        },

        {
            soal: "Topologi bus cocok untuk?",
            opsi: [
                "Jaringan kecil",
                "Internet global",
                "Server besar",
                "Data center"
            ],
            benar: "Jaringan kecil"
        },

        {
            soal: "Topologi ring mengalirkan data secara?",
            opsi: [
                "Melingkar",
                "Acak",
                "Vertikal",
                "Diagonal"
            ],
            benar: "Melingkar"
        },

        {
            soal: "Switch berfungsi untuk?",
            opsi: [
                "Menghubungkan perangkat",
                "Mencetak",
                "Menghapus file",
                "Memutar video"
            ],
            benar: "Menghubungkan perangkat"
        },

        {
            soal: "Hub hampir sama dengan?",
            opsi: ["Switch","Monitor","Mouse","CPU"],
            benar: "Switch"
        },

        {
            soal: "Topologi paling aman dari putus koneksi adalah?",
            opsi: ["Mesh","Bus","Ring","Linear"],
            benar: "Mesh"
        },

        {
            soal: "Topologi star sering digunakan pada?",
            opsi: [
                "LAN modern",
                "Radio",
                "Televisi",
                "Printer"
            ],
            benar: "LAN modern"
        }

    ];

}

/* ========================= */
/* BAB 2 LEVEL 1 */
/* TCP/IP */
/* ========================= */

if(bab == "2" && level == "1"){

    quizData = [

        {
            soal: "TCP/IP digunakan untuk?",
            opsi: [
                "Komunikasi jaringan",
                "Menggambar",
                "Mengetik",
                "Mencetak"
            ],
            benar: "Komunikasi jaringan"
        },

        {
            soal: "TCP merupakan singkatan dari?",
            opsi: [
                "Transmission Control Protocol",
                "Transfer Computer Protocol",
                "Technical Control Program",
                "Transmission Computer Program"
            ],
            benar: "Transmission Control Protocol"
        },

        {
            soal: "IP merupakan singkatan dari?",
            opsi: [
                "Internet Protocol",
                "Internal Program",
                "Internet Program",
                "Integrated Protocol"
            ],
            benar: "Internet Protocol"
        },

        {
            soal: "Fungsi utama IP Address adalah?",
            opsi: [
                "Alamat perangkat",
                "Menghidupkan komputer",
                "Menyimpan file",
                "Mengetik dokumen"
            ],
            benar: "Alamat perangkat"
        },

        {
            soal: "TCP bertugas untuk?",
            opsi: [
                "Menjamin pengiriman data",
                "Menghapus data",
                "Mematikan jaringan",
                "Mencetak file"
            ],
            benar: "Menjamin pengiriman data"
        },

        {
            soal: "Contoh IP Address adalah?",
            opsi: [
                "192.168.1.1",
                "www.google.com",
                "RJ45",
                "Switch"
            ],
            benar: "192.168.1.1"
        },

        {
            soal: "Jumlah layer pada model TCP/IP adalah?",
            opsi: ["4","5","6","7"],
            benar: "4"
        },

        {
            soal: "Layer paling atas TCP/IP adalah?",
            opsi: [
                "Application",
                "Internet",
                "Transport",
                "Network"
            ],
            benar: "Application"
        },

        {
            soal: "Protokol untuk membuka website adalah?",
            opsi: ["HTTP","FTP","SMTP","ARP"],
            benar: "HTTP"
        },

        {
            soal: "TCP bekerja pada layer?",
            opsi: [
                "Transport",
                "Application",
                "Internet",
                "Physical"
            ],
            benar: "Transport"
        }

    ];

}

/* ========================= */
/* BAB 2 LEVEL 2 */
/* TCP/IP LANJUTAN */
/* ========================= */

if(bab == "2" && level == "2"){

    quizData = [

        {
            soal: "SMTP digunakan untuk?",
            opsi: [
                "Mengirim email",
                "Browsing",
                "Game",
                "Mencetak"
            ],
            benar: "Mengirim email"
        },

        {
            soal: "FTP digunakan untuk?",
            opsi: [
                "Transfer file",
                "Menggambar",
                "Mencetak",
                "Menghapus data"
            ],
            benar: "Transfer file"
        },

        {
            soal: "DNS berfungsi untuk?",
            opsi: [
                "Menerjemahkan domain",
                "Menyimpan gambar",
                "Menghapus virus",
                "Mematikan jaringan"
            ],
            benar: "Menerjemahkan domain"
        },

        {
            soal: "Alamat localhost adalah?",
            opsi: [
                "127.0.0.1",
                "192.168.1.1",
                "8.8.8.8",
                "255.255.255.0"
            ],
            benar: "127.0.0.1"
        },

        {
            soal: "Subnet mask digunakan untuk?",
            opsi: [
                "Membagi jaringan",
                "Menghapus data",
                "Menggambar",
                "Memutar musik"
            ],
            benar: "Membagi jaringan"
        },

        {
            soal: "Protocol HTTPS lebih aman karena?",
            opsi: [
                "Menggunakan enkripsi",
                "Lebih lambat",
                "Gratis",
                "Tanpa internet"
            ],
            benar: "Menggunakan enkripsi"
        },

        {
            soal: "Port default HTTP adalah?",
            opsi: ["80","21","25","443"],
            benar: "80"
        },

        {
            soal: "Port default HTTPS adalah?",
            opsi: ["443","80","21","110"],
            benar: "443"
        },

        {
            soal: "DNS server terkenal milik Google adalah?",
            opsi: [
                "8.8.8.8",
                "1.1.1.1",
                "127.0.0.1",
                "192.168.0.1"
            ],
            benar: "8.8.8.8"
        },

        {
            soal: "Alamat IP versi terbaru adalah?",
            opsi: ["IPv6","IPv4","IPX","TCP"],
            benar: "IPv6"
        }

    ];

}

/* ========================= */
/* BAB 3 LEVEL 1 */
/* KEAMANAN JARINGAN */
/* ========================= */

if(bab == "3" && level == "1"){

    quizData = [

        {
            soal: "Tujuan keamanan jaringan adalah?",
            opsi: [
                "Melindungi data",
                "Merusak komputer",
                "Memperlambat internet",
                "Menghapus file"
            ],
            benar: "Melindungi data"
        },

        {
            soal: "Program berbahaya disebut?",
            opsi: ["Malware","Router","Switch","Browser"],
            benar: "Malware"
        },

        {
            soal: "Virus komputer dapat?",
            opsi: [
                "Merusak sistem",
                "Menambah RAM",
                "Mempercepat internet",
                "Mengganti monitor"
            ],
            benar: "Merusak sistem"
        },

        {
            soal: "Firewall digunakan untuk?",
            opsi: [
                "Mengamankan jaringan",
                "Menghapus file",
                "Mencetak",
                "Menggambar"
            ],
            benar: "Mengamankan jaringan"
        },

        {
            soal: "Password yang baik adalah?",
            opsi: [
                "Sulit ditebak",
                "123456",
                "Tanggal lahir",
                "Nama sendiri"
            ],
            benar: "Sulit ditebak"
        },

        {
            soal: "Antivirus digunakan untuk?",
            opsi: [
                "Mendeteksi virus",
                "Menghapus keyboard",
                "Menambah RAM",
                "Mencetak"
            ],
            benar: "Mendeteksi virus"
        },

        {
            soal: "Phishing bertujuan untuk?",
            opsi: [
                "Mencuri data",
                "Mempercepat internet",
                "Menghapus kabel",
                "Membuat desain"
            ],
            benar: "Mencuri data"
        },

        {
            soal: "VPN digunakan untuk?",
            opsi: [
                "Mengamankan koneksi",
                "Merusak jaringan",
                "Mencetak",
                "Menggambar"
            ],
            benar: "Mengamankan koneksi"
        },

        {
            soal: "Hacker adalah?",
            opsi: [
                "Orang yang mencoba masuk sistem",
                "Guru komputer",
                "Pengguna Word",
                "Pembuat monitor"
            ],
            benar: "Orang yang mencoba masuk sistem"
        },

        {
            soal: "Update sistem penting untuk?",
            opsi: [
                "Keamanan",
                "Menghapus RAM",
                "Mematikan internet",
                "Mengurangi storage"
            ],
            benar: "Keamanan"
        }

    ];

}

/* ========================= */
/* BAB 3 LEVEL 2 */
/* KEAMANAN JARINGAN LANJUTAN */
/* ========================= */

if(bab == "3" && level == "2"){

    quizData = [

        {
            soal: "Tujuan utama keamanan jaringan adalah?",
            opsi: [
                "Melindungi data dan sistem",
                "Memperlambat internet",
                "Menghapus file",
                "Menambah virus"
            ],
            benar: "Melindungi data dan sistem"
        },

        {
            soal: "Program berbahaya disebut?",
            opsi: [
                "Malware",
                "Browser",
                "Switch",
                "CPU"
            ],
            benar: "Malware"
        },

        {
            soal: "Firewall berfungsi untuk?",
            opsi: [
                "Menyaring akses jaringan",
                "Mencetak dokumen",
                "Menggambar",
                "Mematikan komputer"
            ],
            benar: "Menyaring akses jaringan"
        },

        {
            soal: "Phishing biasanya dilakukan untuk?",
            opsi: [
                "Mencuri data pengguna",
                "Mempercepat internet",
                "Membersihkan RAM",
                "Menghapus monitor"
            ],
            benar: "Mencuri data pengguna"
        },

        {
            soal: "Password yang baik sebaiknya?",
            opsi: [
                "Sulit ditebak",
                "123456",
                "Nama sendiri",
                "Tanggal lahir"
            ],
            benar: "Sulit ditebak"
        },

        {
            soal: "VPN digunakan untuk?",
            opsi: [
                "Mengamankan koneksi internet",
                "Menghapus data",
                "Merusak jaringan",
                "Mencetak dokumen"
            ],
            benar: "Mengamankan koneksi internet"
        },

        {
            soal: "Antivirus digunakan untuk?",
            opsi: [
                "Mendeteksi virus",
                "Menggambar",
                "Membuat website",
                "Menghapus keyboard"
            ],
            benar: "Mendeteksi virus"
        },

        {
            soal: "Hacker adalah?",
            opsi: [
                "Orang yang mencoba masuk sistem",
                "Guru komputer",
                "Pembuat printer",
                "Pengguna Word"
            ],
            benar: "Orang yang mencoba masuk sistem"
        },

        {
            soal: "Update sistem penting untuk?",
            opsi: [
                "Keamanan sistem",
                "Menghapus file",
                "Memperlambat internet",
                "Mengurangi RAM"
            ],
            benar: "Keamanan sistem"
        },

        {
            soal: "Virus komputer dapat?",
            opsi: [
                "Merusak sistem",
                "Menambah RAM",
                "Membuat printer",
                "Mempercepat internet"
            ],
            benar: "Merusak sistem"
        }

    ];

}

/* ========================= */
/* BAB 4 LEVEL 1 */
/* KABEL DAN KONEKTOR DASAR */
/* ========================= */

if(bab == "4" && level == "1"){

    quizData = [

        {
            soal: "Kabel yang umum digunakan pada LAN adalah?",
            opsi: ["UTP","HDMI","USB","VGA"],
            benar: "UTP"
        },

        {
            soal: "Konektor kabel LAN adalah?",
            opsi: ["RJ45","USB","HDMI","PS2"],
            benar: "RJ45"
        },

        {
            soal: "UTP merupakan singkatan dari?",
            opsi: [
                "Unshielded Twisted Pair",
                "Universal Transfer Pair",
                "United Twisted Program",
                "Unified Transfer Protocol"
            ],
            benar: "Unshielded Twisted Pair"
        },

        {
            soal: "Fiber optik menggunakan media?",
            opsi: ["Cahaya","Listrik","Air","Api"],
            benar: "Cahaya"
        },

        {
            soal: "Kelebihan fiber optik adalah?",
            opsi: [
                "Kecepatan tinggi",
                "Murah",
                "Lambat",
                "Pendek"
            ],
            benar: "Kecepatan tinggi"
        },

        {
            soal: "RJ45 digunakan untuk?",
            opsi: [
                "Kabel jaringan",
                "Kabel listrik",
                "Speaker",
                "Mouse"
            ],
            benar: "Kabel jaringan"
        },

        {
            soal: "STP memiliki?",
            opsi: [
                "Pelindung tambahan",
                "Tanpa pelindung",
                "Serat kaca",
                "Tanpa inti"
            ],
            benar: "Pelindung tambahan"
        },

        {
            soal: "UTP terdiri dari?",
            opsi: [
                "Pasangan kabel",
                "Kabel tunggal",
                "Serat optik",
                "Pipa besi"
            ],
            benar: "Pasangan kabel"
        },

        {
            soal: "Fiber optik tahan terhadap?",
            opsi: [
                "Gangguan elektromagnetik",
                "Air",
                "Debu",
                "Api"
            ],
            benar: "Gangguan elektromagnetik"
        },

        {
            soal: "Kabel UTP cocok digunakan untuk?",
            opsi: [
                "Jaringan lokal",
                "Pipa air",
                "TV analog",
                "Speaker"
            ],
            benar: "Jaringan lokal"
        }

    ];

}

/* ========================= */
/* BAB 4 LEVEL 2 */
/* KABEL DAN KONEKTOR LANJUTAN */
/* ========================= */

if(bab == "4" && level == "2"){

    quizData = [

        {
            soal: "Susunan kabel straight digunakan untuk?",
            opsi: [
                "Perangkat berbeda",
                "Perangkat sama",
                "Printer",
                "Speaker"
            ],
            benar: "Perangkat berbeda"
        },

        {
            soal: "Susunan kabel crossover digunakan untuk?",
            opsi: [
                "Perangkat sama",
                "Perangkat berbeda",
                "Monitor",
                "Scanner"
            ],
            benar: "Perangkat sama"
        },

        {
            soal: "Alat untuk memasang RJ45 disebut?",
            opsi: [
                "Crimping Tool",
                "Obeng",
                "Tang biasa",
                "Palu"
            ],
            benar: "Crimping Tool"
        },

        {
            soal: "Jumlah kabel pada UTP adalah?",
            opsi: ["8","4","6","10"],
            benar: "8"
        },

        {
            soal: "Fungsi LAN tester adalah?",
            opsi: [
                "Mengecek kabel jaringan",
                "Mencetak file",
                "Menggambar",
                "Menghapus data"
            ],
            benar: "Mengecek kabel jaringan"
        },

        {
            soal: "Fiber optik terbuat dari?",
            opsi: [
                "Serat kaca",
                "Tembaga",
                "Besi",
                "Aluminium"
            ],
            benar: "Serat kaca"
        },

        {
            soal: "RJ45 memiliki jumlah pin?",
            opsi: ["8","4","6","2"],
            benar: "8"
        },

        {
            soal: "Kabel tercepat adalah?",
            opsi: [
                "Fiber Optik",
                "UTP",
                "STP",
                "Coaxial"
            ],
            benar: "Fiber Optik"
        },

        {
            soal: "Kabel coaxial biasanya digunakan untuk?",
            opsi: [
                "TV dan internet",
                "Speaker",
                "Mouse",
                "Printer"
            ],
            benar: "TV dan internet"
        },

        {
            soal: "Standar kabel straight adalah?",
            opsi: [
                "T568A dan T568B",
                "RGB",
                "CMYK",
                "USB"
            ],
            benar: "T568A dan T568B"
        }

    ];

}

/* ========================= */
/* BAB 5 LEVEL 1 */
/* ROUTING DASAR */
/* ========================= */

if(bab == "5" && level == "1"){

    quizData = [

        {
            soal: "Routing adalah proses?",
            opsi: [
                "Menentukan jalur data",
                "Menghapus file",
                "Menggambar",
                "Mencetak"
            ],
            benar: "Menentukan jalur data"
        },

        {
            soal: "Perangkat routing disebut?",
            opsi: ["Router","Switch","Hub","Printer"],
            benar: "Router"
        },

        {
            soal: "Router digunakan untuk?",
            opsi: [
                "Menghubungkan jaringan",
                "Memutar musik",
                "Menghapus data",
                "Mencetak dokumen"
            ],
            benar: "Menghubungkan jaringan"
        },

        {
            soal: "Static routing dilakukan secara?",
            opsi: [
                "Manual",
                "Otomatis",
                "Offline",
                "Acak"
            ],
            benar: "Manual"
        },

        {
            soal: "Dynamic routing dilakukan secara?",
            opsi: [
                "Otomatis",
                "Manual",
                "Tetap",
                "Offline"
            ],
            benar: "Otomatis"
        },

        {
            soal: "Router bekerja pada layer?",
            opsi: [
                "Network",
                "Physical",
                "Application",
                "Session"
            ],
            benar: "Network"
        },

        {
            soal: "Routing table berisi?",
            opsi: [
                "Informasi jalur",
                "Video",
                "Musik",
                "Gambar"
            ],
            benar: "Informasi jalur"
        },

        {
            soal: "Contoh routing protocol adalah?",
            opsi: [
                "RIP",
                "HTTP",
                "FTP",
                "SMTP"
            ],
            benar: "RIP"
        },

        {
            soal: "Tujuan routing adalah?",
            opsi: [
                "Mengirim data ke tujuan",
                "Menghapus RAM",
                "Membuat virus",
                "Mematikan jaringan"
            ],
            benar: "Mengirim data ke tujuan"
        },

        {
            soal: "Gateway biasanya terdapat pada?",
            opsi: [
                "Router",
                "Printer",
                "Keyboard",
                "Monitor"
            ],
            benar: "Router"
        }

    ];

}

/* ========================= */
/* BAB 5 LEVEL 2 */
/* ROUTING LANJUTAN */
/* ========================= */

if(bab == "5" && level == "2"){

    quizData = [

        {
            soal: "OSPF termasuk jenis routing?",
            opsi: [
                "Dynamic Routing",
                "Static Routing",
                "Manual Routing",
                "Offline Routing"
            ],
            benar: "Dynamic Routing"
        },

        {
            soal: "RIP merupakan singkatan dari?",
            opsi: [
                "Routing Information Protocol",
                "Router Internet Program",
                "Routing Internal Process",
                "Remote Internet Protocol"
            ],
            benar: "Routing Information Protocol"
        },

        {
            soal: "Default gateway digunakan untuk?",
            opsi: [
                "Jalur keluar jaringan",
                "Mencetak dokumen",
                "Menghapus file",
                "Menggambar"
            ],
            benar: "Jalur keluar jaringan"
        },

        {
            soal: "NAT berfungsi untuk?",
            opsi: [
                "Menerjemahkan alamat IP",
                "Menghapus data",
                "Mematikan router",
                "Menggambar"
            ],
            benar: "Menerjemahkan alamat IP"
        },

        {
            soal: "Ping digunakan untuk?",
            opsi: [
                "Menguji koneksi jaringan",
                "Menghapus file",
                "Mematikan komputer",
                "Menggambar"
            ],
            benar: "Menguji koneksi jaringan"
        },

        {
            soal: "Traceroute digunakan untuk?",
            opsi: [
                "Melacak jalur paket",
                "Mencetak data",
                "Menghapus kabel",
                "Membuat video"
            ],
            benar: "Melacak jalur paket"
        },

        {
            soal: "Subnet mask digunakan untuk?",
            opsi: [
                "Membagi jaringan",
                "Menghapus IP",
                "Menambah RAM",
                "Membuat router"
            ],
            benar: "Membagi jaringan"
        },

        {
            soal: "Gateway berfungsi sebagai?",
            opsi: [
                "Penghubung antar jaringan",
                "Pemutar musik",
                "Penghapus data",
                "Penyimpan file"
            ],
            benar: "Penghubung antar jaringan"
        },

        {
            soal: "CIDR digunakan untuk?",
            opsi: [
                "Pembagian IP",
                "Menggambar",
                "Membuat virus",
                "Mencetak"
            ],
            benar: "Pembagian IP"
        },

        {
            soal: "Mikrotik adalah?",
            opsi: [
                "Perangkat routing",
                "Antivirus",
                "Browser",
                "Aplikasi desain"
            ],
            benar: "Perangkat routing"
        }

    ];

}

/* ========================= */
/* VARIABLE */
/* ========================= */

let currentQuiz = 0;
let skor = 0;

const soal = document.getElementById("soal");
const opsiContainer = document.getElementById("opsiContainer");
const nomor = document.getElementById("nomor");
const nextBtn = document.getElementById("nextBtn");
const progressBar = document.getElementById("progressBar");

function loadQuiz(){

    nomor.innerHTML = currentQuiz + 1;

    soal.innerHTML = quizData[currentQuiz].soal;

    opsiContainer.innerHTML = "";

    quizData[currentQuiz].opsi.forEach((opsiText) => {

        opsiContainer.innerHTML += `

            <label class="opsi">

                <input 
                    type="radio" 
                    name="jawaban" 
                    value="${opsiText}"
                >

                <span>${opsiText}</span>

            </label>

        `;

    });

    let progress = ((currentQuiz + 1) / quizData.length) * 100;

    progressBar.style.width = progress + "%";

}

nextBtn.addEventListener("click", () => {

    const jawaban =
    document.querySelector('input[name="jawaban"]:checked');

    if(!jawaban){

        alert("Pilih jawaban dulu!");
        return;

    }

    const jawabanBenar =
    quizData[currentQuiz].benar;

    const semuaOpsi =
    document.querySelectorAll('.opsi');

    semuaOpsi.forEach((opsi) => {

        const input = opsi.querySelector('input');

        input.disabled = true;

        if(input.value == jawabanBenar){

            opsi.style.background = "#d1fae5";
            opsi.style.border = "2px solid #10b981";

        }

        if(input.checked &&
           input.value != jawabanBenar){

            opsi.style.background = "#fee2e2";
            opsi.style.border = "2px solid #ef4444";

        }

    });

    if(jawaban.value == jawabanBenar){

        skor++;

    }

    nextBtn.disabled = true;

    setTimeout(() => {

        nextBtn.disabled = false;

        if(currentQuiz < quizData.length - 1){

            currentQuiz++;
            loadQuiz();

        }else{

            window.location =
            "hasil.php?skor=" + skor;

        }

    },1500);

});

loadQuiz();

/* TIMER */

let time = 600;

let timer = document.getElementById("timer");

function updateTimer(){

    let menit = Math.floor(time / 60);
    let detik = time % 60;

    if(detik < 10){

        detik = "0" + detik;

    }

    timer.innerHTML = menit + ":" + detik;

    time--;

    if(time < 0){

        alert("Waktu habis!");

        window.location =
        "hasil.php?skor=" + skor;

    }

}

updateTimer();

let timerInterval =
setInterval(updateTimer,1000);

</script>

</body>
</html>