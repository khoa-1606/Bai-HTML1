<?php session_start(); if(!isset($_SESSION["ten_dn"]))
{
echo "<script language=javascript>
alert('Bạn không có quyền trên trang này!'); window.location='index.php';
</script>";
}
?>
<?php 
	include("before.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sua</title>
</head>
	<?php include("ketnoi.php");
	$user=$_REQUEST["user"]; //Nhận giá trị user từ link sửa của quantri.php
	$sqli="select * from khanh_hang where username='".$user."'";//chọn ra dòng thông tin của người dùng được chọn để sửa
	$kq=mysqli_query($kn, $sqli) or die ("Không thể xuất thông tin người dùng ".mysqli_connect_error()); // chạy câu lệnh sql
	echo"<div class='main' style='margin-top:10px; width:83%; height:400px;float:right'  align='center'>";
	//mở form để hiển thị lại thông tin cũ của người dùng cần sửa
	echo ("<table align='center' width='60%'>");
	//hiển thị lại thông tin theo bảng
	while ($row=mysqli_fetch_array($kq))
	{
		echo ("<tr>");
		echo ("<a href='index.php?trang=1'><button class='button' style='width:300px;float:left'>Tiếp tục mua sắm</button></a>");
	echo	("<td colspan='2' align='left'><h2>Thông Tin Người Dùng</h2></td>");
	echo ("</tr>");
	echo ("<tr>");
	echo	("<td>Username:	</td>	<td><input	type='text'	readonly='readonly'	name='tendn' value='".$row["username"]."'></td>");
	echo ("</tr>");
	echo ("<tr>");
	echo	("<td>Mật khẩu:	</td>	<td><input	type='password' readonly='readonly'	name='matkhau' value='".$row["userpassword"]."'></td>");
	echo ("</tr>");
	echo ("<tr>");
	echo ("<td>Họ tên: </td> <td><input type='text' readonly='readonly' name='hoten' value='".$row["ten_user"]."'></td>"); echo ("</tr>");
	echo ("<tr>");
	echo ("<td>Giới tính: </td>"); 
	if($row["gioi_tinh"]=="0")
	echo ("<td><input type='text' id='namnu' readonly='readonly' name='gioi_tinh' value='Nữ'></td>");
	else
	echo ("<td><input type='text' id='namnu' readonly='readonly' name='gioi_tinh' value='Nam'></td>");
	echo ("</tr>");
	echo ("<tr>");
	echo	("<td>Số điện thoại:	</td>	<td><input	type='text' readonly='readonly' value='".$row["sdt_user"]."'></td>");
	echo ("</tr>");
	echo ("<tr>");
	echo ("<td>Địa chỉ: </td> ");
	

	if($row["dc_user"]=="travinh")
		echo("<td><input type='text' readonly='readonly' value='Trà Vinh'></td>"); 
	else if($row["dc_user"]=="vinhlong")
		echo("<td><input type='text' readonly='readonly' value='Vĩnh Long'></td>");
	else if($row["dc_user"]=="hanoi")
		echo("<td><input type='text' readonly='readonly' value='Hà Nội'></td>");
	else
		echo("<td><input type='text' readonly='readonly' value='Bến Tre'></td>");

	echo ("</tr>");
	echo ("<tr>");
	
	echo	("<td>Hình	đại	diện:	</td><td><img	src='".$row["hinhdd"]."'	height='160' width='160'><input type='hidden' name='hinhcu' value='".$row["hinhdd"]."'>");
	echo ("</tr>");

//	echo ("<td colspan='2'><button class='button' type='submit' name='suatt'>Sửa</button>"); 
//	echo ("<a href='trangqltv.php'><button class='button' type='button'>Hủy</button></a></td>");
}
	echo ("</table></div>"); echo ("</form>");
	?>
<?php 
	include("after.php");
?>
<body>
</body>
</html>