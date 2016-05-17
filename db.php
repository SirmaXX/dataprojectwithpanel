<?php
$servername = "sql204.byethost3.com";
$username = "b3_17827930";
$password = "sence26es";
$db ="b3_17827930_yemekhane";
// Create connection
$baglan = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$baglan) {
    die("veritabanı bağlanamadı  " . mysqli_connect_error());
}
//echo "veritabanı bağlandı";





?>