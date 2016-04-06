<?php 
include ('db.php');

$sql=("SELECT * FROM yemekler");

$sorgu =$baglan->query($sql);



echo"<table style='border:1px'>";
while ($yazdir =$sorgu ->fetch_assoc()) { 
extract($yazdir);

echo"

<tr>
<td>$tarih</td>
<td>$anayemek</td>
<td>$corba</td>
<td>$icecek</td>
<td>$tatli</td>


</tr>
";

}
echo "</table>";
?>