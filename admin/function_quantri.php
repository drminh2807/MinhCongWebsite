<!-- function -->
<?php
function DanhSachSanPham()  
{  
    $qr = "SELECT sanpham.idSP,TenSP,TenCL,TenLoai,MoTa,urlHinh,sanpham.AnHien from sanpham,chungloai,loaisp where sanpham.idCL=chungloai.idCL and sanpham.idLoai=loaisp.idLoai Order By sanpham.idSP DESC";  
    return mysql_query($qr);  
} 
function DanhSachChungLoai()  
{  
    $qr = "select * from ChungLoai";  
    return mysql_query($qr);  
} 
function DanhSachComment()   
{   
    $qr = "select id_comment,sanpham.TenSP,hoten,noidung,email,tieude,noidung,ngay_comment,kiem_duyet from SanPham_Comment,sanpham where SanPham_Comment.idSP=sanpham.idSP";   
    return mysql_query($qr); 
} 
function DanhSachVideo()   
{   
    $qr = "select id_youtube,sanpham.TenSP,value,stt,sanpham_youtube.anhien,sanpham.idSP from sanpham_youtube,sanpham where sanpham_youtube.idSP=sanpham.idSP ORDER BY sanpham.tenSP ASC  ";   
    return mysql_query($qr); 
} 
function Video_Xoa($id_youtube)    
{    
     $id_youtube=$_GET['id_youtube']; settype($id_youtube, "int");  
      
        $sql="DELETE FROM sanpham_youtube WHERE id_youtube=$id_youtube";  
        return mysql_query($sql) ;  
}

function Comment_Xoa($id_comment)   
{   
     $id_comment=$_GET['id_comment']; settype($id_comment, "int"); 
     
        $sql="DELETE FROM sanpham_comment WHERE id_comment=$id_comment"; 
        return mysql_query($sql) ; 
}

function DanhSachLoaiSP()  
{  
    $qr = "SELECT idLoai, ChungLoai.TenCL, TenLoai, LoaiSP.ThuTu, LoaiSP.AnHien
FROM LoaiSP, ChungLoai
WHERE LoaiSP.idCL = ChungLoai.idCL";  
    return mysql_query($qr);  
} 
function ChungLoai_Xoa($idCL)  
{  
 	$idCL=$_GET['idCL']; settype($idCL, "int");
	
		$sql="DELETE FROM chungloai WHERE idCL=$idCL";
		return mysql_query($sql) ;
} 
function ChungLoai_Them()
{
	$TenCL= $_POST["TenCL"];
	$ThuTu = $_POST["ThuTu"];
	$AnHien = $_POST["AnHien"];
	
	settype($AnHien,"int");
	settype($ThuTu,"int");
	 $qr = "INSERT INTO ChungLoai VALUES(null, '$TenCL',$ThuTu, $AnHien)";
	mysql_query($qr);
}
function ChungLoai_Chinh($idCL)
{
	$TenCL= $_POST["TenCL"];
	$ThuTu = $_POST["ThuTu"];
	$AnHien = $_POST["AnHien"];
	settype($AnHien,"int");
	settype($ThuTu,"int");
	 $qr = "update ChungLoai set TenCL='$TenCL',ThuTu=$ThuTu,AnHien=$AnHien where idCL=$idCL" ;
	mysql_query($qr);
}
function LoaiSP_Chinh($idLoai)
{
    $idCL=$_POST['chungloai'];
	$TenLoai= $_POST["TenLoai"];
	$ThuTu = $_POST["ThuTu"];
	$AnHien = $_POST["AnHien"];
	settype($AnHien,"int");
	settype($ThuTu,"int");
	  $qr = "update LoaiSP set idCL=$idCL,TenLoai='$TenLoai',ThuTu=$ThuTu,AnHien=$AnHien where idLoai=$idLoai" ;
	mysql_query($qr);
}
function ChungLoai_ChiTiet($idCL){

$qr="select * from ChungLoai where idCL=$idCL";
return mysql_query($qr);

}

function LoaiSP_ChiTiet($idLoai){

$qr="select * from LoaiSP where idLoai=$idLoai";
return mysql_query($qr);
}

