<?php
$servername = ";
$username = "";
$password = "";
$db ="";
// Create connection
$baglan = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$baglan) {
    die("veritabanı bağlanamadı  " . mysqli_connect_error());
}
//echo "veritabanı bağlandı";





?>
