<?php  
ob_start(); 
require_once('../db.php');  
require_once('function_quantri.php');  
?> 
<?php 

if (isset($_GET['id_comment'])==true){ 
    Comment_Xoa($id_comment); 
    header("location:sanpham_commentxem.php"); 
} 
?>