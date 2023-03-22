<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bộ xử lý CPU</title>
<link rel="stylesheet" type="text/css" href="CSS.css"/>
</head>

<body>

      
<?php
include("ketnoi.php");
	session_start();
	$tdn=$_POST["textname"];
	$mk=$_POST["textpassword"];
	$sql="select * from khanh_hang where username='".$tdn."' and userpassword='".$mk."'";
	$kq=mysqli_query($kn, $sql);
	if($row=mysqli_num_rows($kq)==1)
	{
		$_SESSION['ten_dn']=$tdn;
		header('location:trangnguoidung.php');
	}
	else
	{
		$sql2="select * from admin_tk where adminname='".$tdn."' and adminpassword='".$mk."'";
		$kq2=mysqli_query($kn, $sql2);
		if($row=mysqli_num_rows($kq2)==1)
		{
			$_SESSION['ten_dn']=$tdn;
			header('location:index.php');
		}
		else
		{	
			header('location:index.php');
		}
	}
?>
   
</body>
</html>
