<?php 
require_once('../db.php');  
require_once('function_quantri.php');  
$idCL=$_GET['idDH'];
$DonHangChiTiet=DonHang_Chitiet($idCL);
$row_ctDonHang=mysql_fetch_array($DonHangChiTiet);
if(isset($_POST['btnChinh'])==true){
	DonHang_Chinh($idCL);
	header("location:Giohang_xemds.php");

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="550" border="1" align="center">
    <tr>
      <th height="39" colspan="10" align="center" bgcolor="#0000FF" scope="col"><span class="style1">Chi tiết</span></th>
    </tr>
    <tr>
      <td >idSPL</td>
      <td >TEN</td>
      <td >SoLuong</td>
      <td>Gia</td>
      <td >IMG</td>
     <!--  <td>ThoiDiemGiaoHang</td>
      <td>TenNguoiNhan</td>
      <td>DiaDiemGiaoHang</td>
      <td>TinhTrang</td>
      <td>GhiChu</td> -->
    </tr>
    <?php while($row_giohang=mysql_fetch_array($DonHangChiTiet)){ ?>
   <tr align="center">
      <td > <?php echo $row_ctDonHang['idSP'];?> </td>
      <td><?php echo $row_sanpham['TenSP']; ?></td>
       <td ><?php echo $row_ctDonHang['SoLuong'];?> </td>
      <td > <?php echo $row_ctDonHang['Gia'];?> </td>

      <td><img src="../upload/sanpham/hinhchinh/<?php echo $row_sanpham['urlHinh']; ?>" width="50px" /></td>
      </td>
    </tr>
  <?php  }?>
   
    <tr></tr>
    <tr>
      <td height="38" align="center">PAYED?</td>
      <td align="left"><p>
        <label>
          <input type="radio" name="AnHien" value="1" id="AnHien_0" <?php if($_GET['tinhtrang']==1) echo "checked=checked";  ?> />
         PAY</label>
      
        <label>
         <input type="radio" name="AnHien" value="0" id="AnHien_1" <?php if($_GET['tinhtrang']==0)  echo "checked=checked";  ?> />
       NOT PAY</label>
       
      </td>
      <td colspan="9" align="center"><label>
        <input type="submit" name="btnChinh" id="btnChinh" value="Xác nhận"
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
