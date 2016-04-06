<?php


// ozel_sayfa.php sayfası

session_start();

if($_SESSION["kullaniciadi"] == "admin" && $_SESSION["kullanicisifresi"] == "admin123")	
{

}
else
{
	header("location: giris.php");	
}



?>
<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>