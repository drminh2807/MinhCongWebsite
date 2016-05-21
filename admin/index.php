<?php 
require_once('../db.php');  
require_once('function_quantri.php');
session_start();
if(isset($_POST['Submit'])){ 
    $check = Admin_DangNhap($_POST['username'], $_POST['password']);
    // echo  mysql_num_rows($check);
    // $row = mysql_fetch_row($check);
    if ( mysql_num_rows($check) >0 )	{
    	$row = mysql_fetch_assoc($check);
		$_SESSION['username'] = $row['Username'];

	    header("location:admin_chitiet.php"); 
	 }
	else { 
		$username =$_POST['username'];
	    $password = $_POST['password']; 
	    // echo $username; echo ":" ; echo $password
		?>
		 <!-- <input type="button" onclick="alert('Xin chào các bạn')" value="Click Me"/>  -->
	<?php } }
   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php 
	
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
<style type="text/css">
	div{font-size:18px; color:#FF0000}

</style>
</head>
<body>
<form name="form1" method="post" action="#">
  <table width="800" border="1" align="center">
    <tr>
      <td colspan="2"><div align="center">ĐĂNG NHẬP</div></td>
    </tr>
    <tr>
      <td width="394"><div align="right">Tên đăng nhập:</div></td>
      <td width="390"><input type="text" name="username"></td>
    </tr>
	<tr>
      <td width="394"><div align="right">Mật khẩu:</div></td>
      <td width="390"><input type="password" name="password"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" id="Submit" value="Dang nhap">
      </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center" id="tbao">
	  </div></td>
    </tr>
  </table>
</form>
<hr  size="2" align="center" color="#000066" width="600">
	
</body>
</html>
  <?php 
  ob_flush();
  ?>
