<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chi tiết sản phẩm</title>
</head>
<link rel="stylesheet" type="text/css" href="CSS.css"/>
<script language="javascript" src="javascript.js"></script>
<body>
<?php
		include("before.php");
	?>
	  
    <?php		
    	echo("<div  class='main' style='margin:30px 0px 0px 120px; width:80%;float:left ''>");
			include("ketnoi.php");
	
			$id=($_GET['id']);
			$sql= "select * from linh_kien where id_lk='".$id."'";
			$kq =mysql_query($sql,$kn) or die ("Không thể truy vấn".mysql_error());
			
			
			echo ("<form	name='frmsua'	action='thuchien_sua_chitietsanpham.php'	method='post' enctype='multipart/form-data'>");
			echo ("<table align='center'>");
			echo("<tr>");
			echo ("<td align='center'><h1><b>---Sửa Thông Tin Sản Phẩm---</td>");
			echo ("</table >");
			
			echo ("<table align='center' border='1'>");
	
			if($row=mysql_fetch_array($kq)){
				
				echo ("<tr>");
				echo ("<td>ID:</td>	<td><input	type='text'	readonly='readonly' size='5' name='id_linhkien' value='".$row["id_lk"]."'></td>");
				echo ("</tr>");
				
				echo ("<tr>");
				echo ("<td>id_loai:</td>	<td><input	type='text'	readonly='readonly' size='5' name='id_loai' value='".$row["id_loai"]."'></td>");
				echo ("</tr>");
				
				echo ("<tr>");
				echo ("<td>Tên linh kiện:</td>	<td><input	type='text' size='50'	name='ten_linhkien' value='".$row["ten_lk"]."'></td>");
				echo ("</tr>");
				
				echo ("<tr>");
				echo ("<td>Thông tin:</td>	<td><textarea cols='80' rows='10' name='thongtin_linhkien'>".$row["thongtin_lk"]."</textarea></td>");
				echo ("</tr>");
				
				echo ("<tr>");
				echo ("<td>Thông số:</td>	<td><textarea cols='80' rows='2' name='thongso_linhkien'>".$row["thongso"]."</textarea></td>");
				echo ("</tr>");
				
				echo ("<tr>");
				echo ("<td>Số lượng:</td>	<td><input	type='text'	name='soluong_linhkien' value='".$row["sl_lk"]."'></td>");
				echo ("</tr>");
				
				echo ("<tr>");
				echo ("<td>Giá:</td> <td><input	type='text'	name='gia_linhkien' value='".$row["gia_lk"]."'></td>");
				echo ("</tr>");
				
				echo ("<tr>");
				echo ("<td>Hình 1 (Chính):</td><td><img	src='".$row["hinhanh_lk"]."'height='100'
				width='100'><input type='hidden' name='hinhcu' value='".$row["hinhanh_lk"]."'>Ảnh mới:<input type='hidden' name='MAX_FILE_SIZE1' value='2000000' /> <input type='file' name='hinhmoi' value=''></td>");
				echo ("</tr>");
				
				echo ("<tr>");
				echo ("<td>Hình 2:</td><td><img	src='".$row["hinhanh_02"]."'height='100'
				width='100'><input type='hidden' name='hinhcu_02' value='".$row["hinhanh_02"]."'>Ảnh mới:<input type='hidden' name='MAX_FILE_SIZE2' value='2000000' /> <input type='file' name='hinhmoi_02' value=''></td>");
				echo ("</tr>");
				
				echo ("<tr>");
				echo ("<td>Hình 3:</td><td><img	src='".$row["hinhanh_03"]."'height='100'
				width='100'><input type='hidden' name='hinhcu_03' value='".$row["hinhanh_03"]."'>Ảnh mới:<input type='hidden' name='MAX_FILE_SIZE3' value='2000000' /> <input type='file' name='hinhmoi_03' value=''></td>");
				echo ("</tr>");
				
			}
			echo ("<table align='center'>");
			echo("<tr>");
			echo ("<td align='center'><b><button class='button' type='submit' name='suatt' style='width:100px'>Sửa</button>&nbsp;&nbsp;&nbsp;&nbsp;</td>");
			echo ("<td align='center'><b><button class='button' type='button' style='width:100px'>Hủy</button></td>");
			echo ("</table >");
	
			echo ("</table>");
			echo ("</form>");
	
			
			
			/*
			if($row=mysql_fetch_array($kq)){
				
							
			echo ("<div><img src='".$row['hinhanh_lk']."' width='100%' height='100%'/></div>");
			
			echo ("<div style='float:left'");
				echo("<span><img src='".$row['hinhanh_lk']."' width='33%''/></span>");
				echo("<span><img src='".$row['hinhanh_02']."' width='33%''/></span>");
				echo("<span><img src='".$row['hinhanh_03']."' width='33%''/></span>");
				echo("</div>");
			echo("</div>");	
			
			echo("<div style='float:right; width:58%; margin-left:10px'>");
				
				echo("<p align='center'><font size='+2'>".$row['ten_lk']." ".$row['thongso']." </font></p>");
				echo("<form>");
				echo("<table align='center' cellpadding='10px'>");
				
				echo("<tr>");
				echo("<td align='center' style='width:15%'><font size='+2'>Hãng sản xuất</font></td>");
				
				$sql2 = "select * from hang_sx";
				$kq2 =mysql_query($sql2,$kn);
				if($row2=mysql_fetch_array($kq2)){
					
				echo("<td align='center' style='width:15%'><p><font size='+2'>".$row2['ten_hang']." </font></p></td>");
				echo("</tr>");
				
				
				echo("<tr>");
				echo("<td align='center'><font size='+2'>Giá</td>");
				echo("<td align='center'><font size='+3' color='#FF0000' >".number_format($row["gia_lk"])." đ </font></td>");
				echo("</tr>");
				
				echo("<tr>");
				echo("<td align='center'>	
							<input type='button' value='-' id='tru' onclick='Tru();'/>
							<input type='text' size='1' value='1' id='sl' readonly='readonly' />
							<input type='button' value='+' id='cong' onclick='Cong();'/>
					  </td>
					  <td align='center'>Kho: ".$row['sl_lk']."</td></tr>");
			
				echo("<tr><td align='center'><button class='button' style='width:170px'>Mua</button></td>
						  <td align='center'><button class='button' style='width:170px'>Thêm vào giỏ</button></td></tr>");	
							   
 
					echo("<tr><td align='center' colspan='2'>
					<button type='button' class='button' style='width:80%;height:45px' onclick='Anhien()'>Cấu hình chi tiết</button></td></tr>
					<tr>
					<td align='left' colspan='2' ><font size='+1'><div id='noidung' style='display:none'><hr>".$row['thongtin_lk']."</div></font></td>
					</tr>");	
				echo("</table>");
				echo("</form>");
				
				echo("</div>");
				
			}
			}*/
			echo("</div>");
		echo("</div>");
			
			
		?>
		
       
		
          
	
	<?php
	include("after.php");	
?>	
          
</body>
</html>
