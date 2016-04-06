<?php

include 'db.php';


$gelen_id=$_GET['gelen_id'];
$sql="DELETE from yemekler WHERE id='$gelen_id'";

$sorgu =$baglan->query($sql);


if ($sorgu) 
{
echo "oldu";
yonlendir("index.php");
}
else
{
	echo'hata var';
}


?>