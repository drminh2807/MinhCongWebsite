<? 
$idDH=mysql_insert_id();
if (isset($_SESSION['daySoluong']))
while( key($_SESSION['daySoluong'])!= null){
	$idSP=key($_SESSION['daySoluong']);	
	$soluong=current($_SESSION['daySoluong']);
	
	//Lấy giá của sp từ db để chắc chắn đó là giá mới nhất. Không nên lấy giá từ session
	$kq=mysql_query("select gia from SANPHAM where idSP=$idSP");
	$row=mysql_fetch_assoc($kq);
	$gia=$row['gia'];
	
	$sql="insert into DONHANGCHITIET values ('',$idDH,$idSP,$soluong,$gia)";
    mysql_query($sql);
	mysql_query("update SANPHAM set SoLanMua=SoLanMua+1 where idSP=$idSP");
	mysql_query("update SANPHAM set SoLuongTonKho=SoLuongTonKho-$soluong where idSP=$idSP");
	next($_SESSION['daySoluong']); 
 }
 ?>