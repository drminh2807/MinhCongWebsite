<?php
$link = mysql_connect ("localhost", "root", "") or die("Khong ket noi duoc MySQL Database");
	mysql_select_db("banhang", $link);
	
mysql_query("set names 'utf8'");

?>