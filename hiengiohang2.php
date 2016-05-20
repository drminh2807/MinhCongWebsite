<table width="300" border="1"  align="center" cellpadding="3" cellspacing="0">
<tr>
      <th>TÊN SP</th> <th>SL</th> <th>TIỀN</th>
    </tr>
      <? if (isset($_SESSION['daySoluong']))
    	 while( key($_SESSION['daySoluong'])!= null){
			$idSP=key($_SESSION['daySoluong']);
			$tensp=current($_SESSION['dayTenSP']);
			$soluong=current($_SESSION['daySoluong']);
			$dongia=current($_SESSION['dayDongia']);
			$tongsoluong+=$soluong;			
			$tien=$dongia*$soluong;
			$tongtien+=$tien;	
	?>
    <tr>
      <td><? echo $tensp;?>&nbsp;</td>
      <td><? echo $soluong;?>&nbsp;</td>
      <td><? echo $tien;?>&nbsp;</td>
    </tr>
    <? 	next($_SESSION['daySoluong']);
		next($_SESSION['dayDongia']);
		next($_SESSION['dayTenSP']);		
	?>
    <? } ?>
    <tr class="tongket">
    <td align="center">Tổng</td>
    <td align="center"><? echo $tongsoluong;?>&nbsp;</td>
    <td align="center"><? echo $tongtien?>&nbsp;</td>
    </tr>
  </table>
  
