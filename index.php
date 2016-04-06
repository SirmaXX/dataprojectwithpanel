<?php 
include ('db.php');

$sql=("SELECT * FROM yemekler");

$sorgu =$baglan->query($sql);



echo"<table style='border:1px'>";
while ($yazdir =$sorgu ->fetch_array()) { 
extract($yazdir);

echo"

<tr>
<td>$tarih</td>
<td>$anayemek</td>
<td>$corba</td>
<td>$icecek</td>
<td>$tatli</td>
<td><a href='sil.php?gelen_id=$id'><img src='sil.png' width='30' /></a></td>
<td><a href='duzenle.php?gelen_id=$id'><img src='duzenle.png' width='30' /></a></td>
</tr>
";

}
echo "</table>";
?>


<form action="ekle.php" method="post">
<input type="date" name="tarih">
<input type="text" name="anayemek">
<input type="text" name="corba">
<input type="text" name="icecek">
<input type="text" name="tatli">
<input type="submit" >
</form>