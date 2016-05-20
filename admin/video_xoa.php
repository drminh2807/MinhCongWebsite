<?php   
ob_start();  
require_once('../db.php');   
require_once('function_quantri.php');   
?>  
<?php  

if (isset($_GET['id_youtube'])==true){  
    Video_Xoa($id_youtube);  
    header("location:sanpham_videoxem.php");  
}  
?>