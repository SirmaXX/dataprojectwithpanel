<?php
include 'db.php';

#yemekhane fonksiyonları

if(isset($_POST['ekle'])){
$db_tarih= $baglan->real_escape_string($_POST['tarih']);
$db_anayemek=$baglan->real_escape_string($_POST['anayemek']);
$db_corba=$baglan->real_escape_string($_POST['corba']);
$db_icecek=$baglan->real_escape_string($_POST['icecek']);
$db_tatli=$baglan->real_escape_string($_POST['tatli']);

  $sql="INSERT INTO yemekler(tarih,anayemek,corba,icecek,tatli) VALUES ('$db_tarih','$db_anayemek','$db_corba','$db_icecek','$db_tatli')";
$sorgu=$baglan->query($sql);

header('index.php');


}

if(isset($_GET['sil']))
{
 $sql= "DELETE FROM yemekler WHERE id=".$_GET['sil'];
$sorgu_run=$baglan->query($sql);


 header("Location: index.php");

}

#yemekhane fonksiyonları bitis


#duyuru fonksiyonları

 if(isset($_POST['insert'])){

      $db_duyuru=$_POST['duyuru'];
 
      $db_id=['id'];
     $sql="INSERT INTO duyurular(duyuru) VALUES ('$db_duyuru')";

$sorgu_run=$baglan->query($sql);
header("Location: index.php");
    }


if(isset($_POST['delete'])){

      $db_duyuru=$_POST['duyuru'];
 
      $db_id=['id'];
     $sql="DELETE FROM duyurular";

$sorgu_run=$baglan->query($sql);
header("Location: index.php");
    }

    if(isset($_GET['dsil']))
{
 $sql= "DELETE FROM duyurular WHERE id=".$_GET['dsil'];
$sorgu_run=$baglan->query($sql);


 header("Location: index.php");

}

#duyuru fonksiyonları bitis





#kantin fonksiyonları
if (isset($_POST['ürünekle'])) { 
$db_urun= $baglan->real_escape_string($_POST['urun']);
$db_fiyat=$baglan->real_escape_string($_POST['fiyat']);

  $sql="INSERT INTO kantin(urun, fiyat) VALUES ( '$db_urun', '$db_fiyat')";
  $sorgu=$baglan->query($sql);
  header('Location:index.php');


}
if (isset($_POST['ürünsil'])) { 
$db_urun= $baglan->real_escape_string($_POST['urun']);
$db_fiyat=$baglan->real_escape_string($_POST['fiyat']);

  $sql="DELETE FROM kantin";
  $sorgu=$baglan->query($sql);
  header('Location:index.php');

  
}
if(isset($_GET['ksil']))
{
 $sql= "DELETE FROM kantin WHERE id=".$_GET['ksil'];
$sorgu_run=$baglan->query($sql);


 header("Location: index.php");

}
#kantin fonksiyonları bitis




?>