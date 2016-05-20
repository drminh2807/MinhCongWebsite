<?php 
require_once('../db.php');  
require_once('function_quantri.php');  
$id_comment=$_GET['id_comment'];
 $Comment=Comment_ChiTiet($id_comment);
 $row_comment=mysql_fetch_array($Comment);
 if(isset($_POST['btnChinh'])==true){ 
   Comment_Chinh($id_comment); 
header("location: sanpham_commentxem.php");

}

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
	font-size: 18px;
}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="550" border="1" align="center">
    <tr bgcolor="#0000FF">
      <th height="46" colspan="2" scope="col"><span class="style1">SẢN PHẨM COMMENT CHỈNH</span></th>
    </tr>
    <tr>
      <td width="163" align="center">idSP</td>
      <td width="371" align="left"><label>
        <input type="text" name="idSP" id="idSP" value="<?php echo $row_comment['idSP']?>" />
      </label></td>
    </tr>
    <tr>
      <td align="center">HoTen</td>
      <td align="left"><label>
        <input type="text" name="hoten" id="hoten" value="<?php echo $row_comment['hoten']?>"/>
      </label></td>
    </tr>
    <tr>
      <td align="center">Nội Dung</td>
      <td align="left"><label>
        <textarea name="noidung" id="noidung" cols="45" rows="5"><?php echo $row_comment['noidung']?></textarea>
      </label></td>
    </tr>
    <tr>
      <td align="center">Email</td>
      <td align="left"><label>
        <input type="text" name="email" id="email" value="<?php echo $row_comment['email']?>" />
      </label></td>
    </tr>
    <tr>
      <td align="center">Tiệu Đề</td>
      <td align="left"><label>
        <input type="text" name="tieude" id="tieude" value="<?php echo $row_comment['tieude']?>" />
      </label></td>
    </tr>
    <tr>
      <td align="center">Ngày ComMent</td>
      <td align="left"><label>
        <input type="text" name="ngay" id="ngay" value="<?php echo $row_comment['ngay_comment']?>" />
      </label></td>
    </tr>
    <tr>
      <td align="center">Kiểm-Duyệt</td>
      <td align="left">
       
          <input type="radio" name="kiemduyet" value="1" id="kiemduyet_1" <?php if($row_comment[kiem_duyet]==1) echo "checked=checked";  ?> />
         
          Duyệt</label>
       
          <label>
          <input type="radio" name="kiemduyet" value="0" id="kiemduyet_0" <?php if($row_comment[kiem_duyet]==0) echo "checked=checked";  ?> />
           khong Duyệt</label>      </td>
    </tr>
    <tr>
      <td colspan="2" align="center"><label>
        <input type="submit" name="btnChinh" id="btnChinh" value="Đồng Ý" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
