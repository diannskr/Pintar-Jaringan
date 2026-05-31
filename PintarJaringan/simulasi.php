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

if(!isset($_SESSION['simulasi_selesai'])){
    $_SESSION['simulasi_selesai'] = 0;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Simulasi Praktik</title>
    <link rel="stylesheet" href="css/style.css">

    <style>

        .simulasi-layout{

            display: grid;

            grid-template-columns:
            250px 1fr 300px;

            gap: 20px;

        }

        .sim-box{

            background: rgba(255,255,255,0.96);

            border-radius: 25px;

            padding: 25px;

            box-shadow:
            0 10px 25px rgba(0,0,0,0.08);

        }

        .sim-box h3{

            margin-bottom: 20px;

            color: #1e293b;

        }

        /* ================= PERANGKAT ================= */

        .alat{

            background: #eef2ff;

            padding: 15px;

            border-radius: 18px;

            margin-bottom: 14px;

            cursor: pointer;

            font-weight: bold;

            text-align: center;

            transition: 0.2s;

        }

        .alat:hover{

            background: #dbeafe;

            transform: scale(1.03);

        }

        /* ================= AREA ================= */

        #area{

            width: 100%;
            min-height: 500px;

            background:
            linear-gradient(
            135deg,
            #f8fbff,
            #eef2ff);

            border-radius: 25px;

            border: 3px dashed #c7d2fe;

            padding: 20px;

            position: relative;

            overflow: hidden;

        }

        .device{

            width: 110px;

            padding: 14px;

            background: white;

            border-radius: 18px;

            box-shadow:
            0 5px 15px rgba(0,0,0,0.08);

            text-align: center;

            position: absolute;

            cursor: move;

            font-weight: bold;

            user-select: none;

            transition: 0.2s;

        }

        .device:hover{

            transform: scale(1.05);

        }

        /* ================= STATUS ================= */

        .status-box{

            background: #f8fbff;

            border-radius: 18px;

            padding: 18px;

            margin-top: 20px;

            line-height: 1.8;

        }

        .status{

            font-weight: bold;

            margin-top: 10px;

        }

        .berhasil{

            color: #10b981;

        }

        .gagal{

            color: #ef4444;

        }

        /* ================= BUTTON ================= */

        .button-group{

            display: flex;

            gap: 10px;

            margin-top: 20px;

        }

        .sim-btn{

            flex: 1;

            padding: 14px;

            border: none;

            border-radius: 16px;

            background:
            linear-gradient(
            135deg,
            #6366f1,
            #8b5cf6);

            color: white;

            font-weight: bold;

            cursor: pointer;

            font-size: 15px;

        }

        .reset-btn{

            background:
            linear-gradient(
            135deg,
            #ef4444,
            #f97316);

        }

        .hapus-text{

            margin-top: 15px;

            font-size: 13px;

            color: #64748b;

        }

        .soal-box{

            background: #eef2ff;

            padding: 18px;

            border-radius: 18px;

            margin-bottom: 20px;

            line-height: 1.7;

        }

        /* ================= RESPONSIVE ================= */

        @media(max-width:900px){

            .simulasi-layout{

                grid-template-columns: 1fr;

            }

        }

    </style>

</head>

<body>

<!-- TOPBAR -->
<div class="topbar">

    <a href="prasimulasi.php" class="back-btn">⬅</a>

    <div class="welcome">
        <span class="welcome-text">
            <b>SIMULASI PRAKTIK</b>
        </span>
    </div>

    <div></div>

</div>

<div class="container">

<div class="simulasi-layout">

    <!-- ================= KIRI ================= -->
    <div class="sim-box">

        <h3>🖥️ Perangkat</h3>

        <div class="alat"
        onclick="tambahDevice('Router')">
            🖧 Router
        </div>

        <div class="alat"
        onclick="tambahDevice('Switch')">
            🔀 Switch
        </div>

        <div class="alat"
        onclick="tambahDevice('PC')">
            💻 PC
        </div>

        <div class="alat"
        onclick="tambahDevice('Server')">
            🗄️ Server
        </div>

    </div>

    <!-- ================= TENGAH ================= -->
    <div class="sim-box">

        <h3>📘 Area Simulasi</h3>

        <div class="soal-box" id="soalText">
            Loading soal...
        </div>

        <div id="area"></div>

    </div>

    <!-- ================= KANAN ================= -->
    <div class="sim-box">

        <h3>📋 Instruksi</h3>

        <p>
            Klik perangkat di kiri untuk
            menambahkan ke area simulasi.
        </p>

        <div class="hapus-text">
            💡 Double klik perangkat untuk menghapus
        </div>

        <div class="status-box">

            <div>
                🖧 Router :
                <span id="routerCount">0</span>
            </div>

            <div>
                💻 PC :
                <span id="pcCount">0</span>
            </div>

            <div>
                🔀 Switch :
                <span id="switchCount">0</span>
            </div>

            <div>
                🗄️ Server :
                <span id="serverCount">0</span>
            </div>

            <div class="status" id="statusText">
                Belum dicek
            </div>

        </div>

        <div class="button-group">

            <button class="sim-btn"
            onclick="cekHasil()">
                ✅ Cek
            </button>

            <button class="sim-btn reset-btn"
            onclick="resetSimulasi()">
                🔄 Reset
            </button>

        </div>

    </div>

</div>

</div>

<script>

/* ================= DATA SOAL ================= */

const soalSimulasi = [

{
    soal:
    "Susun jaringan menggunakan 1 Router dan 2 PC tanpa perangkat lain.",

    router: 1,
    pc: 2,
    switch: 0,
    server: 0
},

{
    soal:
    "Susun jaringan menggunakan 1 Switch dan 3 PC.",

    router: 0,
    pc: 3,
    switch: 1,
    server: 0
},

{
    soal:
    "Susun jaringan menggunakan 1 Router, 1 Switch, dan 1 Server.",

    router: 1,
    pc: 0,
    switch: 1,
    server: 1
}

];

/* ================= NOMOR SOAL ================= */

let soalKe = 0;

document.getElementById("soalText")
.innerHTML = soalSimulasi[soalKe].soal;

/* ================= VARIABLE ================= */

let router = 0;
let pc = 0;
let sw = 0;
let server = 0;

/* ================= TAMBAH DEVICE ================= */

function tambahDevice(nama){

    let area =
    document.getElementById("area");

    let div =
    document.createElement("div");

    div.className = "device";

    div.setAttribute(
        "data-device",
        nama
    );

    if(nama == "Router"){

        div.innerHTML = "🖧 Router";
        router++;

    }

    if(nama == "PC"){

        div.innerHTML = "💻 PC";
        pc++;

    }

    if(nama == "Switch"){

        div.innerHTML = "🔀 Switch";
        sw++;

    }

    if(nama == "Server"){

        div.innerHTML = "🗄️ Server";
        server++;

    }

    div.style.top =
    Math.random() * 350 + "px";

    div.style.left =
    Math.random() * 400 + "px";

    /* ================= HAPUS ================= */

    div.ondblclick = function(){

        let tipe =
        this.getAttribute("data-device");

        if(tipe == "Router"){
            router--;
        }

        if(tipe == "PC"){
            pc--;
        }

        if(tipe == "Switch"){
            sw--;
        }

        if(tipe == "Server"){
            server--;
        }

        this.remove();

        updateJumlah();

    };

    area.appendChild(div);

    updateJumlah();

    dragElement(div);

}

/* ================= UPDATE JUMLAH ================= */

function updateJumlah(){

    document.getElementById("routerCount")
    .innerHTML = router;

    document.getElementById("pcCount")
    .innerHTML = pc;

    document.getElementById("switchCount")
    .innerHTML = sw;

    document.getElementById("serverCount")
    .innerHTML = server;

}

/* ================= CEK HASIL ================= */

function cekHasil(){

    let status =
    document.getElementById("statusText");

    let soal =
    soalSimulasi[soalKe];

    if(

        router == soal.router &&
        pc == soal.pc &&
        sw == soal.switch &&
        server == soal.server

    ){

        status.innerHTML =
        "✅ Simulasi Benar";

        status.className =
        "status berhasil";

        setTimeout(() => {

            soalKe++;

            if(soalKe < soalSimulasi.length){

                alert(
                "Soal berikutnya!"
                );

                resetSimulasi();

                document.getElementById(
                "soalText"
                ).innerHTML =
                soalSimulasi[soalKe].soal;

            }else{

                window.location =
                "simulasiselesai.php";

            }

        },1000);

    }else{

        status.innerHTML =
        "❌ Simulasi Salah";

        status.className =
        "status gagal";

    }

}

/* ================= RESET ================= */

function resetSimulasi(){

    document.getElementById("area")
    .innerHTML = "";

    router = 0;
    pc = 0;
    sw = 0;
    server = 0;

    updateJumlah();

    let status =
    document.getElementById("statusText");

    status.innerHTML =
    "Belum dicek";

    status.className =
    "status";

}

/* ================= DRAG ================= */

function dragElement(elmnt){

    let pos1 = 0,
        pos2 = 0,
        pos3 = 0,
        pos4 = 0;

    elmnt.onmousedown =
    dragMouseDown;

    function dragMouseDown(e){

        e = e || window.event;

        e.preventDefault();

        pos3 = e.clientX;
        pos4 = e.clientY;

        document.onmouseup =
        closeDragElement;

        document.onmousemove =
        elementDrag;

    }

    function elementDrag(e){

        e = e || window.event;

        e.preventDefault();

        pos1 = pos3 - e.clientX;
        pos2 = pos4 - e.clientY;

        pos3 = e.clientX;
        pos4 = e.clientY;

        elmnt.style.top =
        (elmnt.offsetTop - pos2) + "px";

        elmnt.style.left =
        (elmnt.offsetLeft - pos1) + "px";

    }

    function closeDragElement(){

        document.onmouseup = null;
        document.onmousemove = null;

    }

}

</script>

</body>
</html>