<?php 
require_once('../db.php');  
require_once('function_quantri.php');  
$Video=DanhSachVideo(); 
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
    <th colspan="9" align="center" scope="col"><span class="style1">DANH SÁCH VIDEO SẢN PHẨM</span></th> 
  </tr> 
  <tr align="center" class="style2"> 
    <td width="170" height="46">IDYOUTUBE</td> 
    <td width="126">TENSP</td> 
    <td width="99">VALUE</td> 

    <td width="138">SOTHUTU</td> 
    <td width="117">ANHIEN</td> 
     
    <td width="128"><a href="video_them.php">THÊM</a></td> 
  </tr> 
  <?php while($row_video=mysql_fetch_array($Video)){ ?>
  <tr align="center"> 
    <td height="46"><?php echo $row_video['id_youtube']?></td> 
    <td><?php echo $row_video['TenSP']?></td> 
    <td><?php echo $row_video['value']?></td> 
   
    <td><?php echo $row_video['stt']?></td> 
    <td><?php echo $row_video['anhien']?></td> 
  
    <td><a href="video_xoa.php?id_youtube=<?php echo $row_video['id_youtube']?>">Xoá</a>-<a href="video_chinh.php?id_youtube=<?php echo $row_video['id_youtube']?>">Chỉnh</a></td> 
  </tr> 
  <?php  }?>
</table>

</body>
</html>