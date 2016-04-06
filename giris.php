
<?php 
// giris.php sayfası

session_start();

if(isset($_POST["girisbuton"]))
{

	$_SESSION["kullaniciadi"] = $_POST["kadi"];
	$_SESSION["kullanicisifresi"] = $_POST["sifre"];
	
	header('location: index.php');	
}

?>
<!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  </head>
<body>
  <center>
  
<div class="col-md-12 col-xs-12 col-lg-12 girisekran">
 <form name="kullanicigirisi" method="post" action="">
    <h1>Yönetici PANELİ </h1>
  <input type="text" class="giris" placeholder="Kullanıcı Adı" id="kadi" name="kadi">
  <input type="password" class="giris" placeholder="şifre" id="sifre"  name="sifre">
  <br>
  
  <div id="loginbtn">
    <button type="submit" class="btn btn-primary btn-lg" id="girisbuton" name="girisbuton">GİRİŞ YAP</button>
  
    </div>
  
  

  
  
  </form>

  </div>
  
  </center>
  </body>

</html>