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
	$tlk=$_POST["ten_linhkien"];
	$ttlk=$_POST["thongtin_linhkien"];
	$tslk=$_POST["thongso_linhkien"];
	$sllk=$_POST["soluong_linhkien"];
	$glk=$_POST["gia_linhkien"];
	$hc=$_POST["hinhcu"];
	$hc_02=$_POST["hinhcu_02"];
	$hc_03=$_POST["hinhcu_03"];
	
	if($_FILES["hinhmoi"]["name"] !="" || $_FILES["hinhmoi_02"]["name"] !="" || $_FILES["hinhmoi_03"]["name"] !="" ){
		if($idl == 'cpu'){
			$duongdan="hinhanh/cpu";$duongdan_02="hinhanh/cpu/";$duongdan_03="hinhanh/cpu/";
		}
		else if($idl == 'md'){
			$duongdan="hinhanh/mainborad/";$duongdan_02="hinhanh/mainborad/";$duongdan_03="hinhanh/mainborad/";
		}
		else if($idl == 'ocung'){
			$duongdan="hinhanh/ocung/";$duongdan_02="hinhanh/ocung/";$duongdan_03="hinhanh/ocung/";
		}
		else if($idl == 'psu'){
			$duongdan="hinhanh/PSU/";$duongdan_02="hinhanh/PSU/";$duongdan_03="hinhanh/PSU/";
		}
		else if($idl == 'ram'){
			$duongdan="hinhanh/ram/";$duongdan_02="hinhanh/ram/";$duongdan_03="hinhanh/ram/";
		}
		else if($idl == 'vga'){
			$duongdan="hinhanh/vga/";$duongdan_02="hinhanh/vga/";$duongdan_03="hinhanh/vga/";
		}
		else{
			$duongdan="hinhanh/khac/";$duongdan_02="hinhanh/khac/";$duongdan_03="hinhanh/khac/";
		}
		
		$duongdan=$duongdan.basename($_FILES["hinhmoi"]["name"]);
		$duongdan_02=$duongdan_02.basename($_FILES["hinhmoi_02"]["name"]);
		$duongdan_03=$duongdan_03.basename($_FILES["hinhmoi_03"]["name"]);
		$file_tam=$_FILES["hinhmoi"]["tmp_name"];
		$file_tam_02=$_FILES["hinhmoi_02"]["tmp_name"];
		$file_tam_03=$_FILES["hinhmoi_03"]["tmp_name"];
		move_uploaded_file($file_tam,$duongdan);
		move_uploaded_file($file_tam_02,$duongdan_02);
		move_uploaded_file($file_tam_03,$duongdan_03);

		if($_FILES["hinhmoi"]["name"] !=""){
		$sql="update	linh_kien	set	ten_lk='".$tlk."' , thongtin_lk='".$ttlk."' , thongso='".$tslk."' , sl_lk='".$sllk."' , gia_lk='".$glk."' , hinhanh_lk='".$duongdan."' , hinhanh_02='".$hc_02."' , hinhanh_03='".$hc_03."' where id_lk='".$idlk."'";
		}else if($_FILES["hinhmoi"]["name"] !="" && $_FILES["hinhmoi_02"]["name"] !=""){
		$sql="update	linh_kien	set	ten_lk='".$tlk."' , thongtin_lk='".$ttlk."' , thongso='".$tslk."' , sl_lk='".$sllk."' , gia_lk='".$glk."' , hinhanh_lk='".$duongdan."' , hinhanh_02='".$duongdan_02."' , hinhanh_03='".$hc_03."' where id_lk='".$idlk."'";	
		}else if($_FILES["hinhmoi"]["name"] !="" && $_FILES["hinhmoi_02"]["name"] !="" && $_FILES["hinhmoi_03"]["name"] !=""){
		$sql="update	linh_kien	set	ten_lk='".$tlk."' , thongtin_lk='".$ttlk."' , thongso='".$tslk."' , sl_lk='".$sllk."' , gia_lk='".$glk."' , hinhanh_lk='".$duongdan."' , hinhanh_02='".$duongdan_02."' , hinhanh_03='".$duongdan_03."' where id_lk='".$idlk."'";	
		}else if($_FILES["hinhmoi_02"]["name"] !=""){
		$sql="update	linh_kien	set	ten_lk='".$tlk."' , thongtin_lk='".$ttlk."' , thongso='".$tslk."' , sl_lk='".$sllk."' , gia_lk='".$glk."' , hinhanh_lk='".$hc."' , hinhanh_02='".$duongdan_02."' , hinhanh_03='".$hc_03."' where id_lk='".$idlk."'";	
		}else if($_FILES["hinhmoi_02"]["name"] !="" && $_FILES["hinhmoi_03"]["name"] !=""){
		$sql="update	linh_kien	set	ten_lk='".$tlk."' , thongtin_lk='".$ttlk."' , thongso='".$tslk."' , sl_lk='".$sllk."' , gia_lk='".$glk."' , hinhanh_lk='".$hc."' , hinhanh_02='".$duongdan_02."' , hinhanh_03='".$duongdan_03."' where id_lk='".$idlk."'";	
		}else{
		$sql="update	linh_kien	set	ten_lk='".$tlk."' , thongtin_lk='".$ttlk."' , thongso='".$tslk."' , sl_lk='".$sllk."' , gia_lk='".$glk."' , hinhanh_lk='".$hc."' , hinhanh_02='".$hc_02."' , hinhanh_03='".$duongdan_03."' where id_lk='".$idlk."'";	
		}
		$kq=mysql_query($sql,$kn) or die ("Không thể xuất thông tin sản phẩm".mysql_error()); echo ("
		<script language=javascript>
		alert('Sửa thành công, ahjhj*'); 
		window.location='trangadmin.php';
		</script> ");
		
	}else{
		$sql="update	linh_kien	set	ten_lk='".$tlk."' , thongtin_lk='".$ttlk."' , thongso='".$tslk."' , sl_lk='".$sllk."' , gia_lk='".$glk."' , hinhanh_lk='".$hc."' , hinhanh_02='".$hc_02."' , hinhanh_03='".$hc_03."' where id_lk='".$idlk."'";
	
		$kq=mysql_query($sql,$kn) or die ("Không thể xuất thông tin sản phẩm ".mysql_error()); echo ("
		<script language=javascript>
		alert('Sửa thành công, ahjhj'); 
		window.location='trangadmin.php';
		</script> ");
	}

	?>
	
</body>
</html>