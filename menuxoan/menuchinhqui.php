<?php require_once('../dbconnection.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

    <title>Jquery animated menu</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="en" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />

	
	<link rel="stylesheet" type="text/css" media="all" href="screen.css" />

	<script type="text/javascript" src="jquery-1.6.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="jquery.backgroundPosition.fixed.js" charset="utf-8"></script>
	<script type="text/javascript" src="menuAnimation2.js" charset="utf-8"></script>
	
	<style type="text/css">
	#content {
		position: relative;
		top: 100px;
		width:800px; 
		position:relative;
		margin: 0 auto;
	}

	#menu {
		float: left;
		width: 800px;
		list-style: none;
		line-height: 33px;
		background: url('menu_bg13.gif') no-repeat top left;
		border-top: 1px solid #000;
		border-bottom: 1px solid #000;
		margin: 0;
		padding:0;
	}

	#menu li {
		float: left;
		border-left: 1px solid #000;
	}

	#menu li a {
		float: left;
		font-size: 1.2em;
		color: #fff;
		border-left: 1px solid #ccc;
		text-decoration: none;
		background: url('menu_bg13.gif') no-repeat top left;
	}
	
	#menu li a:hover {
		background: url('menu_bg_active.gif') no-repeat top left;
	}

	#menu li:first-child { border: none; }
	#menu li:first-child a { border: none; }
	
	</style>

</head>

<body>


<div id="content">

<br />
<br />

	<ul id="menu">
    <?php
    $menungangchinh = mysql_query("SELECT * FROM  totalwebmenu ");	
	while($row_menungangchinh = mysql_fetch_array($menungangchinh))
	{ 
	?>
		<li><a href="<?php echo $row_menungangchinh['link'];  ?>" ><?php echo $row_menungangchinh['tenmenu'];  ?></a></li>
		
        <? } ?>
	</ul><br />
</div>

<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-9048134-3");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>