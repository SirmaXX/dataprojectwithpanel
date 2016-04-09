<?php
 
// index.php sayfası
 
session_start();
 
if($_SESSION["kullaniciadi"] == "admin" && $_SESSION["kullanicisifresi"] == "admin123")	
{
 
echo "Hoş Geldiniz Sayın ".$_SESSION["kullaniciadi"]."<br><br>
";
header("location: index.php");	
}
else
{
 

header("location: giris.php");	
 
}
 
?>