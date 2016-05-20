<?php 
ob_start();
require_once('../db.php'); 
require_once('function_quantri.php'); 
?>
<?php

if (isset($_GET['idCL'])==true){
    ChungLoai_Xoa($idCL);
	header("location:chungloai_xemds.php");
}
?>
