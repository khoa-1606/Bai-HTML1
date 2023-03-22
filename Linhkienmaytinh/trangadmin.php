<?php
	session_start();
	if(isset($_SESSION["ten_dn"]) &&($_SESSION['ten_dn'])!='admin')// kiểm tra quyền
{
echo "<script language=javascript>
alert('Bạn không có quyền trên trang này!'); window.location='index.php';
</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LINH KIỆN MÁY TÍNH</title>
<link rel="stylesheet" type="text/css" href="CSS.css"/>
</head>
<body>
	<?php
		include("before.php");
	?>
	<table align="center">
		<tr bgcolor="#CCCCCC">
		<td	 align="right">	Xin	chào	
		<?php	echo	$_SESSION["ten_dn"];	?>	&nbsp;&nbsp;|	<a href="thoat.php">Thoát</a></td>
		</tr>
		<tr>
			<td>
			<a href="trangqltv.php"><button class="button" type="button" style="width:100%">QUẢN LÍ THÀNH VIÊN</button></a></td></tr>
		<tr>	
			<td>
        	<a href="index.php"><button class="button" type="button" style="width:100%" >QUẢN LÍ NỘI DỤNG</button></a></td></tr>
		<tr>	
			<td>
			<a href="themsanpham.php"><button class="button" type="button" style="width:100%">THÊM SẢN PHẨM</button></a></td></tr>
		<tr>	
			<td>
			<a href="danhsach_dh_thanhtoan.php"><button class="button" type="button" style="width:100%">QUẢN LÍ ĐƠN HÀNG</button></a></td></tr>
	</table>
    
    <?php
		include("after.php");	
	?>	
</body>
</html>
