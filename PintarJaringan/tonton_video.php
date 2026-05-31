<?php

$video = $_GET['video'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tonton Video</title>
    <link rel="stylesheet" href="css/style.css">

    <style>

        .video-wrapper{

            display: flex;
            justify-content: center;

        }

        .video-card{

            width: 100%;
            max-width: 900px;

            background: white;

            padding: 25px;

            border-radius: 25px;

            box-shadow:
            0 10px 25px rgba(0,0,0,0.08);

        }

        .video-frame{

            width: 100%;
            height: 500px;

            border: none;

            border-radius: 20px;

        }

        @media(max-width:768px){

            .video-frame{

                height: 250px;

            }

        }

    </style>

</head>

<body>

<div class="topbar">

    <a href="video.php" class="back-btn">⬅</a>

    <div class="welcome">

        <span class="welcome-text">
            <b>Tonton Video</b>
        </span>

    </div>

    <div></div>

</div>

<div class="container">

    <div class="video-wrapper">

        <div class="video-card">

            <iframe
                class="video-frame"
                src="<?= $video; ?>"
                allowfullscreen>
            </iframe>

        </div>

    </div>

</div>

</body>
</html>