<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "pintarjaringan"
);

if(!$conn){
    die("Koneksi gagal : " . mysqli_connect_error());
}
?>