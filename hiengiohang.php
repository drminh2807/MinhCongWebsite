 <table width="100%" border="1" cellpadding="0" cellspacing="0">
 <tr>
 <td class="bg_giohang">TÊN SP</td> 
 <td class="bg_giohang">SỐ LƯỢNG</td> 
 <td class="bg_giohang">TIỀN</td>
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
 <td class="padding_giohang"><? echo $tensp;?></td>
 <td class="padding_giohang">
 <form onsubmit="return false;" action="chonsp.php" method=get name="formUpdate" 
 class="form" id="formUpdate">
 <input name="idSP" type="hidden" value="<? echo $idSP;?>" />
 <input name="soluong" size="2" id="soluong" value="<? echo $soluong;?>" />
 <img class="capnhatsoluong" idSP="<? echo $idSP;?>" src="images/refresh.gif" name="refresh" id="refresh" />
 <span style="margin:0"><img src="images/remove.gif" width="21" height="19" class="removesp" idSP="<? echo $idSP;?>"/></span>
 </form> </td>
 <td class="padding_giohang"><? echo $tien;?>&nbsp;</td>
 </tr>
 
 <? 	next($_SESSION['daySoluong']);
		next($_SESSION['dayDongia']);
		next($_SESSION['dayTenSP']);		
 ?>
 <? } ?>
 <tr>
 <td class="tongket">TỔNG TIỀN</td>
 <td class="tongket"><? echo $tongsoluong;?>&nbsp;</td>
 <td class="tongket"><? echo $tongtien?>&nbsp;</td>
 </tr>
 <tr>
 <td colspan="3" align="center" class="tongket">   <a href="index.php?page=muahang"><img class="abc" src="images/muahang.gif" border="0" /></a> </td>
 </tr>
 </table>
 

