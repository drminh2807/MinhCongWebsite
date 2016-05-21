<?php 
$SPMoi = SPMoi(1,6); 
$SPToolTip = SPMoi(1,6);
$SPSieuCap=SPCacCap(1,6,20000000,-1);
$SPToolTipSC = SPCacCap(1,6,20000000,-1);
$SPSinhVien=SPCacCap(1,6,0,5000000);
$SPToolTipSV = SPCacCap(1,6,0,5000000);
?>
<div id="sanpham">
  <table width="100%" border="0" id="sp">
    <tr>
      <td colspan="3" align="center" class="tieu">SẢN PHẨM MỚI</td>
    </tr>
    <tr>
    <?php
    $dem = 0;
    while ($row_sp=mysql_fetch_array($SPMoi)){$dem ++;
      ?>
      <td align="center"><?php echo $row_sp['TenSP'] ?><br />
          <a href="index.php?page=ChiTietSP&idSP=<?php echo $row_sp['idSP'] ?>" data-tooltip="sticky<?php echo $dem; ?>">
          <img src="upload/sanpham/hinhchinh/<?php echo $row_sp['UrlHinh'] ?>" width="70" height="70" border="0" /></a><br />
          <img src="img/new.gif" width="29" height="19" /><br />
        Gía : <span class="text"><?php echo number_format($row_sp['Gia'],2); ?></span> VNĐ<br />
        <a href="index.php?page=ChiTietSP&idSP=<?php echo $row_spcaocap['idSP'] ?>"><img border="0"  src="img/chitiet.png" width="70" height="25" />
        <a href="javascript:void(0)"><img border="0" class="dathang" idSP="<?php echo $row_sp['idSP'];?>"  src="img/mua.png" width="70" height="25" /></a></td>
        <?php if($dem==3) echo "</tr><tr>"; ?>
        <?php } ?>
    </tr>
  </table>

 <!-- code tooltip-->
   <?php $so=0; ?>
  <div id="mystickytooltip" class="stickytooltip">
  <div style="padding:5px">
  <?php while ($row_tooltip=mysql_fetch_assoc($SPToolTip)) { ?>
    <div id="sticky<?php echo $so+=1; ?>" class="atip" style="width:300px">
      <span style = "color:#FF0000; font-weight:bold"><?php echo $row_tooltip['TenSP']; ?></span><br/>
        <img class="pictip" src="upload/sanpham/hinhchinh/<?php echo $row_tooltip['UrlHinh'] ?>" width="100" hspace="10" vspace="5" align="left" /><?php echo $row_tooltip['MoTa']; ?>
        </div>
        <?php } ?>
        </div>
        <div class="stickystatus"></div>
  </div>
  <!-- end code tooltip-->  

<table width="100%" border="0" id="sp">
    <tr>
      <td colspan="3" align="center" class="tieu">SIÊU CẤP</td>
    </tr>
    <tr>
    <?php $dem = 0; while($row_spcaocap=mysql_fetch_array($SPSieuCap)) { $dem++; ?>
      <td align="center"><?php echo $row_spcaocap['TenSP'] ?><br />
          <img src="upload/sanpham/hinhchinh/<?php echo $row_spcaocap['UrlHinh'] ?>" width="70" height="70" border="0" /></a><br />
        Gía : <span class="text"><?php echo number_format($row_spcaocap['Gia'],2) ?></span> VNĐ<br />
        <a href="index.php?page=ChiTietSP&idSP=<?php echo $row_spcaocap['idSP'] ?>"><img border="0"  src="img/chitiet.png" width="70" height="25" /></a>
        <a href="javascript:void(0)"><img border="0" class="dathang" idSP="<?php echo $row_spcaocap['idSP'];?>"  src="img/mua.png" width="70" height="25" /></a></td>
      <?php if($dem==3) echo "</tr><tr>"; ?>
      <?php } ?>
    </tr>
  </table>
<table width="100%" border="0" id="sp">
    <tr>
      <td colspan="3" align="center" class="tieu">GIÁ SINH VIÊN</td>
    </tr>
    <tr>
    <?php $dem = 0; while($row_spsinhvien=mysql_fetch_array($SPSinhVien)) { $dem++; ?>
      <td align="center"><?php echo $row_spsinhvien['TenSP'] ?><br />
          <img src="upload/sanpham/hinhchinh/<?php echo $row_spsinhvien['UrlHinh'] ?>" width="70" height="70" border="0" /></a><br />
        Gía : <span class="text"><?php echo number_format($row_spsinhvien['Gia'],2) ?></span> VNĐ<br />
        <a href="index.php?page=ChiTietSP&idSP=<?php echo $row_spsinhvien['idSP'] ?>"><img border="0"  src="img/chitiet.png" width="70" height="25" /></a>
        <a href="javascript:void(0)"><img border="0" class="dathang" idSP="<?php echo $row_spsinhvien['idSP'];?>"  src="img/mua.png" width="70" height="25" /></a></td></td>
      <?php if($dem==3) echo "</tr><tr>"; ?>
      <?php } ?>
    </tr>
  </table>

  <p>&nbsp;</p>
