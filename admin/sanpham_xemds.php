<?php
if (session_status() == PHP_SESSION_NONE || session_id() == '') 
  session_start();
require_once('../db.php');
require_once('function_quantri.php');
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
    <tr>
      <td colspan="8" align="center" bgcolor="#0000FF"><span class="style1">DANH SÁCH SẢN PHẨM </span></td>
    </tr>
    <tr>
      <td width="81" align="center"><span class="style2">idSP</span></td>
      <td width="102" align="center" class="style2">TenSP</td>
      <td width="163" align="center" class="style2">Chủng Loại</td>
      <td width="81" align="center" class="style2">LoạiSP</td>
      <td width="204" align="center" class="style2">Mô Tả</td>
      <td width="62" align="center" class="style2">UrlHinh</td>
      <td width="66" align="center" class="style2">An Hiện</td>
      <td width="139" align="center"><a href="sanpham_them.php">ThêmSP</a></td>
    </tr>
    <?php

  // $sanpham = DanhSachSanPham(); 
//   $link = mysql_connect ("localhost", "root", "") or  die("Khong ket noi duoc MySQL Database");
//   // Lựa chọn CSDL muốn sử dụng
// mysql_select_db("banghang", $link);
// mysql_query(" SET NAMES 'utf8'");
// $totalRows = 0;
//  $qr = "SELECT sanpham.idSP,TenSP,TenCL,TenLoai,MoTa,urlHinh,sanpham.AnHien from sanpham,chungloai,loaisp where sanpham.idCL=chungloai.idCL and sanpham.idLoai=loaisp.idLoai Order By sanpham.idSP DESC";  
// $result = mysql_query($qr, $link);
// $totalRows = mysql_num_rows($result);
    $result = DanhSachSanPham();
    if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling
  }
  while($row_sanpham = mysql_fetch_array($result)) 
  {
    ?>
    <tr>
      <td><?php echo $row_sanpham['idSP']; ?></td>
      <td><?php echo $row_sanpham['TenSP']; ?></td>
      <td><?php echo $row_sanpham['TenCL']; ?></td>
      <td><?php echo $row_sanpham['TenLoai']; ?></td>
      <td><?php echo $row_sanpham['MoTa']; ?></td>
      <td><img src="../upload/sanpham/hinhchinh/<?php echo $row_sanpham['urlHinh']; ?>" width="50px" /></td>
      <td><?php echo $row_sanpham['AnHien']; ?></td>
      <td><a href="sanpham_xoa.php?idSP=<?php echo $row_sanpham['idSP']; ?>">Xóa</a>
        ---<a href="sanpham_chinh.php?idSP=<?php echo $row_sanpham['idSP']; ?>">Sửa</a>
      </td>
    </tr>
    <?php } ?> 

  </table>
</body>
</html>