<?php 
ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>MINH CONG Mobile</title>
  <link href="css/css1.css" rel="stylesheet" type="text/css" />
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
  <script type="text/javascript" src="jquery.js"></script> -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-git.min.js"></script>
  <script type="text/javascript" src="stickytooltip.js"></script>

  <link rel="stylesheet" type="text/css" href="stickytooltip.css" />
</head>
<?php
require_once('db.php');
require_once('function.php');
if(isset($_POST['login']) == true){
  $username = $_POST['u'];
  $password = md5($_POST['p']);
  if (get_magic_quotes_gpc() == false) {
    $username = trim(mysql_real_escape_string($username));
    $password = trim(mysql_real_escape_string($password));
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $user = mysql_query($sql);
    if(mysql_num_rows($user) == 1){
      $row_user = mysql_fetch_assoc($user);
      $_SESSION['kt_login_id'] = $row_user['idUser'];
      $_SESSION['kt_login_user'] = $row_user['Username'];
      $_SESSION['kt_login_level'] = $row_user['idGroup'];
      $_SESSION['kt_HoTen'] = $row_user['HoTen'];
      $_SESSION['kt_GioiTinh'] = $row_user['GioiTinh'];
      header("location:index.php");
    }
  }
}
if(isset($_POST['logout'])){
  alert('logout');
}
?>
<body>

  <div id="total">
   <div id="banner"></div>
   <div id="noidung">
     <div id="tong">
       <div id="menu"><?php include "menu.php";  ?></div>


       <div id="content">            

        <div id="left">
         <div id="menudoc"><?php include "menudoc/index.php";  ?></div>

         <br />

         <!-- TÌM KIẾM -->
         <div id="timkiem">
          <div></div>

          <form action="" method="get">
            <table width="195" border="0" align="left">
              <tr>
                <td width="78%"><label>
                  <input type="text" name="tim" id="tim" />
                </label></td>
                <td width="22%"><img src="img/search.png" width="20" height="20" /></td>
              </tr>
            </table>
          </form>  
        </div>
        <!--// TÌM KIẾM -->   
        <br />
        <br />
        <!-- HỖ TRỢ -->

        <div id="hotro"><div></div>
        <fieldset><legend class="atin">Kinh Doanh</legend>
          <A href="ymsgr:sendim?leo barnabe&amp;m=Hello"><br />
            <IMG src="http://opi.yahoo.com/online?u=leo barnabe&m=g&t=1=us" alt="Nhắp vào đây để liên hệ với tôi" width="70" border=0>                      </A><br />
                     <!--
Skype 'My status' button
http://www.skype.com/go/skypebuttons
-->
<script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>
<a href="skype:vietmedia?call"><img src="http://mystatus.skype.com/balloon/vietmedia" style="border: none;" width="150" height="60" alt="My status" /></a>  </fieldset>


<fieldset><legend class="atin">Kỹ Thuật</legend>
  <A href="ymsgr:sendim?leo barnabe&amp;m=Hello"><br />
    <IMG src="http://opi.yahoo.com/online?u=leo barnabe&m=g&t=1=us" alt="Nhắp vào đây để liên hệ với tôi" width="70" border=0>                      </A><br />

                      <!--
Skype 'My status' button
http://www.skype.com/go/skypebuttons
-->
<script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>
<a href="skype:vietmedia?call"><img src="http://mystatus.skype.com/balloon/vietmedia" style="border: none;" width="150" height="60" alt="My status" /></a>

</fieldset>
</div>	
<!-- //HỖ TRỢ -->
<br />


<!-- TRUY CẬP -->

<div id="truycap"><div></div>
<fieldset>                      
  Bạn là người đăng nhập thứ<br><img src = "Hitcounter/counter.php" >
