<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng kí thành viên</title>
</head>
<link rel="stylesheet" type="text/css" href="CSS.css"/>
<body>
	<?php
	include("ketnoi.php");
	$tdn=$_POST["tendn"];
	$mk=$_POST["matkhau"];
	$ht=$_POST["hoten"];
	$sdt=$_POST["sdt"];
	$gt=$_POST["gioitinh"];
	$qq=$_POST["quequan"];
	$sql_1="SELECT * FROM khanh_hang WHERE username='".$tdn."'";
	$kq_1=mysqli_query($kn, $sql_1) or die ("Không thể truy vấn TABLE khach_hang".mysqli_connect_error());
	if(mysqli_fetch_array($kq_1))
	{
		echo("<script language=javascript>
		alert('Tên đăng nhập tồn tại');
		window.location='dangki.php';
		</script>");
	}
	$ten_anh=$_FILES["hinhanh"]["name"];
	$duongdan="Hinhanh/nguoidung/".$ten_anh."";
	$tam=$_FILES["hinhanh"]["tmp_name"];
	move_uploaded_file($tam,$duongdan);
	
	$sql_2="insert into khanh_hang values('".$tdn."','".$mk."','".$ht."','".$sdt."','".$qq."','".$duongdan."','".$gt."')";
	$kq_2=mysqli_query($k, $sql_2n) or die ("Không thể thêm người dùng này".mysqli_connect_error());
	$_SESSION["ten_dn"]=$tdn;
	echo("<script language=javascript>
	alert('Đăng kí thành công');
	window.location='index.php';
	</script>");
	
	?>
    

                
                
            
    
</body>
</html>
