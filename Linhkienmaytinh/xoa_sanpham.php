<?php
	session_start();
	if(!isset($_SESSION["ten_dn"]) && ($_SESSION['ten_dn'])!='admin' )
	{
		echo("<script language=javascript>
		alert('Bạn không có quyền truy cập');
		window.location='index.php';
		</script>");
	}
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
	include("ketnoi.php");
	$id_xoa=$_REQUEST["id"];
	$sql="delete from linh_kien where id_lk='".$id_xoa."'";
	$kq=mysql_query($sql,$kn) or die("Không thể xuất thông tin linh kien".mysql_error());
	echo("<script language=javascript>
	alert('Xóa thành công sẩn phẩm');
	window.location='trangadmin.php';
	</script>");
?>
<body>
</body>
</html>