</fieldset>
</div>	
<!-- //TRUY CẬP -->
</div>
<div id="center">

  <?php 

  if(isset($_GET['page'])){
    $page = $_GET['page'];
    switch ($page) {
      case "ChiTietSP":
        include"ChiTietSP.php";
        break;
      case "loaisp":
        include"LoaiSP.php";
        break;
      case "muahang":
        include"muahang.php";
        break;
      case "muahangxong":
        include"muahangxong.php";
        break;
      default:
        break;
    }
  }else{
    include "ListSanPham.php";
  }
  ?> 
</div>

</div>
<div id="right">
  <!-- GIỎ HÀNG -->
  <div id="giohang">
    <div></div>
    <fieldset id="loadgiohang">
      <?php require_once('hiengiohang.php') ?>
    </fieldset>
  </div>
  <!-- //GIỎ HÀNG -->
  <br />
  <!-- GIỎ HÀNG -->
  <div id="giaohang">
    <div></div>
    <span class="atin">Vui lòng gọi HOTLINE</span><br />
    <img src="img/mobi.png" width="30" height="40" /><span class="text">0168 522 4746              </span></div>
    <!-- //GIỎ HÀNG -->
    <br />
    <!-- TIN TỨC -->
    <div id="tintuc">
      <div>  </div>

      <span id="tin">

        <p class="atin"><img src="img/staricon.gif" width="14" height="13" /> Steve Jobs bỏ Apple sau lưng</p>
        <p class="atin"><img src="img/staricon.gif" width="14" height="13" /> 'Mổ xẻ' điện thoại Apple iPhone 4S</p>
        <p class="atin"><img src="img/staricon.gif" width="14" height="13" /> Những laptop chạy Core i giá dưới 10 triệu </p>
        <p class="atin"><img src="img/staricon.gif" width="14" height="13" /> Chất liệu Policarbonat cho Nokia N9</p>
        <p class="atin"><img src="img/staricon.gif" width="14" height="13" /> Bkav công bố phần mềm diệt virus miễn phí trên di động </p>
      </span>




    </div>
    <!-- //TIN TỨC -->   


  </div>

</div>



</div>

<div id="link"><BR />TRANG CHỦ&nbsp;&nbsp;  |&nbsp;&nbsp;  GIỚI THIỆU  &nbsp;&nbsp;|&nbsp;&nbsp;  LIÊN HỆ  &nbsp;&nbsp;|&nbsp;&nbsp;  THÔNG BÁO&nbsp;&nbsp;  |&nbsp;&nbsp;  TUYỂN DỤNG  &nbsp;&nbsp;|&nbsp;&nbsp; DIỄN ĐÀN<br />
</div>

</div>
<div id="footer"><br />
</div>
<!--HTML for the tooltips-->

</div>
<script type="text/javascript">
  var url="chonsp.php";
  $(document).ready(function() {
    $(".dathang").click(function(){
      idSP = $(this).attr("idSP");
      data = 'action=add&idSP='+idSP;
      $("#loadgiohang").load(url,data,xuly);
    });
    $(".capnhatsoluong").click(function(){
      var idSP = $(this).attr("idSP");
      var soluong = $(this).parent().find('#soluong').val();
      var data = 'action=update&idSP='+idSP+'&soluong='+soluong;
      $("#loadgiohang").load(url,data,xuly);
    });

    $(".removesp").click(function(){
      var idSP = $(this).attr("idSP");
      var data = 'idSP='+idSP+'&action=update&soluong=0';
      $("#loadgiohang").load(url,data,xuly);
    });

    function xuly(responseText, textStatus, XMLHttpRequest){
      $(".capnhatsoluong").click(function(){
        var idSP = $(this).attr("idSP");
        var soluong = $(this).parent().find('#soluong').val();
        var data = 'action=update'+'&idSP='+idSP+'&soluong='+soluong;
        $("#loadgiohang").load(url,data,xuly);
      });

      $(".removesp").click(function(){
        var idSP = $(this).attr("idSP");
        var data = 'idSP='+idSP+'&action=update&soluong=0';
        $("#loadgiohang").load(url,data,xuly);
      });
    }
  });
</script>
</body>
</html>
