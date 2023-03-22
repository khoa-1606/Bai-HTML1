<?php
	session_start();
	if(!isset($_SESSION["ten_dn"]))
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
<title>LINH KIỆN MÁY TÍNH</title>
<link rel="stylesheet" type="text/css" href="CSS.css"/>
</head>
<?php
	if(!isset($_SESSION["ten_dn"]))
	{
		echo("<script language=javascript 
		alert('Bạn không có quyền trên trang này');
		window.location='index.php';
		</script>");
	}
?>
<body>
	<?php
		include("before.php");
	?>
	<table align="center">
		<tr bgcolor="#CCCCCC">
		<td	align="right">	Xin	chào	
		<?php	echo	$_SESSION["ten_dn"];	?>	&nbsp;&nbsp;|	<a href="trangadmin.php">Thoát</a></td>
		</tr>
	</table>
    <div class="main" style="margin-top:10px; width:83%;float:left; " >
    <h3 align="center"> QUẢN LÝ THÀNH VIÊN </h3>
    <table align="center" width="80%" border="1">
    <tr>
    	<th>Tên đăng nhập</th>
        <th>Họ và tên</th>
        <th>Điện thoại</th>
        <th>Quê quán</th>
        <th>Giới tính</th>
        <th>Hình đại diện</th>
        <th>Sửa</th>
        <th>Xóa</th>
        </tr>
    <?php
		include("ketnoi.php");
		$sql="SELECT * FROM khanh_hang";
		$kq=mysqli_query($kn, $sql) or die("Không thể truy xuất thông tin khách hàng".mysqli_connect_error());
   		while($row=mysqli_fetch_array($kq))
		{
			echo("<tr>");
			$user=$row["username"];
			echo("<td align='center'>".$row["username"]."</td>");
			echo("<td align='center'>".$row["ten_user"]."</td>");
			echo("<td align='center'>".$row["sdt_user"]."</td>");
			echo("<td align='center'>".$row["dc_user"]."</td>");
			echo("<td align='center'>".$row["gioitinh"]."</td>");
			echo("<td align='center'><img src='".$row["hinhdd"]."' height='50' width='50'></td>");
			echo("<td align='center'><a href='sua.php?user=$user'>Sửa</a></td>");
			echo("<td align='center'><a href='xoa.php?user=$user'>Xóa</a></td>");
			echo("</tr>");	
		}
    ?>
    </table>
    </div>
    <?php
		include("after.php");	
	?>	
</body>
</html>
