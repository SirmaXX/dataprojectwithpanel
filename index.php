
<?php
// index.php sayfası
 include 'fonksiyonlar.php';
session_start();
 
if($_SESSION["kullaniciadi"] == "admin" && $_SESSION["kullanicisifresi"] == "admin123") 
{
 
echo "Hoş Geldiniz Sayın ".$_SESSION["kullaniciadi"]."<br><br>
";

}
else
{
 

header("location: giris.php");  
 
}
 
?>




<!DOCTYPE html>
<!-- saved from url=(0043)http://getbootstrap.com/examples/dashboard/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Deniz Balcı">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>H.A.Y.A.L</title>

    <link href="./Dashboard Template for Bootstrap_files/bootstrap.min.css" rel="stylesheet">

    <link href="./Dashboard Template for Bootstrap_files/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="style.css" rel="stylesheet">

    <script src="./Dashboard Template for Bootstrap_files/ie-emulation-modes-warning.js"></script>

  </head>

  <body>
   <!-- üst menu -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">HAYALYEMEKHANE</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">
 </a></li> <li>
                <!-- 
            <a href="#">
         <?php
// echo "Hoş Geldiniz Sayın ".$_SESSION["kullaniciadi"]."



//"; 




?>
</a>

-->
      </li>
            <li><a href="javascript:void(0)" onclick="window.print()" id="yazdir">Yazdır</a></li>
            <li><a href="cikis.php">Çıkış</a></li>
          </ul>
          
        </div>
      </div>
    </nav>
 <!-- üst menu bitis -->


            
            <br></br>  <br></br>

<center>
<h2 class='sub-header'>Yemek Listesi</h2>
</center>
<div class='table-responsive'>
<table width="100%" border="1" cellpadding="15" align="center" class='table table-striped'>

   <tr>
    <td>TARİH</td>
    <td>ANAYEMEK</td>
    <td>ÇORBA</td>
        <td>İÇECEK</td>
        <td>TATLI</td>

    </tr>
<?php
$res = $baglan->query("SELECT * FROM yemekler");
while($row=$res->fetch_array())
{
 ?>
    <tr>
    <td><?php echo $row['tarih']; ?></td>
    <td><?php echo $row['anayemek']; ?></td>
    <td><?php echo $row['corba']; ?></td>
        <td><?php echo $row['icecek']; ?></td>
        <td><?php echo $row['tatli']; ?></td>
<td><a href="?sil=<?php echo $row['id']; ?>" onclick="return confirm('yemeği silmek istiyormusunuz '); " ><img src="sil.png" width='30'></a></td>
 <td><a href='duzenle.php?gelen_id=$id'><img src='duzenle.png' width='30' /></a></td>
    </tr>
    <?php
}
?>
</table>
</div>
</div>




	
<div id="container">
	<div class="ekleme col-sm-6  col-xs-12 col-lg-6">
  <h2>Ürün Ekle</h2>
  <form class="form-horizontal" method="POST">
	  
    <div class="form-group">
      <label class="control-label col-sm-2" for="date">TARİH:</label>
      <div class="col-sm-10">
        <input type="date"   name="tarih" class="form-control" name="tarih">
      </div> 
    </div>
	  
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">ANAYEMEK:</label>
      <div class="col-sm-10">          
        <input type="text"  name="anayemek" class="form-control">
      </div>
    </div>
	  
	   <div class="form-group">
      <label class="control-label col-sm-2" >ÇORBA:</label>
      <div class="col-sm-10">          
        <input type="text" name="corba" class="form-control"  >
      </div>
    </div>
	   <div class="form-group">
      <label class="control-label col-sm-2" >İÇECEK</label>
      <div class="col-sm-10">          
        <input type="text" name="icecek" class="form-control"  >
      </div>
    </div>
	   <div class="form-group">
      <label class="control-label col-sm-2">TATLI:</label>
      <div class="col-sm-10">          
        <input type="text" name="tatli" class="form-control" >
      </div>
    </div>
  
    <div class="form-group">        
      
<input type="submit" value="ekle" name="ekle" class="btn btn-primary btn-lg loginbtn" >
		    
    </div>
  </form>
</div>
	


</center>



<!-- duyuru -->
  <div class=" ekleme col-sm-6  col-xs-12  col-lg-6">
  <h2>Duyuru Listesi</h2>

<table width="100%" border="1" cellpadding="15" align="center">
<?php
$res = $baglan->query("SELECT * FROM duyurular");
while($row=$res->fetch_array())
{
 ?>
    <tr>
    <td><?php echo $row['duyuru']; ?></td>
  
  
   <td><a href="?dsil=<?php echo $row['id']; ?>" onclick="return confirm('duyuruyu silmek istiyormusun '); " ><img src="sil.png" width='30'></a></td>



    </tr>
    <?php
}
?>
</table>

  <h1>Duyuru Ekle</h1>
    <form method="post" >
    <br>
    <label></label>
    <input type="text" name="duyuru"  class="form-control" >
    <br>
    <input type="submit" name="insert" value="duyuru ekle" class="btn btn-primary btn-lg loginbtn" >
   

    <input type="submit" name="delete" value="duyuruları sil"  class="btn btn-primary btn-lg loginbtn" >
    <br>


    </form>
 
</div>

<!-- duyuru bitis -->




<!-- kantin -->
 <div class=" col-sm-7 col-xs-7 col-lg-7">
<center><h3>ürün listesi</h3></center>

<table width="100%" border="1" cellpadding="15" align="center">
<tr>
   <td>ÜRÜN</td>
    <td>FİYAT</td>
    </tr>
<?php
$res = $baglan->query("SELECT * FROM kantin");
while($row=$res->fetch_array())
{
 ?>
    <tr>
   <td><?php echo $row['urun']; ?></td>
    <td><?php echo $row['fiyat']; ?></td>
    <td><a href="?ksil=<?php echo $row['id']; ?>" onclick="return confirm('ürünü silmek istiyormusun '); " ><img src="sil.png" width='30'></a></td>

    </tr>
    <?php
}
?>
</table>




<!-- kantin bitis-->
  <h1>kantin Ekle</h1>
    <form method="post" >
    <br>
   <input type="text" name="urun"  placeholder="ürün" class=" col-sm-4 col-xs-4 col-lg-4">

<input type="text" name="fiyat"  placeholder="fiyat" class=" col-sm-4 col-xs-4 col-lg-4">
    <br>
    </br>
<input type="submit" name="ürünekle" value="ürün ekle" class="btn btn-primary btn-lg loginbtn" >
    
    <input type="submit" name="ürünsil" value="ürünleri sil"  class="btn btn-primary btn-lg loginbtn" >
    <br>


    </form>
 
</div>

<!-- duyuru bitis -->


    <script src="./Dashboard Template for Bootstrap_files/holder.min.js"></script>

    <script src="./Dashboard Template for Bootstrap_files/ie10-viewport-bug-workaround.js"></script>
  

</body></html>



