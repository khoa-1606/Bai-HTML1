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

</div>
<div  class="main" style="margin:10px 0px 0px 120px; width:80%;float:left ">

<a href="index.php" style="color:#F60;"><button class="button" style='width:100px'>Mua tiếp</button></a>
<h2 align="center">Giỏ Hàng Của Bạn</h2>
	<table>
        	<th align="center">Hình ảnh</th>
        	<th align="center">Tên sản phẩm</th>
            <th align="center">Giá</th>
            <th align="right" width="150px"></th>
<?php 
	$ten_dn=$_SESSION['ten_dn'];//echo $ten_dn;
	
	$sql="select * from gio_hang where username='$ten_dn'";
	
	
	$kq =mysql_query($sql,$kn);
	
	
	$kiemtrasl=mysql_num_rows($kq);
	
	if($kiemtrasl>0)
	{
		$tongtien=0;
		while($row_gh=mysql_fetch_array($kq))
		{
			//////////////////////////////////////////////////////////////truy vấn lấy tung sản phẩm
			$id_lk_gh=$row_gh['id_lk'];
			$query_id_lk="select * from linh_kien where id_lk='$id_lk_gh'";
			$kq_id_lk=mysql_query($query_id_lk,$kn);
			$row_idlk=mysql_fetch_array($kq_id_lk);
			
		
			
			
			//////////////////////////////////////////////////////////////truy vấn lấy sô lượng
			
			$query_gh_sl="select sl_lk from gio_hang where username='$ten_dn' and id_gio='$id_lk_gh' ";
			$kq_gh_sl=mysql_query($query_gh_sl,$kn);
			$row_gh_sl=mysql_fetch_array($kq_gh_sl);
			
			////////////////////////////////////////////////////////////////tinh tổng
			$tongtien+=$row_idlk['gia_lk']*$row_gh_sl['sl_lk'];
			
	?>
	
			<tr>
            	<td align="center"><img src="<?php echo $row_idlk['hinhanh_lk'] ?>" width='200px' height='200px' /></td>
			
		
				  <td align="center"><b><?php echo $row_idlk['ten_lk']; ?></b>
				  <b><?php echo $row_idlk['thongso']; ?></b></td>
				  <td align="center"><b><font color="#FF0000">Giá:<?php echo number_format($row_idlk['gia_lk']) ?>&nbsp;đồng</font></b></td>
			
			<td align="right"><a href="xulyxoa_gh.php?id_xx=<?php echo $id_lk_gh; ?>" ><button class="button" style='width:100px'> Xóa</button></a></td>
	
		<?php 
			}
			
		?>
		</tr>
		</table>
			 </br>
             </br><div align="center"><a href="thanhtoan_gh.php" onclick="return confirm('Đặt hàng thành công')"><button class="button"  style='width:100px'>Đặt Hàng</button></a>
		</div>
  <?php 
  	}else{
			echo "<p>Giỏ Hàng Đang Trống</p>";
		}
  ?>
</div>

<?php 
	include('after.php');
?>