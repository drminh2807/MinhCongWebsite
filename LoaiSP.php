<div id="sanpham">
                          <table width="100%" border="0" id="sp">
                            <tr>
                              <td colspan="3" align="center" class="tieu">SẢN PHẨM TRONG LOAI</td>
                            </tr>
                          </table>
                           <!-- sp1-->
                           <?php 
                           $dem = 0;
                           $idLoai = $_GET['idLoai'];
                           $SPTrongLoai = SPTrongLoai(1,$idLoai,0,12);
                           while ($row_loaisp=mysql_fetch_array($SPTrongLoai)) { $dem++;
                                  ?>
                             <div class="loaisp" align="center"><?php echo $row_loaisp['TenSP']?><br />
                             <a href="index.php?page=ChiTietSP&idSP=<?php echo $row_loaisp['idSP']?>" data-tooltip="sticky<?php echo $dem; ?>">><img src="upload/sanpham/hinhchinh/<?php echo $row_loaisp['UrlHinh']?>" width="70" height="70" border="0" /></a><br />
                                  <img src="img/new.gif" width="29" height="19" /><br />
                                Gía : <span class="text"><?php echo number_format($row_loaisp['Gia'],2);?></span> VNĐ<br />
                                <a href="index.php?page=ChiTietSP&idSP=<?php echo $row_loaisp['idSP']?>"><img src="img/chitiet.png" width="70" height="25" border="0" /></a><img onclick="chonSP('chonSP('chonsp.php?idSP=<?php echo $row_loaisp['idSP']?>')" src="img/mua.png" width="70" height="25" /></div>
                              
                                  <?php
                                }
                                ?>
                               
      <!-- code tooltip-->
   <?php $so=0; ?>
  <div id="mystickytooltip" class="stickytooltip">
  <div style="padding:5px">
  <?php while ($row_tooltip=mysql_fetch_array($SPTrongLoai)) { ?>
    <div id="sticky<?php echo $so+=1; ?>" class="atip" style="width:300px">
      <span style = "color:#FF0000; font-weight:bold"><?php echo $row_tooltip['TenSP']; ?></span><br/>
        <img class="pictip" src="upload/sanpham/hinhchinh/<?php echo $row_tooltip['UrlHinh'] ?>" width="100" hspace="10" vspace="5" align="left" /><?php echo $row_tooltip['MoTa']; ?>
        </div>
        <?php } ?>
        </div>
        <div class="stickystatus"></div>
  </div>
  <!-- end code tooltip-->  
                          <br />
</div>
