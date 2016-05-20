<? session_start();?>
<?php require_once('db.php'); ?>

<?php
$idSP = "-1";
if (isset($_GET['idSP'])) $idSP = $_GET['idSP'];
if (settype($idSP, "integer")==false) exit(); 


$sql= "SELECT * FROM sanpham WHERE idSP = $idSP";
$sanpham = mysql_query($sql) or die(mysql_error());
$row_sanpham = mysql_fetch_assoc($sanpham);
?>
<? 	if (isset($_SESSION['daySoluong'])==false) $_SESSION['daySoluong']=array();
	if (isset($_SESSION['dayTenSP'])==false) $_SESSION['dayTenSP']=array();
	if (isset($_SESSION['dayDongia'])==false) $_SESSION['dayDongia']=array();
	
	$soluong=(isset($_GET['soluong'])==true)?$_GET['soluong']:1;
	if ($soluong>100) $soluong=100;
	if ($soluong<=0) {
		unset($_SESSION['daySoluong'][$idSP]); //xoa phan tu ung voi $idSP user chon
		unset($_SESSION['dayDongia'][$idSP]);
		unset($_SESSION['dayTenSP'][$idSP]);
	}
	
	else if ($idSP>0){
		if (isset($_GET['update'])==true) $_SESSION['daySoluong'][$idSP]=$soluong;			
		else  $_SESSION['daySoluong'][$idSP]+=$soluong;
		$_SESSION['dayTenSP'][$idSP]=$row_sanpham['TenSP'];
		$_SESSION['dayDongia'][$idSP]=$row_sanpham['Gia'];
	}

?>
<? include "hiengiohang.php";?>