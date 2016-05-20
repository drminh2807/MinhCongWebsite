<? 
function LayGia($idSP) //Lấy giá của 1 sản phẩm 
{
	$gia=-1;
	settype($idSP,'int');
	if ($idSP<0) return $gia;	
	$kq=mysql_query("select gia from sanpham where idSP=$idSP");
	//echo "select gia from sanpham where idSP=$idSP";
	$row=mysql_fetch_assoc($kq) or die(mysql_error());
	$gia=$row['gia'];
	return $gia;
}

function Luu1ChiTietDonHang($idDH,$idSP, $SoLuong,$Gia) //Lưu 1 sản phẩm vào database
{
	if ($idDH<0) return;	
	$sql="insert into donhangchitiet (idDH, idSP,Soluong,Gia) values 
	($idDH, $idSP, $SoLuong,$Gia)";
	mysql_query($sql);
	settype($idSP,'int');
	mysql_query("update sanpham set SoLanMua=SoLanMua+1 where idSP=$idSP");
	mysql_query("update sanpham set SoLuongTonKho=SoLuongTonKho-$SoLuong where idSP=$idSP");
}

function ThemDonHang($url)
{
	//Code thêm 1 dơn hàng và lấy ra id don hàng mới
	if (isset($_POST["KT_Insert1"])==false)   return;
	$tmp1 = explode('/', $_POST['ThoiDiemDatHang']); //bien chuoi thanh day
	$yyyy1 = $tmp1[0];$mm1 = $tmp1[1];$dd1 = $tmp1[2];
	$tmp2 = explode('/', $_POST['ThoiDiemGiaohang']);
	$yyyy2 = $tmp2[0];$mm2 = $tmp2[1];$dd2 = $tmp2[2];
	
	$ThoiDiemDatHang = $dd1.'/'.$mm1.'/'.$yyyy1;
	$ThoiDiemGiaoHang = $dd2.'/'.$mm2.'/'.$yyyy2;
	  
	$insertSQL = sprintf("INSERT INTO donhang (idUser, thoidiemdathang, thoidiemgiaohang, tennguoinhan, diadiemgiaohang) VALUES (%s, %s, %s, %s, %s)",   
						   $_SESSION['kt_login_id'],
						   GetSQLValueString($ThoiDiemDatHang,"text"),
						   GetSQLValueString($ThoiDiemGiaoHang,"text"),
						   GetSQLValueString($_POST['TenNguoiNhan'], "text"), 
						   GetSQLValueString($_POST['DiaDiemGiaoHang'], "text")
						  ); 
	mysql_query($insertSQL) or die(mysql_error());  
	$lastID =mysql_insert_id(); //lay idDH moi chen
	$_SESSION['idDH']=$lastID;	
	header("Location:". $url); //chuyen toi trang mua hang xong
	exit();	 
}

?>