<?php
$host = "localhost";
$user = "adminklinik";
$pass = "312010198";
$db = "klinik_312010198";
$conn = mysqli_connect ($host, $user, $pass, $db);
if ($conn == false)
{
    echo "Koneksi ke server gagal.";
    die ();
} #else echo "Koneksi berhasil";
?> 