<?php 
	include('before.php');
	if(!isset($_SESSION['ten_dn']))
	{
		echo "
				<script language='javascript'>
					alert('Vui lòng đăng nhập để sử dụng chức năng này');
					window.location='dangnhap.php';
				</script>
			";	
	}
?>
<div  class="main" style="margin:10px 0px 0px 120px; width:80%;float:left ">
<p style="text-align:center; color:#F60; font-size:36px;">Đơn Hàng Của Bạn</p>
<p align="center" style="margin-top:20px; color:#F30;"></p>
<div id="content" style="width:51%; margin-right:260px; background-color:white;position:relative;">

<?php
	$ten_dn=$_SESSION['ten_dn'];
	$query_dh="select * from don_hang";
	$kq_dh=mysql_query($query_dh,$kn);
	$dem=0;//neu biến đếm bang tổng giỏ hàng thì đơn hàng trống
	$ktdem=mysql_num_rows($kq_dh);//lay tong gio hàng
	/////////////////////////////////////////////////////////////////////////////////////////////////select ctdh
	while($row_dh=mysql_fetch_array($kq_dh))
	{
		$id_dh=$row_dh['id_dh'];
		$trangthai=$row_dh['trang_thai'];
		$query_ct_dh="select * from chitiet_dh a, linh_kien b where a.id_lk=b.id_lk and username='$ten_dn'
		and a.id_dh=$id_dh";
		$kq_ct_dh=mysql_query($query_ct_dh,$kn);
		if(mysql_num_rows($kq_ct_dh)>0)//kiem tra neu ton tai don hang cua nguoi dung
		{
?>
	
	<div>
				<h4 style="color:#333; float:left;">Mã Đơn Hàng: <?php echo $id_dh ?></h4>
                 <?php 
					if($trangthai==0)
					{
                		echo"
						<div style='position:absolute; width:27px; height:27px; background-color:#FFF;
                		text-align:center; line-height:27px; border-radius:100%; border:1px #F00 solid; left:266px;' >
                   
							<a href='huy_dh.php?id_dh_x=$id_dh' style='color:#F00; font-size:12px; display:block;'>Hủy</a>
							
                		</div>";
					}else{	
                		echo"
						<div style='position:absolute; width:27px; height:27px; text-align:center; line-height:27px;    	
						border-radius:100%; border:1px dimgray solid; left:266px; cursor: default' >
                   
							<span style='color:imgray; font-size:12px; display:block;'>Hủy</span>
							
                		</div>";
						}
				?>
                <?php 
					
				?>
				<h4 style="color:currentColor; float:right;">
               
                </h4>
			</div>
			<table width="100%"cellspacing="0px" height="300px;" style="margin-bottom:20px; background-color:aliceblue">
				<tr>
					<th>STT</th>
					<th>Ảnh Sản Phẩm</th>
					<th>Tên Sản Phẩm</th>
					<th>Giá Sản Phẩm</th>
					<th>Số Lượng</th>
				</tr>
                
		<?php 
			$i=1;
			$gia_goc=0;
			 		
            while($row_ct_dh=mysql_fetch_array($kq_ct_dh))//tạo ra các dòng trong bảng
            {
				
				$gia_goc  +=$row_ct_dh['gia_lk'] * $row_ct_dh['sl_lk'];//lấy tổng giá gốc
				
				
				
        ?>
                
                    <tr align="center">
                        <td><?php echo $i ?></td>
                        <td><img src="<?php echo $row_ct_dh['hinhanh_lk']; ?>" width="70" /></td>
                        <td><?php echo $row_ct_dh['ten_lk']; ?></td>
                        <td><?php echo number_format($row_ct_dh['gia_lk'],0,',','.'); ?></td>
                        <td ><?php echo $row_ct_dh['sl_lk'] ?></td>
                    </tr>                    
        <?php
        		$i++; 
            }//kt while 2
			
        ?>
        		<tr>
                    <td colspan="2" align="center" style="color:#F30">Giá gốc:<?php echo number_format($gia_goc,0,',','.');?>đ</td>
                
					
				</tr>
			</table>		
<?php 
		}else{$dem++;}
	}//kt while 1
	if($dem==$ktdem)
	{
		echo "<p/0>Không Có Đơn Hàng Nào</p>";	
	}
 ?>
</div>

<?php 
	include('after.php');
?>