<?php 
include ('db.php');

?>
<?php 
    $sql        = "SELECT *FROM duyurular"; 
    $isle=$baglan->query($sql);
    $aayazdir    = mysqli_fetch_array($isle); 
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

    <link href="./Dashboard Template for Bootstrap_files/ie10-viewport-bug-workaround.css" rel="stylesheet">

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
       <li><a href="kantin.php"  id="yazdir">Kantin</a></li>
              <li><a href="javascript:void(0)" onclick="window.print()" id="yazdir">Yazdır</a></li>
        
          </ul>
          
        </div>
      </div>
    </nav>


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

    </tr>
    <?php
}
?>
</table>
</div>
</div>



      <h1>Duyurular</h1>
      
<p class="kayanyazi"><!-- Tablo bitisi -->
<?php 


$query = $baglan->query("SELECT * FROM duyurular");

 while($row =$query->fetch_object() )
  {
  
 echo $row ->duyuru."<br />";
  }

 ?>
</p>


    <script src="./Dashboard Template for Bootstrap_files/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./Dashboard Template for Bootstrap_files/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="./Dashboard Template for Bootstrap_files/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./Dashboard Template for Bootstrap_files/ie10-viewport-bug-workaround.js"></script>
  

</body></html>