<?php 
require_once('../db.php');  
require_once('function_quantri.php');  
if(isset($_POST['btnThem'])){ 
    LoaiSP_Them(); 
    header("location:loaisp_xemds.php"); 
} 
$ListChungLoai=DanhSachChungLoai();
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
      <th height="39" colspan="2" align="center" bgcolor="#0000FF" scope="col"><span class="style1"> LOẠI SP THÊM</span></th> 
    </tr> 
    <tr> 
      <td width="148" height="36" align="center">TÊNLOAI</td> 
      <td width="386" align="left"><label> 
        <input type="text" name="TenLoai" id="TenLoai" /> 
      </label></td> 
    </tr> 
    <tr>
      <td height="34" align="center">TENCL</td>
      <td align="left"><label>
        <select name="chungloai" id="chungloai">
          <option value="0">Chọn Chủng Loại</option>
          <?php while($row_listcl=mysql_fetch_array($ListChungLoai)){?>
          <option value="<?php echo $row_listcl['idCL']?>"><?php echo $row_listcl['TenCL']?></option>
          <?php }?>
        </select>
      </label></td>
    </tr>
    <tr> 
      <td height="34" align="center">THỨ TỰ</td> 
      <td align="left"><label> 
        <input type="text" name="ThuTu" id="ThuTu" /> 
      </label></td> 
    </tr> 
    <tr> 
      <td height="38" align="center">ẨN HIỆN</td> 
      <td align="left"><p> 
        <label> 
          <input type="radio" name="AnHien" value="0" id="AnHien_0" /> 
          An</label> 
       
        <label> 
          <input type="radio" name="AnHien" value="1" id="AnHien_1" /> 
          Hien</label> 
        
      </td> 
    </tr> 
    <tr> 
      <td colspan="2" align="center"><label> 
        <input type="submit" name="btnThem" id="btnThem" value="Thêm" /> 
      </label></td> 
    </tr> 
  </table> 
</form>

</body>
</html>
