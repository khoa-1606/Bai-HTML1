<?php 
	include('Ketnoi.php');
	session_start();
	if(!isset($_SESSION['ten_dn'])||!isset($_REQUEST['id_xx']))
	{
		echo "
				<script language='javascript'>
					alert('Bạn không có quyền truy cập trang này');
					window.location='index.php';
				</script>
			";	
	}
?>

<?php 
	$ten_dn_xoa_gh=$_SESSION['ten_dn'];//echo $ten_dn_xoa_gh;
	$id_sp_xoa_gh=$_REQUEST['id_xx'];//echo $id_sp_xoa_gh;
	
	$query_xoagh="delete from gio_hang where username='$ten_dn_xoa_gh' and id_lk=$id_sp_xoa_gh";
	$kq_xoagh=mysql_query($query_xoagh,$kn);
	if($kq_xoagh>0)
	{
		header('location:giohang.php');	
	}
?>