function LoaiSP_Xoa($idCL)   
{   
     $idLoai=$_GET['idLoai']; settype($idLoai, "int"); 
     
        $sql="DELETE FROM loaisp WHERE idLoai=$idLoai"; 
        return mysql_query($sql) ; 
}
function LoaiSP_Them() 
{ 
    $TenLoai= $_POST["TenLoai"]; 
	$idCL=$_POST['chungloai'];
    $ThuTu = $_POST["ThuTu"]; 
    $AnHien = $_POST["AnHien"];
	 
      settype($idCL,"int"); 
    settype($AnHien,"int"); 
    settype($ThuTu,"int"); 
    $qr = "INSERT INTO LoaiSP VALUES(null,$idCL,'$TenLoai',$ThuTu, $AnHien)"; 
    mysql_query($qr);    
} 

function XoaSP(){
	$idSP=$_GET['idSP']; settype($idSP, "int");
	
		$sql="DELETE FROM sanpham WHERE idSP=$idSP";
		return mysql_query($sql) ;	
}

function ThemSanPham()
{
	$TenSP = $_POST["TenSP"];
	$idCL = $_POST["ChungLoai"];
	$idLoai = $_POST["LoaiSP"];
	$MoTa = $_POST["MoTa"];
	$Gia = $_POST["Gia"];
	$urlHinh = $_POST["urlHinh"];
	$BaiViet = $_POST["BaiViet"];
	$GhiChu = $_POST["GhiChu"];
	$SoLuongTon = $_POST["SoLuongTon"];
	$AnHien = $_POST["AnHien"];
	$Ngay=$_POST["NgayCapNhat"];
	$Ngay_arr = explode("/",$Ngay); // array(17,11,2010)
        $d = $Ngay_arr[0]; //17
        $m = $Ngay_arr[1]; //11
        $y = $Ngay_arr[2]; //2010
        if (checkdate($m,$d,$y)==false) $Ngay = date("Y-m-d");
        else $Ngay = $y."-".$m."-".$d; 
	settype($ChungLoai,"int");
	settype($LoaiSP,"int");
	settype($Gia,"int");
	settype($SoLuongTon,"int");
	settype($AnHien,"int");
	
	$qr = "INSERT INTO sanpham VALUES(null,$idLoai,$idCL,'$TenSP','$MoTa','$Ngay',$Gia,'$urlHinh','$BaiViet',null,$SoLuongTon,'$GhiChu',null,$AnHien)";
	mysql_query($qr);
}
function ChungLoai(){
    $qr="select * from chungloai";
	return mysql_query($qr);
}
function LoaiSP($idCL){
    $qr="select * from loaisp where idCL=$idCL";
	return mysql_query($qr);
}
function ChinhSanPham($idSP)
{
	     $idSP=$_GET['idSP'];
	$TenSP = $_POST["TenSP"];
	$idCL = $_POST["ChungLoai"];
	$idLoai = $_POST["LoaiSP"];
	$MoTa = $_POST["MoTa"];
	$Gia = $_POST["Gia"];
	$urlHinh = $_POST["urlHinh"];
	$BaiViet = $_POST["BaiViet"];
	$GhiChu = $_POST["GhiChu"];
	$SoLuongTon = $_POST["SoLuongTon"];
	$AnHien = $_POST["AnHien"];
	// $Ngay=$_POST["NgayCapNhat"];
	// $Ngay_arr = explode("/",$Ngay); // array(17,11,2010)
	// 	$d = $Ngay_arr[0]; //17
	// 	$m = $Ngay_arr[1]; //11
	// 	$y = $Ngay_arr[2]; //2010
	// 	if (checkdate($m,$d,$y)==false) $Ngay = date("Y-m-d");
	// 	else $Ngay = $y."-".$m."-".$d;
	settype($ChungLoai,"int");
	settype($LoaiSP,"int");
	settype($Gia,"int");
	settype($SoLuongTon,"int");
	settype($AnHien,"int");
	settype($idSP,"int");
	
	$qr = "UPDATE sanpham set idLoai=$idLoai,idCL=$idCL,TenSP='$TenSP',MoTa='$MoTa',
	NgayCapNhat='$Ngay',Gia=$Gia,UrlHinh='$urlHinh',baiviet='$BaiViet',SoLuongTonKho=$SoLuongTon,GhiChu='$GhiChu',AnHien=$AnHien where idSP=$idSP";
	mysql_query($qr);
}
function ChiTietSanPham($idSP) 
{ 
    $qr = "SELECT * FROM sanpham WHERE idSP=$idSP"; 
    return mysql_query($qr); 
}
function Comment_Hienchitiet($id_comment){
 
$qr="select id_comment,sanpham.TenSP,hoten,noidung,email,tieude,noidung,ngay_comment,kiem_duyet from SanPham_Comment,sanpham where SanPham_Comment.idSP=sanpham.idSP and id_comment=$id_comment";
return mysql_query($qr);
}
function Comment_Chinh($id_comment){

    
	$idSP = $_POST["idSP"];
	$HoTen = $_POST["hoten"];
	$NoiDung = $_POST["noidung"];
	$Email= $_POST["email"];
	$TieuDe= $_POST["tieude"];
	$Ngay = $_POST["ngay"];
	$kiemduyet=$_POST['kiemduyet'];
	settype($idSP,"int");
	settype($kiemduyet,"int");
	$Ngay_arr = explode("/",$Ngay); // array(17,11,2010)
		$d = $Ngay_arr[0]; //17
		$m = $Ngay_arr[1]; //11
		$y = $Ngay_arr[2]; //2010
		if (checkdate($m,$d,$y)==false) $Ngay = date("Y-m-d");
		else $Ngay = $y."-".$m."-".$d;
		
	$qr = "UPDATE sanpham_comment set idSP=$idSP,hoten='$HoTen',email='$Email',tieude='$TieuDe',noidung='$NoiDung',ngay_comment='$Ngay',kiem_duyet=$kiemduyet where id_comment=$id_comment";
	mysql_query($qr);
}
function Comment_ChiTiet($id_comment){
 $qr="select * from sanpham_comment where id_comment=$id_comment";
 return mysql_query($qr);

}
function Video_Them() 
{ 
    $idSP=$_POST['idSP'];
    $value= $_POST['value']; 
    $stt = $_POST['stt']; 
    $AnHien = $_POST['anhien']; 
     
    settype($AnHien,"int"); 
    settype($stt,"int"); 
	settype($idSP,"int"); 
    $qr = "INSERT INTO sanpham_youtube VALUES(null, $idSP,'$value',null,$stt, $AnHien)"; 
  
    mysql_query($qr);    
} 

