<?php 
require_once('../db.php');  
require_once('function_quantri.php');  
$Comment=DanhSachComment(); 
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
    font-weight: bold; 
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
    <th colspan="9" align="center" scope="col"><span class="style1">DANH SÁCH SẢN PHẨM COMMENTID</span></th>
  </tr>
  <tr align="center" class="style2">
    <td height="46">IDCOMMENT</td>
    <td>TENSP</td>
    <td>HOTEN</td>
    <td>EMAIL</td>
    <td>TIÊU ĐỀ</td>
    <td>NỘI DUNG</td>
    <td>NGÀY</td>
    <td>DUYỆT</td>
    <td>&nbsp;</td>
  </tr>
  <?php while($row_comment=mysql_fetch_array($Comment)){ ?>
  <tr align="center">
    <td height="46"><?php echo $row_comment['id_comment']?></td>
    <td><?php echo $row_comment['TenSP']?></td>
    <td><?php echo $row_comment['hoten']?></td>
    <td><?php echo $row_comment['email']?></td>
    <td><?php echo $row_comment['tieude']?></td>
    <td><?php echo $row_comment['noidung']?></td>
    <td><?php echo $row_comment['ngay_comment']?></td>
    <td><?php echo $row_comment['kiem_duyet']?></td>
    <td><a href="comment_xoa.php?id_comment=<?php echo $row_comment['id_comment']?>">Xoá</a>-<a href="comment_chinh.php?id_comment=<?php echo $row_comment['id_comment']?>">Chỉnh</a></td>
  </tr>
  <?php }?>
</table>
</body>
</html>
