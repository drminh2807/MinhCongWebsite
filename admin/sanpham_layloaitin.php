<?php
require_once('../db.php'); 
require_once('function_quantri.php'); 
$idCL = $_GET['idCL'];  
	$loaitin =LoaiSP($idCL);
?>
<?php while ($row_loaitin = mysql_fetch_assoc($loaitin)) { ?>
	<option value="<?php echo $row_loaitin['idLoai'];?>">
	<?php echo $row_loaitin['TenLoai'];?> 
	</option>
<?php } ?>
