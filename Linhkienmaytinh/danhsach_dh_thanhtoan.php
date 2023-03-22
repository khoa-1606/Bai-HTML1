<?php 
	include('before.php');
?>
<div  class="main" style="margin:10px 0px 0px 120px; width:80%;float:left ">
<?php 
	$query_dh="select * from don_hang
	";
	$kq_dh=mysql_query($query_dh,$kn);
	if(mysql_num_rows($kq_dh)>0)
	{
		while($row_dh=mysql_fetch_array($kq_dh))
		{	$id_dh=$row_dh['id_dh'];
			/////////////////////////////////////////////////////////////////////////////////////////////////////truy vấn 1
			$query_ct="select * from chitiet_dh a,khanh_hang b , linh_kien c where a.username=b.username and 
			a.id_lk=c.id_lk and a.id_dh=$id_dh";
			$kq_ct=mysql_query($query_ct,$kn) or die ("Không thể truy vấn 1".mysql_error());
			$row_ct=mysql_fetch_array($kq_ct);
			/////////////////////////////////////////////////////////////////////////////////////////////////////truy van 2
			$query_ct_1="select * from chitiet_dh a,khanh_hang b , linh_kien c where a.username=b.username and 
			a.id_lk=c.id_lk and a.id_dh=$id_dh";
			$kq_ct_1=mysql_query($query_ct_1,$kn)  or die ("Không thể truy vấn 2".mysql_error());;
			//echo mysqli_num_rows($kq_ct);
		
?>	
            <div style="width:100%; height:40px; background-color:#CCC; position:relative;">
                <p>Tên Khách Hàng:<a href="sua2.php?qt_kt=<?php echo $row_ct['username'] ?>" style="color:#F30;">
                                <?php echo $row_ct['username'] ?></a>
                </p>
              
                <p>ID Giỏ Hàng:<b style="color:#60F;"><?php echo $row_ct['id_dh']; ?></b></p>
            </div>
            <table width="100%"cellspacing="0px" height="200px;" border="1px" style="margin-bottom:20px; 
            background-color:aliceblue;">
                        <tr>
                            <th>STT</th>
                            <th>Tên Linh Kiện</th>
                            <th>Giá Sản Phẩm</th>
                          
                            <th>Số Lượng</th>
                        </tr>
                        
    <?php 
			$dem=1;
			$gia_tt=0;
			while($row_ct_1=mysql_fetch_array($kq_ct_1))
			{
				$gia_tt+=$row_ct_1['gia_lk'];	
	?>	
                    <tr align="center">
                        <td><?php echo $dem ?></td>
                        <td><?php echo $row_ct_1['ten_lk'] ?></td>
                        <td><?php echo number_format($row_ct_1['gia_lk'],0,',','.'); ?>đ.</td>
                    
                        <td><?php echo $row_ct_1['sl_lk'] ?></td>
                    </tr>
                                        
<?php 
				$dem++;
			}//kt while 2
			
			echo "</table>";	
		}//kt while 1
	}else{
			echo "<b>Không Có Đơn Hàng Nào</b>";
		}
?>


<?php 
	include('after.php');
?>