<form id="form1" name="form1" method="post" action="">

  <table width="500" border="1" cellspacing="0" cellpadding="4">
    <caption>
      ĐĂNG KÝ THÀNH VIÊN
    </caption>
    <tr>
      <th scope="col">ID Đăng Nhập</th>
      <th align="left" scope="col"><input name="TenNguoiNhan" type="text" id="TenNguoiNhan" value="<?php if(isset($_SESSION['kt_HoTen'])) echo $_SESSION['kt_HoTen']; else echo ''?>" /></th>
    </tr>

    <tr>
      <td>Thời điểm giao hàng</td>
      <td align="left"><input type="text" name="ThoiDiemGiaoHang" id="ThoiDiemGiaoHang" /></td>
    </tr>
    <tr>
      <td>Địa điểm giao hàng</td>
      <td align="left"><input type="text" name="DiaDiemGiaoHang" id="DiaDiemGiaoHang" /></td>
    </tr>
    <tr>
      <td>Ghi chú</td>
      <td align="left"><input type="text" name="GhiChu" id="GhiChu" /></td>
    </tr>
    <tr>
      <td>Tình trạng</td>
      <td align="left"><label>
        <input type="text" name="TinhTrang" id="TinhTrang" />
      </label></td>
    </tr>
  </table>
  <p>
    <label>
      <input type="submit" name="btnMua" id="btnMua" value="MuaHang" />
    </label>
  </p>