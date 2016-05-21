<?php ob_start(); ?>
<?php 
if (session_status() == PHP_SESSION_NONE || session_id() == '') 
	session_start();
	// session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Untitled Document</title>
</head>
<body>
	<form id="form1" name="form1" method="post" action="#">
		<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
				<td width="800" height="37"  align="center" valign="middle" bgcolor="#FFFFCC" style="font-size:18px; color:#FF0000 ">
					
					<?php
					if(isset($_SESSION['username']))
					{
						echo "Xin chào: ".$_SESSION["username"];
						echo "<br>";
						echo "<a href='admin_logout.php'>Đăng xuất</a>";
						?>
				<!-- <form id="form1" name="form1" method="post" action="#"> 

					 <input  name="userSession" id="userSession" value="0" required="required" /> 
					 <input type="submit" name="btnLogout" id="btnLogout" value="Logout" />  -->
					 <?php
					}	
					else	{
						
						echo "Bạn đã đăng xuất";
						echo "<br>";
						echo "<a href='index.php'>Đăng nhập</a>";
					}
					?>
				</td>
			</tr>
			<td>
				
				<select  name="optionShow" id="optionShow">
					<option value="0">Chọn Index</option>
					<option value="1" > Sản phẩm </option>
					<option value="2"> Loại sản phẩm </option>
					<option value="3"> Chủng loại </option>
				</select>
				
				<input type="submit" name="Submit" id="Submit" value="Xem danh sách" >
			</td>
			<tr>
				<td height="49" valign="top"
				<a href="#"><div id="ht" name="b"></div></a>	
				<div align="center">
					
					<?php
					if (isset($_POST['optionShow']))
						if ( $_POST['optionShow'] =='1' ) 
							include 'sanpham_xemds.php'; 
						else if ( $_POST['optionShow'] =='2' ) 
							include 'loaisp_xemds.php'; 
						else if ( $_POST['optionShow'] =='3' ) 
							include 'chungloai_xemds.php'; 
						?>
					</div>
					
				</td>
			</tr>
			<tr>
				<td height="346">&nbsp;</td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php ob_flush(); ?>
