<?php
   function ChungLoai($AnHien){
   $sql="select idCL,TenCL from ChungLoai where AnHien=$AnHien";
   $kq=mysql_query($sql);
   return $kq;
  
  }
  function LoaiSP($AnHien,$idCL){
   $sql="select idCL,TenLoai,idLoai from LoaiSP where AnHien=$AnHien and idCL=$idCL";
   $kq=mysql_query($sql);
   return $kq;
  }
  function SPMoi($AnHien,$Limit){
	$sql="select idSP,TenSP,UrlHinh,Gia,MoTa from SanPham where AnHien=$AnHien Order By idSP DESC limit 0,$Limit";
   $kq=mysql_query($sql);
   return $kq;
  
  }
   function SPCacCap($AnHien,$Limit,$Gia1,$Gia2){
	$sql="select idSP,TenSP,UrlHinh,Gia from SanPham where AnHien=$AnHien and (Gia>$Gia1 or $Gia1=-1) and (Gia<$Gia2 or $Gia2=-1) order by idSP DESC limit 0,$Limit";
   $kq=mysql_query($sql);
   return $kq;
  
  }
   function TongSanPhamTrongLoai($AnHien,$idLoai){ 
    $sanpham=mysql_query("select * from sanpham  where idLoai=$idLoai order by idSP asc"); 
    //tinh tong so tin 
    return mysql_num_rows($sanpham); 
  
 } 

  function SPTrongLoai($AnHien,$idLoai,$from,$sosp1trang){
   $sql="select idSP,TenSP,UrlHinh,Gia,MoTa from SanPham where AnHien=$AnHien and idLoai=$idLoai limit $from,$sosp1trang";
   $kq=mysql_query($sql);
   return $kq;
  
  }
    function ChiTietSP($AnHien,$idSP){
   $sql="select idSP,TenSP,Gia,UrlHinh,MoTa,BaiViet,idLoai from SanPham where AnHien=$AnHien and idSP=$idSP";
   $kq=mysql_query($sql);
   return $kq;
  }
   function ChiTietSPThuocTinh($idSP){
 $sql="select * from SanPham_ThuocTinh where idSP=$idSP";
   $kq=mysql_query($sql);
   return $kq;
  }
     function ChiTietSPVideo($idSP){
 $sql="select * from SanPham_Youtube where idSP=$idSP";
   $kq=mysql_query($sql);
   return $kq;
  }
  function Gui_Comment($idSP){
    $hoten=$_POST['hoten2'];
	 $email=$_POST['email2'];
	 $tieude=$_POST['tieude2'];
	 $noidung=$_POST['noidung2'];
	 $Ngay=$_POST['Ngay'];
	 $hoten=trim(strip_tags($hoten));
	 $email=trim(strip_tags($hoten));
	 $tieude=trim(strip_tags($tieude));
	 $noidung=trim(strip_tags($noidung));
		
	  if (get_magic_quotes_gpc()== false)	{
	  
	  $hoten = mysql_real_escape_string($hoten);
	  $email = mysql_real_escape_string($email);
	  $tieude = mysql_real_escape_string($tieude);
	  $noidung= mysql_real_escape_string($noidung);
	  }
    /*
	  $Ngay = trim(strip_tags($Ngay)); //17/11/2010
		if (get_magic_quotes_gpc()== false) {
			$lang = mysql_real_escape_string($lang);
			$TieuDe = mysql_real_escape_string($TieuDe);
			$TomTat = mysql_real_escape_string($TomTat);
			$Content= mysql_real_escape_string($Content);
			$urlHinh = mysql_real_escape_string($urlHinh);
			$Ngay = mysql_real_escape_string($Ngay);
		}
    */
		//kiểm tra ngày	
		$Ngay_arr = explode("/",$Ngay); // 
		if (count($Ngay_arr)==3) {
			$d = $Ngay_arr[0]; //17
			$m = $Ngay_arr[1]; //11
			$y = $Ngay_arr[2]; //2010
			if (checkdate($m,$d,$y)==false) $Ngay = date("Y-m-d");
			else $Ngay = $y."-".$m."-".$d;
		}
		else $Ngay=date("Y-m-d");
		
		$sql="INSERT INTO sanpham_comment(
idSP,hoten,email,tieude,noidung,ngay_comment)VALUES ($idSP, '$hoten', '$email', '$tieude', '$noidung', '$Ngay')";
          $kq=mysql_query($sql);
		  return $kq;
       
	  }
	  function SanPhamCungLoai($AnHien,$idLoai,$idSP){
	     $sql="select idSP,TenSP,Gia,UrlHinh from SanPham where AnHien=$AnHien and idSP<>$idSP and idLoai=$idLoai order by idSP DESC limit 0,3";
   $kq=mysql_query($sql);
   return $kq;
	  }
	 ////////////////// 
	  function ThemDonHang(){
        $idUser=$_POST['idUser'];
        $TenNguoiNhan=$_POST['TenNguoiNhan'];
        $TinhTrang=$_POST['TinhTrang'];
        $ThoiDiemDatHang=$_POST['ThoiDiemDatHang'];
        $ThoiDiemGiaoHang=$_POST['ThoiDiemGiaoHang'];
        $NgayGiaoHang = trim(strip_tags($ThoiDiemGiaoHang));
        $DiaDiemGiaoHang=$_POST['DiaDiemGiaoHang'];
        $GhiChu=$_POST['GhiChu'];
        settype($idUser,"int");
    if (get_magic_quotes_gpc()== false) {
        $TenNguoiNhan = mysql_real_escape_string($TenNguoiNhan);
        $TinhTrang = mysql_real_escape_string($TinhTrang);
         $DiaDiemGiaoHang = mysql_real_escape_string($DiaDiemGiaoHang);
        $GhiChu=mysql_real_escape_string($GhiChu);
         }
        $Ngay_arr = explode("/",$NgayGiaoHang); // array(16,07,2011)
    if (count($Ngay_arr)==3) {
        $d = $Ngay_arr[0]; //17
        $m = $Ngay_arr[1]; //11
        $y = $Ngay_arr[2]; //2010
        if (checkdate($m,$d,$y)==false) $NgayGiaoHang = date("Y-m-d");
        else $NgayGiaoHang = $y."-".$m."-".$d;
    }
    else $NgayGiaoHang=date("Y-m-d");

 $sql="Insert into donhang (idUser,ThoiDiemDatHang,ThoiDiemGiaoHang,TenNguoiNhan,DiaDiemGiaoHang,TinhTrang,GhiChu)values(
$idUser,'$ThoiDiemDatHang','$NgayGiaoHang','$TenNguoiNhan','$DiaDiemGiaoHang','$TinhTrang','$GhiChu')";
    mysql_query($sql) or die(mysql_error());    
    
    }  
	
	function LuuDonHangChiTiet (){
        $idDH=mysql_insert_id();//lay idDH mới nhất
        if (isset($_SESSION['daySoLuong']))
        while( key($_SESSION['daySoLuong'])!= null){
            $idSP=key($_SESSION['daySoLuong']);    
            $soluong=current($_SESSION['daySoLuong']);
            $gia=current($_SESSION['dayDonGia']);
        
            $sql="insert into DONHANGCHITIET values ('',$idDH,$idSP,$soluong,$gia)";
            mysql_query($sql);
        
            next($_SESSION['daySoLuong']); 
        }//dong vong lap
    
    }  
?>