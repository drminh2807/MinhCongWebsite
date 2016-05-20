<?php 
ob_start();
require_once('../db.php'); 
require_once('function_quantri.php'); 
?>
<?php

if (isset($_GET['idSP'])==true){
    XoaSP($idSP);
	header("location:sanpham_xemds.php");
}
?>
