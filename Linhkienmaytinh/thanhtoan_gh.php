<?php 
	include('before.php');
	if(!isset($_SESSION['ten_dn']))
	{
		echo"
				<script language='javascript'>
					alert('Bạn không có quyền truy cập trang này');
					window.location='index.php';
				</script>
			";	
	}
?>
<div  class="main" style="margin:10px 0px 0px 120px; width:80%;float:left ">
<a href="index.php"><button class="button" style="width:250px">Tiếp Tục Mua Hàng</button></a>
<?php 
	$ten_dn_tt=$_SESSION['ten_dn'];//echo $ten_dn;
	$date=date('Y-m-d');//echo $date;
	/////////////////////////////////////////////////////////////////lấy dữ liệu bảng gio_hang
	$query_gh_1="select * from gio_hang where username='$ten_dn'";
	$kq_gh_1=mysql_query($query_gh_1,$kn);
	if(mysql_num_rows($kq_gh_1)>0)
	{
		////////////////////////////////////////////////////////////////Thêm 1 đơn hàng	 																								
		$query_dh="insert into don_hang (thoigian_dat) values('$date')";
		$kq_dh=mysql_query($query_dh,$kn);
		///////////////////////////////////////////////////////////////Lấy id don hang
		$query_dh_id="select * from don_hang order by id_dh DESC limit 1";
		$kq_dh_id=mysql_query($query_dh_id,$kn);
		$row_dh_id=mysql_fetch_array($kq_dh_id);//echo $row_dh_id['id_dh'];
		$id_dh=$row_dh_id['id_dh'];
		
		while($row_gh_1=mysql_fetch_array($kq_gh_1))
		{
			$id_dt=$row_gh_1['id_dt'];
			$soluong=$row_gh_1['sl_lk'];//echo "$id_dt'-'$soluong'<br>'";
			$query_ct_dh="insert into chitiet_dh (username,id_lk,id_dh,sl_lk)
			values('$ten_dn','$id_lk','$id_dh',$soluong)";
			$kq_ct_dh=mysql_query($query_ct_dh,$kn);	
		}
	
			$query_xoa_gh="delete from gio_hang where username='$ten_dn'";
			$kq_xoa_gh=mysql_query($query_xoa_gh,$kn);
	}else{
			header('location:donhang.php');
		}
?>

<div style="margin:0px 119px 0px 0px; background-color:#f0f0f0;" align="center">
	<div style="width:350px; height:350px; margin-top:50px; 
    text-align:center; position:relative;">
    	<div style="position:absolute; top:70px; left:54px;">
            <p style="font-size:50px; color:#0F0; margin-top:50px;" >Đã Đặt Hàng</p>
            <p style="font-size:20px; color:#0F0;">ĐẶT HÀNG THÀNH CÔNG</p>
            <p>Mã Đơn Hàng Là:<?php echo $id_dh ?></p>
        </div>
    </div>
    
</div>
</div>


<?php 
	include('after.php');	
?>

