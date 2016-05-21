<table width="300" border="1"  align="center" cellpadding="3" cellspacing="0">
  <tr>
    <th>TÊN SP</th> <th>SL</th> <th>TIỀN</th>
  </tr>
  <?php if (isset($_SESSION['daySoluong']))
  while( key($_SESSION['daySoluong'])!= null){
   $idSP=key($_SESSION['daySoluong']);
   $tensp=current($_SESSION['dayTenSP']);
   $soluong=current($_SESSION['daySoluong']);
   $dongia=current($_SESSION['dayDongia']);
   $tongsoluong = isset($tongsoluong) ? $tongsoluong + $soluong : $soluong;     
   $tien = $dongia*$soluong;
   $tongtien = isset($tongtien) ? $tongtien + $tien : $tien
   ?>
   <tr>
    <td><?php echo $tensp;?>&nbsp;</td>
    <td><?php echo $soluong;?>&nbsp;</td>
    <td><?php echo $tien;?>&nbsp;</td>
  </tr>
  <?php 	next($_SESSION['daySoluong']);
  next($_SESSION['dayDongia']);
  next($_SESSION['dayTenSP']);		
  ?>
  <?php } ?>
  <tr class="tongket">
    <td align="center">Tổng</td>
    <td align="center"><?php echo $tongsoluong;?>&nbsp;</td>
    <td align="center"><?php echo $tongtien?>&nbsp;</td>
  </tr>
</table>
  
