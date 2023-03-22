<?php session_start(); 
if(!isset($_SESSION["ten_dn"]) &&($_SESSION['ten_dn']) !='admin' )
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
	
	$user_sua=$_REQUEST["user"]; //Nhận giá trị user từ link sửa của quantri.php
	$sql="select * from khanh_hang where username='".$user_sua."'";//chọn ra dòng thông tin của người dùng được chọn để sửa
	$kq=mysqli_query($kn, $sql) or die ("Không thể xuất thông tin người dùng ".mysqli_connect_error()); // chạy câu lệnh sql
	echo"<div class='main' style='margin-top:10px; width:83%;float:right'  align='right'>";
	echo("<form	name='frmsua'	action='thuchien_sua.php'	method='post' enctype='multipart/form-data'>");//mở form để hiển thị lại thông tin cũ của người dùng cần sửa
	echo ("<table align='center' width='60%'>");
	//hiển thị lại thông tin theo bảng
	while ($row=mysqli_fetch_array($kq))
	{
		echo ("<tr>");
	echo	("<td colspan='2' align='left'><h3>Sửa Thông Tin Thành Viên : <font color='#FF0000'>".$user."</font></h3></td>");
	echo ("</tr>");
	echo ("<tr>");
	echo	("<td>Username:	</td>	<td><input	type='text'	readonly='readonly'	name='tendn' value='".$row["username"]."'></td>");
	echo ("</tr>");
	echo ("<tr>");
	echo	("<td>Mật khẩu:	</td>	<td><input	type='password'	name='matkhau' value='".$row["userpassword"]."'></td>");
	echo ("</tr>");
	echo ("<tr>");
	echo ("<td>Họ tên: </td> <td><input type='text' name='hoten' value='".$row["ten_user"]."'></td>"); echo ("</tr>");
		
	echo ("<tr>");
	echo ("<td>Số điện thoại: </td> <td><input type='text' name='sdt' value='".$row["sdt_user"]."'></td>"); echo ("</tr>");
		
	echo ("<tr>");
	echo ("<td>Giới tính: </td>"); 
	if($row["gioi_tinh"]==0)
	echo	("<td><input	type='radio'	name='gioitinh'	value='0'	checked='checked'	>Nữ &nbsp;&nbsp; <input type='radio' name='gioitinh' value='1' > Nam</td>");
	else
	echo  ("<td><input  type='radio' name='gioitinh'  value='0'	>Nữ &nbsp;&nbsp; <input type='radio' name='gioitinh' value='1' checked='checked' > Nam</td>");
	echo ("</tr>");
	echo ("<tr>");
	echo ("<td>Quốc gia </td> ");
	//nếu thông tin cũ về quốc gia là Việt Nam là option Việt Nam được chọn mặc định, ngược lại nếu quốc gia của người dùng là China thì option China được chọn mặc định.... tương tự cho những dòng sau
	if($row["dc_user"]=="travinh")
	echo ("<td><select name='Địachỉ'><option value='travinh' selected='selected'>Trà Vinh</option>
	 
	
	<option value='soctrang'>Sóc Trăng</option>
	<option value='bentre'>Bến Tre</option>
	<option value='Khác'>Khác</option></select></td>");
	 
	else if($row["dc_user"]=="soctrang")
	echo ("<td><select name='Địachỉ'><option value='travinh'>Trà Vinh</option>
	<option value='soctrang' selected='selected'>Sóc Trăng</option>
	<option value='bentre'>Bến Tre</option>
	<option value='Khác'>Khác</option></select></td>"); else if($row["dc_user"]=="bentre")
	echo ("<td><select name='Địachỉ'><option value='travinh'>Trà Vinh</option>
	<option value='soctrang'>Sóc Trăng</option>
	<option value='bentre' selected='selected'>Bến Tre</option>
	<option value='Khác'>Khác</option></select></td>");
	 
	else
	 
	
	echo ("<td><select name='Địachỉ'><option value='travinh' >Trà Vinh</option>
	<option value='soctrang'>Sóc Trăng</option>
	<option value='bentre'>Bến Tre</option>
	<option value='Khác' selected='selected'>Khác</option></select></td>");
	 
	echo ("</tr>");
	echo ("<tr>");
	 
	
	//mới)
	 
	//hiển thị lại hình cũ nếu có, đồng thời cho phép người dùng đổi hình đại diện nếu muốn (chọn ảnh
	
	echo	("<td>Hình	đại	diện:	</td><td><img	src='".$row["hinhdd"]."'	height='50'
	 
	width='50'><input type='hidden' name='hinhcu' value='".$row["hinhdd"]."'>Ảnh mới:<input type='hidden' name='MAX_FILE_SIZE' value='1000000' /> <input type='file' name='hinh' value=''></td>");
	echo ("</tr>");
	echo ("<tr>");
	echo ("<td colspan='2'><button class='button' type='submit' name='suatt' style='width:20%;margin:10px'>Lưu</button>"); 
	echo ("<a href='trangqltv.php'><button class='button' type='button' style='width:20%'>Hủy</button></a></td>");
	echo ("</tr>");
	}
	echo ("</table></div>"); echo ("</form>");
	?>
<?php 
	include("after.php");
?>
<body>
</body>
</html>