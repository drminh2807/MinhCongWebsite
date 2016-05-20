<?php
$idSP=$_GET['idSP'];
$ChiTietSP = ChiTietSP(1,$idSP);
$ChiTietSPThuocTinh = ChiTietSPThuocTinh($idSP);
$ChiTietSPVideo = ChiTietSPVideo($idSP);

$row_chitiet = mysql_fetch_array($ChiTietSP);
$row_chitiet_thuoctinh = mysql_fetch_array($ChiTietSPThuocTinh);
$row_chitiet_video = mysql_fetch_array($ChiTietSPVideo);

if(isset($_POST['nut'])){
  Gui_Comment($idSP);
}
$idLoai = $row_chitiet['idLoai'];
$SanPhamCungLoai = SanPhamCungLoai(1,$idLoai,$idSP);
?>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {color:#FF0000}
.style5 {color: #990000}
.style6 {
	color: #FFFF00;
	font-weight: bold;
}
-->
</style>
<table width="100%" border="1">
  <tr>
    <td><table width="100%" border="1">
    <tbody><tr>
      <td width="30%" align="center" class="tdsp"><p><br>
        <img src="upload/sanpham/hinhchinh/<?php echo $row_chitiet['UrlHinh'] ?>" height="128"><br>
        </p>
        <p><br>
          <br>
        </p></td>
        <td width="70%" colspan="2" align="center" class="tdsp"><div>
            <h1 class="style3"><?php echo $row_chitiet['TenSP']; ?></h1>
          </div>
      <div>
        <div>Giá bán:&nbsp;<span class="gia"><?php echo number_format($row_chitiet['Gia'],2) ?></span>&nbsp;VNĐ&nbsp;(Đã bao gồm VAT)</div>
            <div>
              <p class="TabbedPanelsContent"><span class="style4">Mô tả :</span> 
                  <?php echo $row_chitiet['MoTa']; ?>
              </p>
              <p>&nbsp;</p>
            </div>
            <div>
              <div>
                <table width="100%" border="0">
                  <tbody><tr>
                      <td align="right"><form action="./trangchu.php_files/trangchu.php.htm" method="post" name="giohang_1_ATC_524" id="giohang_1_ATC_524">
                        <table width="66%" border="0">
                          <tbody><tr>
                            <td width="63%" align="right"><input type="hidden" name="giohang_1_ID_Add" value="524">
                              <input type="text" name="giohang_1_Quantity_Add" value="1" size="4"></td>
                              <td width="37%" align="left"><img class="dathang" idSP="<?php echo $_GET['idSP']; ?>" src="images/muahang.gif" /></td>
                            </tr>
                          </tbody></table>
                      </form></td>
                      <td></td>
                      </tr>
                </tbody></table>
                <br>
              </div>
            </div>
          </div>
        <br></td>
        </tr>
    </tbody>
  </table>
      <div id="TabbedPanels2" class="TabbedPanels">
    <ul class="TabbedPanelsTabGroup">
      <li class="TabbedPanelsTab" tabindex="0">CHI TIẾT TÍNH NĂNG</li>
      <li class="TabbedPanelsTab" tabindex="0">BÀI VIẾT</li>
      <li class="TabbedPanelsTab" tabindex="0">VIDEO CLIP</li>
      <li class="TabbedPanelsTab" tabindex="0">GÓP Ý SẢN PHẨM</li>
    </ul>
    <div class="TabbedPanelsContentGroup">
      <div class="TabbedPanelsContent">
        <div>Tính năng nổi bật</div>
        <div></div>
        <div></div>
        <div id="detail-frame">
          <table border="1" cellpadding="0" cellspacing="0">
            <tbody>
              <tr>
                <td rowspan="9" valign="top"><div>Giải trí</div></td>
                <td id="prop_27" onclick="ShowHelp(27, 2);">Máy ảnh</td>
                <td id="c27_1"><?php echo $row_chitiet_thuoctinh['may_anh']; ?></td>
              </tr>
              <tr>
                <td><div id="prop_28" onclick="ShowHelp(28, 2);">Đặc tính máy ảnh</div></td>
                <td id="c28_1"><?php echo $row_chitiet_thuoctinh['dac_tinh_may_anh']; ?></td>
              </tr>
              <tr>
                <td><div id="prop_29" onclick="ShowHelp(29, 2);">Máy ảnh phụ</div></td>
                <td id="c29_1"><?php if($row_chitiet_thuoctinh['may_phu_anh'] == 1) echo "Có"; else echo "Không"; ?></td>
              </tr>
              <tr>
                <td><div id="prop_30" onclick="ShowHelp(30, 2);">Videocall</div></td>
                <td id="c30_1"><?php if($row_chitiet_thuoctinh['video_call'] == 1) echo "Có"; else echo "Không"; ?></td>
              </tr>
              <tr>
                <td><div id="prop_31" onclick="ShowHelp(31, 2);">Quay phim</div></td>
                <td id="c31_1"><?php if($row_chitiet_thuoctinh['quay_phim'] == 1) echo "Có"; else echo "Không"; ?></td>
              </tr>
              <tr>
                <td><div id="prop_32" onclick="ShowHelp(32, 2);">Xem phim</div></td>
                <td id="c32_1"><?php echo $row_chitiet_thuoctinh['xem_phim']; ?></td>
              </tr>
              <tr>
                <td><div id="prop_33" onclick="ShowHelp(33, 2);">Nghe nhạc</div></td>
                <td id="c33_1"><?php echo $row_chitiet_thuoctinh['nghe_nhac']; ?></td>
              </tr>
              <tr>
                <td><div id="prop_34" onclick="ShowHelp(34, 2);">FM radio</div></td>
                <td id="c34_1"><?php if($row_chitiet_thuoctinh['fm_radio'] == 1) echo "Có"; else echo "Không"; ?></td>
              </tr>
              <tr>
                <td><div id="prop_35" onclick="ShowHelp(35, 2);">Xem Tivi</div></td>
                <td id="c35_1"><?php echo $row_chitiet_thuoctinh['xem_tivi']; ?></td>
              </tr>
              <tr>
                <td rowspan="8" valign="top"><div>Ứng dụng &amp; Trò chơi</div></td>
                <td id="prop_36" onclick="ShowHelp(36, 2);">Ghi âm</td>
                <td id="c36_1"><?php if($row_chitiet_thuoctinh['ghi_am'] == 1) echo "Có"; else echo "Không"; ?></td>
              </tr>
              <tr>
                <td><div id="prop_37" onclick="ShowHelp(37, 2);">Ghi âm cuộc gọi</div></td>
                <td id="c37_1"><?php if($row_chitiet_thuoctinh['ghi_am_cuoc_goi'] == 1) echo "Có"; else echo "Không"; ?></td>
              </tr>
              <tr>
                <td><div id="prop_38" onclick="ShowHelp(38, 2);">Ghi âm FM</div></td>
                <td id="c38_1"><?php if($row_chitiet_thuoctinh['ghi_am_fm'] == 1) echo "Có"; else echo "Không"; ?></td>
              </tr>
              <tr>
                <td><div id="prop_39" onclick="ShowHelp(39, 2);">Java</div></td>
                <td id="c39_1"><?php if($row_chitiet_thuoctinh['java'] == 1) echo "Có"; else echo "Không"; ?></td>
              </tr>
              <tr>
                <td><div id="prop_40" onclick="ShowHelp(40, 2);">Trò chơi</div></td>
                <td id="c40_1"><?php echo $row_chitiet_thuoctinh['tro_choi']; ?></td>
              </tr>
              <tr>
                <td><div id="prop_41" onclick="ShowHelp(41, 2);">Kết nối Tivi</div></td>
                <td id="c41_1"><?php if($row_chitiet_thuoctinh['ket_noi_tv'] == 1) echo "Có"; else echo "Không"; ?></td>
              </tr>
              <tr>
                <td><div id="prop_42" onclick="ShowHelp(42, 2);">Ứng dụng văn phòng</div></td>
                <td id="c42_1"><?php echo $row_chitiet_thuoctinh['ung_dung_van_phong']; ?></td>
              </tr>
              <tr>
                <td><div>Ứng dụng khác</div></td>
                <td id="c43_1"><?php echo $row_chitiet_thuoctinh['ung_dung_khac']; ?></td>
              </tr>
              <tr>
                <td rowspan="5" valign="top"><div>Nhạc chuông</div></td>
                <td id="prop_44" onclick="ShowHelp(44, 2);">Loại</td>
                <td id="c44_1"><?php echo $row_chitiet_thuoctinh['nhacchuong_loai']; ?></td>
              </tr>
              <tr>
                <td><div id="prop_45" onclick="ShowHelp(45, 2);">Tải nhạc</div></td>
                <td id="c45_1"><?php if($row_chitiet_thuoctinh['nhacchuong_tai_nhac'] == 1) echo "Có"; else echo "Không"; ?></td>
              </tr>
              <tr>
                <td><div id="prop_46" onclick="ShowHelp(46, 2);">Loa ngoài</div></td>
                <td id="c46_1"><?php if($row_chitiet_thuoctinh['nhacchuong_loa_ngoai'] == 1) echo "Có"; else echo "Không"; ?></td>
              </tr>
              <tr>
                <td><div id="prop_47" onclick="ShowHelp(47, 2);">Báo rung</div></td>
                <td id="c47_1"><?php if($row_chitiet_thuoctinh['nhacchuong_bao_rung'] == 1) echo "Có"; else echo "Không"; ?></td>
              </tr>
              <tr>
                <td><div id="prop_48" onclick="ShowHelp(48, 2);">Jack tai nghe</div></td>
                <td id="c48_1"><?php echo $row_chitiet_thuoctinh['nhacchuong_jack_tai_nghe']; ?></td>
              </tr>
              <tr>
                <td rowspan="5" valign="top"><div>Bộ nhớ</div></td>
                <td id="prop_49" onclick="ShowHelp(49, 2);">Bộ nhớ trong</td>
                <td id="c49_1"><?php echo $row_chitiet_thuoctinh['bonho_bo_nho_trong']; ?></td>
              </tr>
              <tr>
                <td><div>RAM</div></td>
                <td id="c50_1"><?php echo $row_chitiet_thuoctinh['bonho_ram']; ?></td>
              </tr>
              <tr>
                <td><div id="prop_51" onclick="ShowHelp(51, 2);">Vi xử lý CPU</div></td>
                <td id="c51_1"><?php echo $row_chitiet_thuoctinh['bonho_vi_xu_ly_cpu']; ?></td>
              </tr>
              <tr>
                <td><div id="prop_52" onclick="ShowHelp(52, 2);">Thẻ nhớ ngoài</div></td>
                <td id="c52_1"><?php echo $row_chitiet_thuoctinh['bonho_the_nho_ngoai']; ?></td>
              </tr>
              <tr>
                <td><div id="prop_53" onclick="ShowHelp(53, 2);">Hỗ trợ thẻ tối đa</div></td>
                <td id="c53_1"><?php echo $row_chitiet_thuoctinh['bonho_ho_tro_the_toi_da']; ?></td>
              </tr>
              <tr>
                <td rowspan="3" valign="top"><div>Danh bạ, tin nhắn</div></td>
                <td id="prop_54" onclick="ShowHelp(54, 2);">Danh bạ</td>
                <td id="c54_1"><?php echo $row_chitiet_thuoctinh['danh_ba']; ?></td>
              </tr>
              <tr>
                <td><div id="prop_55" onclick="ShowHelp(55, 2);">Tin nhắn</div></td>
                <td id="c55_1"><?php echo $row_chitiet_thuoctinh['tin_nhan']; ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="TabbedPanelsContent">
        <?php echo $row_chitiet['BaiViet'] ?>
      </div>
      <div class="TabbedPanelsContent">
        <iframe width="500" height="310" src="http://www.youtube.com/embed/<?php echo $row_chitiet_video['value'] ?>" frameborder="0" allowfullscreen="true"></iframe>
      </div>
      <div class="TabbedPanelsContent">
        <form id="formthemykien" name="formthemykien" method="post" action="">
          <table width="100%" border="0">
            <tbody>
              <tr align="center">
                <td colspan="2">GÓP Ý CỦA BẠN</td>
              </tr>
              <tr>
                <td align="right">Họ Tên</td>
                <td><label>
                  <input type="text" name="hoten2" id="hoten2" />
                </label></td>
              </tr>
              <tr>
                <td align="right">Email</td>
                <td><label>
                  <input type="text" name="email2" id="email2" />
                </label></td>
              </tr>
              <tr>
                <td align="right">Tiêu Đề</td>
                <td><label>
                  <input type="text" name="tieude2" id="tieude2" />
                </label></td>
              </tr>
              <tr>
                <td align="right">Nội Dung</td>
                <td><label>
                  <textarea name="noidung2" id="noidung2" cols="45" rows="5"></textarea>
                </label></td>
              </tr>
              <tr>
                <td colspan="2" align="center"><label>
                  <input type="submit" name="nut" id="nut" onclick="
          if(hoten2.value=='') { alert('Bạn chưa nhập Họ Tên'); return false;    
          }
          
          if(email2.value=='') { alert('Bạn chưa nhập Email'); return false;    
          }
         
         if(tieude2.value=='') { alert('Bạn chưa nhập Tiêu Đề'); return false;    
          }
          if(noidung2.value=='') { alert('Bạn chưa nhập Nội Dung'); return false;    
          }
          
          else{
           alert('Góp ý của bạn đã được gửi , Cám ơn bạn đã tham gia góp ý ...'); return true;}" value="Gửi góp ý" />
                  <input name="idSP" type="hidden" id="idSP" value="524" />
                  <input name="Ngay" type="hidden" id="Ngay" value="2011-12-05" />
                </label></td>
              </tr>
            </tbody>
          </table>
          <input type="hidden" name="MM_insert" value="formthemykien" />
        </form>
      </div>
    </div>
  </div>&nbsp;</p>
  <table width="100%" border="1" cellpadding="4" cellspacing="4">
    <tbody>
      <tr>
        <td colspan="3" align="center" background="img/tieu.png" bgcolor="#0A5E3D" class="style3 style5 tdsp" id="tdsp2"><span class="style6">SẢN PHẨM  CÙNG LOẠI </span></td>
      </tr>
      <tr>
        <td width="33%" align="center" class="tdsp" id="tdsp"><span class="style3">HTC HERO</span><br />
            <img src="sanpham/camera.png" height="128" /><br />
            <br />
            <span class="style5">Gía : 8,999,000 VNĐ</span><br />
          <a href="http://quyencamera.webdoanhnghiep.org/trangchu.php?p=chitietsp&amp;idSP=527&amp;idLoai=41"></a><a href="http://quyencamera.webdoanhnghiep.org/trangchu.php?p=chitietsp&amp;idSP=527&amp;idLoai=41"><img src="img/chitiet.png" width="70" height="25" border="0" /></a></td>
      </tr>
    </tbody>
  </table>
  <p>&nbsp;</p></td>
  </tr>
</table>
<script type="text/javascript">
<!--
var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2");
//-->
</script>
