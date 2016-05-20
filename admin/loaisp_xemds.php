<?php 
require_once('../db.php');  
require_once('function_quantri.php');  
$LoaiSP=DanhSachLoaiSP(); 
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
    <td colspan="6" align="center"><span class="style1">Danh Sách  Loại SP</span></td> 
  </tr> 
  <tr align="center" class="style2">
    <td class="style2">idLoai</td> 
    <td class="style2">TenCL</td> 
    <td>Tên  Loại</td> 
    <td>Thứ Tự</td> 
    <td>Ẩn Hiện</td> 
    <td><a href="loaisp_them.php">Thêm</a></td> 
  </tr> 
  <?php while($row_loaisp=mysql_fetch_array($LoaiSP)){ ?>
  <tr align="center">
    <td height="45"><?php echo $row_loaisp['idLoai']?></td> 
    <td><?php echo $row_loaisp['TenCL']?></td> 
    <td><?php echo $row_loaisp['TenLoai']?></td> 
    <td><?php echo $row_loaisp['ThuTu']?></td> 
    <td><?php echo $row_loaisp['AnHien']?></td> 
    <td><a href="loaisp_xoa.php?idLoai=<?php echo $row_loaisp['idLoai']?>">Xóa</a>-<a href="loaisp_chinh.php?idLoai=<?php echo $row_loaisp['idLoai']?>">Sửa</a></td> 
  </tr>
  <?php  }?> 
</table> 

</body>
</html>
