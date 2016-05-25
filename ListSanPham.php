<?php 
$SPMoi = SPMoi(1,6); 
$SPToolTip = SPMoi(1,6);
$SPSieuCap = SPCacCap(1,6,20000000,-1);
$SPToolTipSC = SPCacCap(1,6,20000000,-1);
$SPSinhVien = SPCacCap(1,6,0,5000000);
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
          <a href="index.php?page=ChiTietSP&idSP=<?php echo $row_sp['idSP']; ?>" data-tooltip="sticky<?php echo $dem; ?>">
          <img src="upload/sanpham/hinhchinh/<?php echo $row_sp['UrlHinh'] ?>" width="70" height="70" border="0" /></a><br />
          <img src="img/new.gif" width="29" height="19" /><br />
        Gía : <span class="text"><?php echo number_format($row_sp['Gia'],2); ?></span> VNĐ<br />
        <a href="index.php?page=ChiTietSP&idSP=<?php echo $row_sp['idSP']; ?>"><img border="0"  src="img/chitiet.png" width="70" height="25" />
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
      <td colspan="3" align="center" class="tieu">SẢN PHẨM SIÊU CẤP</td>
    </tr>
    <tr>
    <?php
    $demSC = 0;
    while ($row_sp_sieucap=mysql_fetch_array($SPSieuCap)){$demSC ++;
      ?>
      <td align="center"><?php echo $row_sp_sieucap['TenSP'] ?><br />
          <a href="index.php?page=ChiTietSP&idSP=<?php echo $row_sp_sieucap['idSP']; ?>" data-tooltip="sticky<?php echo $row_sp_sieucap; ?>">
          <img src="upload/sanpham/hinhchinh/<?php echo $row_sp_sieucap['UrlHinh'] ?>" width="70" height="70" border="0" /></a><br />
        Gía : <span class="text"><?php echo number_format($row_sp_sieucap['Gia'],2); ?></span> VNĐ<br />
        <a href="index.php?page=ChiTietSP&idSP=<?php echo $row_sp_sieucap['idSP']; ?>"><img border="0"  src="img/chitiet.png" width="70" height="25" />
        <a href="javascript:void(0)"><img border="0" class="dathang" idSP="<?php echo $row_sp_sieucap['idSP'];?>"  src="img/mua.png" width="70" height="25" /></a></td>
        <?php if($demSC==3) echo "</tr><tr>"; ?>
        <?php } ?>
    </tr>
  </table>
  <!-- code tooltip-->
   <?php $soSC=0; ?>
  <div id="mystickytooltip" class="stickytooltip">
  <div style="padding:5px">
  <?php while ($row_tooltip_sc=mysql_fetch_assoc($SPToolTipSC)) { ?>
    <div id="sticky<?php echo $soSC+=1; ?>" class="atip" style="width:300px">
      <span style = "color:#FF0000; font-weight:bold"><?php echo $row_tooltip_sc['TenSP']; ?></span><br/>
        <img class="pictip" src="upload/sanpham/hinhchinh/<?php echo $row_tooltip_sc['UrlHinh'] ?>" width="100" hspace="10" vspace="5" align="left" /><?php echo $row_tooltip_sc['MoTa']; ?>
        </div>
        <?php } ?>
        </div>
        <div class="stickystatus"></div>
  </div>
  <!-- end code tooltip--> 
<table width="100%" border="0" id="sp">
    <tr>
      <td colspan="3" align="center" class="tieu">SẢN PHẨM SINH VIÊN</td>
    </tr>
    <tr>
    <?php
    $demSC = 0;
    while ($row_sp_sinhvien = mysql_fetch_array($SPSinhVien)){$demSC ++;
      ?>
      <td align="center"><?php echo $row_sp_sinhvien['TenSP'] ?><br />
          <a href="index.php?page=ChiTietSP&idSP=<?php echo $row_sp_sinhvien['idSP']; ?>" data-tooltip="sticky<?php echo $row_sp_sinhvien; ?>">
          <img src="upload/sanpham/hinhchinh/<?php echo $row_sp_sinhvien['UrlHinh'] ?>" width="70" height="70" border="0" /></a><br />
        Gía : <span class="text"><?php echo number_format($row_sp_sinhvien['Gia'],2); ?></span> VNĐ<br />
        <a href="index.php?page=ChiTietSP&idSP=<?php echo $row_sp_sinhvien['idSP']; ?>"><img border="0"  src="img/chitiet.png" width="70" height="25" />
        <a href="javascript:void(0)"><img border="0" class="dathang" idSP="<?php echo $row_sp_sinhvien['idSP'];?>"  src="img/mua.png" width="70" height="25" /></a></td>
        <?php if($demSC==3) echo "</tr><tr>"; ?>
        <?php } ?>
    </tr>
  </table>

  <p>&nbsp;</p>
