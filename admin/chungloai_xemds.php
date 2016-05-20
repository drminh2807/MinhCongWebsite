<?php
require_once('../db.php'); 
require_once('function_quantri.php'); 
$ChungLoai=DanhSachChungLoai();
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
    <td colspan="5" align="center"><span class="style1">Danh Sách Chủng Loại</span></td>
  </tr>
  <tr align="center" class="style2">
    <td class="style2">idCL</td>
    <td>Tên Chủng Loại</td>
    <td>Thứ Tự</td>
    <td>Ẩn Hiện</td>
    <td><a href="chungloai_them.php">Thêm</a></td>
  </tr>
  <?php while($row_chungloai=mysql_fetch_array($ChungLoai)){ ?>
  <tr align="center">
    <td height="43"><?php echo $row_chungloai['idCL']?></td>
    <td><?php echo $row_chungloai['TenCL']?></td>
    <td><?php echo $row_chungloai['ThuTu']?></td>
    <td><?php echo $row_chungloai['AnHien']?></td>
    <td><a href="chungloai_xoa.php?idCL=<?php echo $row_chungloai['idCL']?>">Xóa</a>-<a href="chungloai_chinh.php?idCL=<?php echo $row_chungloai['idCL']?>">Sửa</a></td>
  </tr>
  <?php  }?>
</table>
</body>
</html>
