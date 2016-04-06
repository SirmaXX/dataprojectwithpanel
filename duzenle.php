<?php

include ('db.php');
$gelen_id =$_GET['gelen_id'];
if($_POST){
	//$gelen_id =$_POST["gelen_id"];
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


}



$sql=("SELECT * FROM yemekler");

$sorgu =$baglan->query($sql);

 $yazdir =$sorgu ->fetch_array() ;





?>

<form action="" method="POST">
<input type="date" name="tarih" value="<?= $yazdir['tarih']?>"  />
<input type="text" name="anayemek" value="<?php echo  $yazdir['anayemek'];?>"  />
<input type="text" name="corba" value="<?php echo  $yazdir['corba'] ;?>"  />
<input type="text" name="tatli" value="<?php echo  $yazdir['tatli'] ;?>"  />
<input type="text" name="icecek" value="<?php echo  $yazdir['icecek'] ;?>"  />
<input type="submit" value="Güncelle">
</form>

