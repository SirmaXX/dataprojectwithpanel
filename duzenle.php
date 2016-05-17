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
		header("index.php");
	}else{echo "olmadı";}


}



$sql=("SELECT * FROM yemekler");

$sorgu =$baglan->query($sql);

 $yazdir =$sorgu ->fetch_array() ;





?>


<!DOCTYPE html>
<!-- saved from url=(0043)http://getbootstrap.com/examples/dashboard/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Deniz Balcı">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>H.A.Y.A.L</title>

    <link href="./Dashboard Template for Bootstrap_files/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <link href="./Dashboard Template for Bootstrap_files/dashboard.css" rel="stylesheet">

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
 </a></li>
            <li>
            <a href="#">
             <li>
                <!-- 
            <a href="#">
         <?php
// echo "Hoş Geldiniz Sayın ".$_SESSION["kullaniciadi"]."



//"; 




?>
</a>

-->
      </li>
</a>
      </li>
            <li><a href="#">Çıkış</a></li>
          </ul>
          
        </div>
      </div>
    </nav>
 <!-- üst menu bitis -->
 <center>
<div class="container  duzenleme">
  <h2>Düzenleme formu </h2>
  <form class="form-horizontal" role="form"  action="" method="POST">
	  
    <div class="form-group">
      <label class="control-label col-sm-2" for="date">TARİH:</label>
      <div class="col-sm-10">
        <input type="date"   name="tarih" class="form-control" >
      </div> 
    </div>
	  
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">ANAYEMEK:</label>
      <div class="col-sm-10">          
        <input type="text"  name="anayemek" class="form-control" >
      </div>
    </div>
	  
	   <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">ÇORBA:</label>
      <div class="col-sm-10">          
        <input type="text" name="corba" class="form-control"  >
      </div>
    </div>
	   <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">TATLI:</label>
      <div class="col-sm-10">          
        <input type="text" name="tatli" class="form-control" >
      </div>
    </div>
	   <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">İÇECEK:</label>
      <div class="col-sm-10">          
        <input type="text" name="icecek" class="form-control"  >
      </div>
    </div>
  
    <div class="form-group">        
       <div id="loginbtn">
<input type="submit" value="Güncelle" class="btn btn-primary btn-lg" id="duzenbtn">
		     </div>
    </div>
  </form>
</div>


  
  </center>
  </body>

</html>