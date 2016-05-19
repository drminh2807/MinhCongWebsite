<?php 
require_once('../db.php');  
require_once('function_quantri.php'); 
$id_youtube=$_GET['id_youtube']; 
// $idCL = $_GET['idCL'];
// /$ChungLoaiChiTiet=ChungLoai_ChiTiet($idCL); 
$VideoChiTiet = Video_ChiTiet($id_youtube);
$row_videochungloai=mysql_fetch_array($VideoChiTiet); 

?>
<?php  
if(isset($_POST['btnChinh'])){ 
    Video_Chinh($id_youtube); 
    header("location:sanpham_videoxem.php"); 
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
    <tr class="style1">
      <th height="41" colspan="2" align="center" bgcolor="#0000FF" scope="col">SẢN PHẨM-VIDEO CHỈNH</th>
    </tr>
    <tr>
      <td width="165" align="center">idSP</td>
      <td width="369" align="left"><label>
        <select name="idSP" id="idSP">
          <!-- <option value="0">--Chọn Sản Phẩm--</option>
          <?php
		   $ListSP=DanhSachSanPham(); 
		   while($row_list=mysql_fetch_array($ListSP)){ ?>

          <option value="<?php echo $row_list['idSP'];?>"><?php echo $row_list['TenSP'];?></option>
          <?php }?> -->
          <?php $ListSP=DanhSachVideo(); 
             while($row_list=mysql_fetch_array($ListSP)){ 
             $s=""; 
            if ($row_list['idSP']==$row_videochungloai['idSP']) $s="selected='selected'"; 
          ?> 
          <option value="<?php echo $row_list['idSP']?>" <?php echo $s; ?> > <?php echo $row_list['idSP']?></option> 
          <?php }?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td height="35" align="center">Value</td>
      <td align="left"><label>
        <input type="text" name="value" id="value" value="<?php echo $row_videochungloai['value'] ?>" />
      </label></td>
    </tr>
    <tr>
      <td height="34" align="center">Số Thứ Tự</td>
      <td align="left"><label>
        <input type="text" name="stt" id="stt"  value="<?php echo $row_videochungloai['stt'] ?>" />
      </label></td>
    </tr>
    <tr>
      <td height="40" align="center">Ẩn Hiện</td>
      <td align="left">
      
          <input type="radio" name="anhien" value="0" id="anhien_0"  <?php if($row_videochungloai['anhien']==0) echo "checked=checked";  ?> />
          An
      
          <input type="radio" name="anhien" value="1" id="anhien_1"  <?php if($row_videochungloai['anhien']==1) echo "checked=checked";  ?> />
          Hien</label>
      
     </td>
    </tr>
    <tr>
      <td colspan="2" align="center"><label>
        <input type="submit" name="btnChinh" id="btnChinh" value="Chỉnh" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
