<?php

include ('db.php');

$gelen_id =$_POST["gelen_id"];
$gelen_tarih=$_POST["tarih"];
$gelen_anayemek=$_POST["anayemek"];
$gelen_corba=$_POST["corba"];
$gelen_icecek=$_POST["icecek"];
$gelen_tatli=$_POST["tatli"];


$sql="UPDATE yemekler SET  tarih='$gelen_tarih',anayemek='$gelen_anayemek',corba='$gelen_corba',icecek='$gelen_icecek',tatli='$gelen_tatli' WHERE id='$gelen_id' ";

$sorgu = $baglan->query($sql);
if ($sorgu) {
	echo "oldu la";
	yonlendir("index.php");
}else{echo "olmadı";}



?>

