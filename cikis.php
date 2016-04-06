<?php

// cikis.php sayfası

session_start();
session_destroy();
header("location: giris.php");

?>