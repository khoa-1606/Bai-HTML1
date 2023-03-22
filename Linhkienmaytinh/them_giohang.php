<?php 
	include('Ketnoi.php'); 
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sua</title>
</head>
<?php 
	if(!isset($_SESSION['ten_dn']))
	{
		echo"
				<script language='javascript'>
					alert('Vui lòng Đăng Nhập');	
					window.location='index.php';
				</script>
			";
	}
	else{
			echo "
					<script language='javascript'>
						alert('Thêm Giỏ Hàng Thành Công');
						window.location='index.php';
					</script>
				";
			$ten_dn=$_SESSION['ten_dn'];//echo $ten_dn;
			$id_lk=$_REQUEST['id_lk_add'];//echo $id_lk;
			$query_sl="select * from gio_hang where username='$ten_dn' and id_lk='".$id_lk."'";
			$kq_sl=mysql_query($query_sl,$kn);
		
			$query_sl_lk="select sl_lk from linh_kien where id_lk='".$id_lk."'";
			$kq_sl_lk=mysql_query($query_sl_lk,$kn);
			$row_sl_lk=mysql_fetch_array($kq_sl_lk);
			
		
		
					$query_in="insert into gio_hang (username,id_lk,sl_lk) values('".$ten_dn."','".$id_lk."','".$soluong."')";
					$kq_in=mysql_query($query_in,$kn);
			
			
				$tonkho-=1;
				$query_up_sl_lk="update linh_kien set sl_lk=$tonkho where id='".$id_lk."'";
				$kq_up_sl_dt=mysql_query($query_up_sl_lk,$kn);
			
	}

?>