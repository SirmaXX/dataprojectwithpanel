<?php
include 'db.php';
$db_tarih=$_POST['tarih'];
$db_anayemek=$_POST['anayemek'];
$db_corba=$_POST['corba'];
$db_icecek=$_POST['icecek'];
$db_tatli=$_POST['tatli'];




$sql="INSERT INTO yemekler(tarih,anayemek,corba,icecek,tatli) VALUES ('$db_tarih','$db_anayemek','$db_corba','$db_icecek','$db_tatli')";

$sorgu_run=$baglan->query($sql);
yonlendir("index.php");


?>