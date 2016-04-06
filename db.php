<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$db ="yemekhane";
// Create connection
$baglan = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$baglan) {
    die("veritabanı bağlanamadı  " . mysqli_connect_error());
}
//echo "veritabanı bağlandı";



function yonlendir($adres,$zaman=0)
{

if ($zaman) {header("Refresh:$zaman ,url=$zaman ");
	# code...
}
else{


	header("Location:$adres");

}
}


?>