<?php  
ob_start(); 
require_once('../db.php');  
require_once('function_quantri.php');  
?> 
<?php 

if (isset($_GET['idLoai'])==true){ 
    LoaiSP_Xoa($idLoai); 
    header("location:loaisp_xemds.php"); 
} 
?>