function Video_Chinh($id_youtube) 
{ 
    $idSP=$_POST['idSP'];
    $value= $_POST["value"]; 
    $stt = $_POST["stt"]; 
    $AnHien = $_POST["anhien"]; 
     $qr = "update sanpham_youtube set idSP=$idSP,value='$value',stt=$stt,anhien=$AnHien where id_youtube=$id_youtube" ; 
    mysql_query($qr); 
} 
// function ChungLoai_ChiTiet($idCL){ 
// $qr="select * from ChungLoai where idCL=$idCL"; 
// return mysql_query($qr); 
// } 
function Video_ChiTiet($id_youtube){  

$qr="select * from sanpham_youtube where id_youtube=$id_youtube";  
return mysql_query($qr);  


}
function Admin_DangNhap($username, $password)  
{
	$username = trim(mysql_real_escape_string($username));
    $password = trim(mysql_real_escape_string($password));
    $qr="select * from users where username='$username' and password='$password' and idGroup='1' " ;
	return mysql_query($qr);
} 

   function DonHang(){
   $sql=" select idDH,idUser,ThoiDiemDatHang,ThoiDiemGiaoHang,TenNguoiNhan,DiaDiemGiaoHang,TinhTrang,GhiChu from donhang order by tinhtrang ";
  	
   return mysql_query($sql);
  }
	function DonHang_chinh($idCL){
	 // $ThuTu = $_POST["ThuTu"];
	 $TT = $_POST['AnHien'];
	
	settype($TT,"int");
	 $qr = "UPDATE donhang SET tinhtrang = '$TT' where idDH='$idCL' ";
	mysql_query($qr);
}
function DonHang_Chitiet($idDH){
	 $qr="select DonHangChitiet.*,sanpham.TenSP,sanpham.urlHinh from DonHangChitiet,sanpham where DonHangChitiet.idDH=75 and sanpham.idsp=donhangchitiet.idsp";
	 return mysql_query($qr);
}
?>