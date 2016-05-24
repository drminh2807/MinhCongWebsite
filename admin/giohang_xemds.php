<?php
require_once('../db.php'); 
require_once('function_quantri.php'); 
$DSDonHang=DonHang();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-size: 24px;
}
.style2 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="950" border="1" align="center">
  <tr bgcolor="#0000FF">
    <td colspan="9" align="center"><span class="style1">Danh Sách Giỏ Hàng</span></td>
  </tr>
  <tr align="center" class="style2">
    
    <td class="style2">idDonHang</td>
    <td >idUser</td>
    <td>ThoiDiemDatHang</td>
    <td>ThoiDiemGiaoHang</td>
    <td>TenNguoiNhan</td>
    <td>DiaDiemGiaoHang</td>
    <td>TinhTrang</td>
    <td>GhiChu</td>
   <!--  <td><a href="chungloai_them.php">Thêm</a></td>
  </tr> -->
  <?php while($row_giohang=mysql_fetch_array($DSDonHang)){ ?>
  <tr align="center">
    <td height="43"><?php echo $row_giohang['idDH']?></td>
    <td><?php echo $row_giohang['idUser']?></td>
    <td><?php echo $row_giohang['ThoiDiemDatHang']?></td>
    <td><?php echo $row_giohang['ThoiDiemGiaoHang']?></td>
    <td><?php echo $row_giohang['DiaDiemGiaoHang']?></td>
    <td><?php echo $row_giohang['TenNguoiNhan']?></td>
    <td><?php echo $row_giohang['TinhTrang']?></td>

    <td><!-- <a href="donhang_chinh.php?idDonHang=<?php echo $row_chungloai['idDonHang']?>">Xóa</a> -->
      <a href="giohang_chinh.php?idDH=<?php echo $row_giohang['idDH']?>&tinhtrang=<?php echo $row_giohang['TinhTrang']?>">Chi Tiết</a></td>
  </tr>
  <?php  }?>
</table>
</body>
</html>
