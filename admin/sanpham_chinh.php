<?php 
session_start(); 
require_once('../db.php'); 
require_once('function_quantri.php'); 
$idSP = $_GET["idSP"]; 
settype($idSP, "int"); 
$sanpham = ChiTietSanPham($idSP); 
$row_sanpham= mysql_fetch_array($sanpham); 
if(isset($_POST["btnChinh"])) 
{  

    ChinhSanPham($idSP); 
    header("location:#"); 
} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="../jquery.js"></script>
<script>
$(document).ready(function(){
$("#ChungLoai").change(function(){
	var idCL=$(this).val();
	$("#LoaiSP").load("sanpham_layloaitin.php?idCL="+ idCL);
});
});
</script>
  <script> 
$(document).ready(function() { 
  var a=$('select.list option:selected').attr("value");//alert(a); 
    $("#LoaiSP").load("sanpham_layloaitin.php?idCL="+a,GanLoaiTin); 
}); 
function GanLoaiTin(){      
     var b=$("#loaispchinh").attr("value");  // lay value
    $("#LoaiSP").attr('value',b);  // gan value = b
}     

</script> 

<style type="text/css"> 
<!-- 
.style1 { 
    color: #FFFFFF; 
    font-weight: bold; 
    font-size: 18px; 
} 
.ten { 
    font-size: 16px; 
    font-weight: bold; 
    color: #000000; 
    padding-top: 10px; 
} 
.list { 
    background-color: #00FFFF; 
    width: 200px; 
    font-size: 16px; 
} 
--> 
</style>


<form id="form1" name="form1" method="post" action=""> 
  <table width="100%" border="1" align="center"> 
    <tr> 
      <td height="38" colspan="2" align="center" bgcolor="#0033FF"><p class="style1">        THÊM SẢN PHẨM</p> 
      </td> 
    </tr> 
    <tr> 
      <td width="223" class="ten"><p>TÊN SẢN PHẨM</p> 
          <p>&nbsp;</p></td> 
      <td width="561"><label> 
        <input name="TenSP" type="text" class="list" id="TenSP" value="<?php echo $row_sanpham['TenSP']?>" /> 
      </label></td> 
    </tr> 
    <tr> 
      <td class="ten"><p>CHỦNG LOẠI</p> 
          <p>&nbsp;</p></td> 
      <td><label> 
       <select name="ChungLoai" class="list" id="ChungLoai">
          <option value="0">Chon Chung Loai</option>
          <?php $chungloai=ChungLoai(); 
             while($row_chungloai=mysql_fetch_array($chungloai)){ 
             $s=""; 
            if ($row_chungloai['idCL']==$row_sanpham['idCL']) $s="selected='selected'"; 
          ?> 
          <option value="<?php echo $row_chungloai['idCL']?>" <?php echo $s;?>><?php echo $row_chungloai['TenCL']?></option> 
          <?php }?>

        </select>
      </label></td> 
    </tr> 
    <tr> 
      <td class="ten"><p>LOAISP</p> 
          <p>&nbsp;</p></td> 
      <td><select name="LoaiSP" class="list" id="LoaiSP"> 
            <option value="0">Chon Loai</option> 

            
          </select>
          <input name="loaispchinh" type="hidden" id="loaispchinh" value="<?php echo $row_sanpham['idLoai'];?>" />          
                  </td> 
    </tr> 
    <tr> 
      <td class="ten"><p>MÔ TẢ</p> 
          <p>&nbsp;</p></td> 
      <td><label> 
        <textarea class="mrk" name="MoTa" id="MoTa" cols="45" rows="5"><?php echo $row_sanpham['MoTa']?></textarea>
 
            </label></td> 
    </tr> 
    <tr> 
      <td class="ten"><p>GIÁ</p> 
          <p>&nbsp;</p></td> 
      <td><input name="Gia" type="text" class="list" id="Gia" value="<?php echo $row_sanpham['Gia']?>" /></td> 
    </tr> 
    <tr> 
      <td class="ten"><p>URLHINH</p> 
          <p>&nbsp;</p></td> 
   <td><input name="urlHinh" type="text" class="list" id="urlHinh" value="<?php echo $row_sanpham['UrlHinh']?>"/> 
         <input  onclick="mcImageManager.browse({fields:'urlHinh'});"  type="button" name="button" id="button" value="Chon File" /> 
     </td> 
    </tr> 
    <tr> 
      <td class="ten"><p>BAIVIET</p> 
          <p>&nbsp;</p></td> 
      <td><label> 
        <textarea class="mrk" name="BaiViet" id="BaiViet" cols="45" rows="5"><?php echo $row_sanpham['baiviet']?></textarea> 
         
      </label> 
</td> 
    </tr> 
     
    <tr> 
      <td class="ten"><p>SỐ LƯỢNG TỒN KHO</p> 
          <p>&nbsp;</p></td> 
      <td><input name="SoLuongTon" type="text" class="list" id="SoLuongTon" value="<?php echo $row_sanpham['SoLuongTonKho']?>"/></td> 
    </tr> 
    <tr> 
      <td class="ten"><p>GHI CHÚ</p> 
          <p>&nbsp;</p></td> 
         <td><input name="GhiChu" type="text" class="list" id="GhiChu" value="<?php echo $row_sanpham['GhiChu']?>" /></td>
    </tr> 
     <tr> 
      <td class="ten"><p>ẨN HIỆN</p> 
          <p>&nbsp;</p></td> 
      <td><p> 
         
        <input type="radio" name="AnHien" value="0" id="AnHien_0" <?php if($row_sanpham['AnHien']==0) echo "checked=checked";  ?> />
          Ẩn
      
        <input type="radio" name="AnHien" value="1" id="AnHien_1" <?php if($row_sanpham['AnHien']==1) echo "checked=checked";  ?> />
          Hiện 
     
      </p></td> 
    </tr>  
    <tr> 
      <td colspan="2" align="center" class="ten"><label> 
        <input name="NgayCapNhat" type="hidden" id="NgayCapNhat" value="{Ngay}" /> 
        <input type="submit" name="btnChinh" id="btnChinh" value="Chỉnh Sản Phẩm" /> 
      </label></td> 
    </tr> 
  </table> 
</form>
