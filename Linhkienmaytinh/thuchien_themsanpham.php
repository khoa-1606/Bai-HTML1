<?php session_start(); 
if(!isset($_SESSION["ten_dn"]) &&($_SESSION['ten_dn'])!='admin')// kiểm tra quyền
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
<title>Untitled Document</title>
</head>

<body>
	<?php
	include("ketnoi.php");// chèn file kết nối (bắt buộc)
	//Nhận dữ liệu từ file sua.php, trong $_POST[""] là name của các thành phần form trong file sua.php
	$idlk=$_POST["id_linhkien"];
	$idl=$_POST["id_loai"];
	$idh=$_POST["id_hang"];
	$tlk=$_POST["ten_linhkien"];
	$ttlk=$_POST["thongtin_linhkien"];
	$tslk=$_POST["thongso_linhkien"];
	$sllk=$_POST["soluong_linhkien"];
	$glk=$_POST["gia_linhkien"];
	
	$hinhanh=$_FILES["hinhanh"]["name"];
	$hinhanh_02=$_FILES["hinhanh_02"]["name"];
	$hinhanh_03=$_FILES["hinhanh_03"]["name"];	
	if($idl == 'cpu'){
		$duongdan="hinhanh/cpu/".$hinhanh."";$duongdan_02="hinhanh/cpu/".$hinhanh_02."";$duongdan_03="hinhanh/cpu/".$hinhanh_03."";
	}
	else if($idl == 'md'){
		$duongdan="hinhanh/mainborad/".$hinhanh."";$duongdan_02="hinhanh/mainborad/".$hinhanh_02."";$duongdan_03="hinhanh/mainborad/".$hinhanh_03."";
		}
		else if($idl == 'ocung'){
			$duongdan="hinhanh/ocung/".$hinhanh."";$duongdan_02="hinhanh/ocung/".$hinhanh_02."".$hinhanh_02."";$duongdan_03="hinhanh/ocung/".$hinhanh_03."";
		}
		else if($idl == 'psu'){
			$duongdan="hinhanh/PSU/".$hinhanh."";$duongdan_02="hinhanh/PSU/".$hinhanh_02."";$duongdan_03="hinhanh/PSU/".$hinhanh_03."";
		}
		else if($idl == 'ram'){
			$duongdan="hinhanh/ram/".$hinhanh."";$duongdan_02="hinhanh/ram/";$duongdan_03="hinhanh/ram/".$hinhanh_03."";
		}
		else if($idl == 'vga'){
			$duongdan="hinhanh/vga/".$hinhanh."";$duongdan_02="hinhanh/vga/".$hinhanh_02."";$duongdan_03="hinhanh/vga/".$hinhanh_03."";
		}
		else{
			$duongdan="hinhanh/khac/".$hinhanh."";$duongdan_02="hinhanh/khac/".$hinhanh_02."";$duongdan_03="hinhanh/khac/".$hinhanh_03."";
		}
		
		$file_tam=$_FILES["hinhanh"]["tmp_name"];
		$file_tam_02=$_FILES["hinhanh_02"]["tmp_name"];
		$file_tam_03=$_FILES["hinhanh_03"]["tmp_name"];
	
		move_uploaded_file($file_tam,$duongdan);
		move_uploaded_file($file_tam_02,$duongdan_02);
		move_uploaded_file($file_tam_03,$duongdan_03);
	
		$sql_2="insert into linh_kien values('".$idlk."','".$tlk."','".$duongdan."','".$duongdan_02."','".$duongdan_03."','".$glk."','".$ttlk."','".$sllk."','".$idl."','".$idh."','".$tslk."')";
		$kq_2=mysql_query($sql_2,$kn) or die ("Không thể thêm sản phẩm này".mysql_error());
		echo("<script language=javascript>
		alert('Thêm sản phẩm thành công');
		window.location='trangadmin.php';
		</script>");
			
	?>
	
</body>
</html>