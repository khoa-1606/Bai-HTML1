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
	
			$sql= "select * from linh_kien where id_lk";
	
			$query = mysql_query("SELECT MAX(id_lk) as max FROM linh_kien"); 
			$row = mysql_fetch_array($query);
			$highest_id = $row['max'] + 1;
	
			$kq =mysql_query($sql,$kn) or die ("Không thể truy vấn".mysql_error());
			
			
			echo ("<form	name='frmthem'	action='thuchien_themsanpham.php'	method='post' enctype='multipart/form-data'>");
			echo ("<table align='center'>");
	
			if($row=mysql_fetch_array($kq)){
				echo ("<tr>");
				echo ("<td width='20%'></td><td><h3>Thêm Sản Phẩm : <font color='#FF0000'>".$user."</font></h3></td>");
				echo ("</tr>");
				
				echo ("<tr>");
				echo ("<td width='100'>ID:</td>	<td><input	type='text' name='id_linhkien' value='".$highest_id."' readonly='readonly' size='5'></td>");
				echo ("</tr>");
				
				echo ("<tr>");
				echo ("<td>Loại:</td>
				<td>
					<select name='id_loai'>
					<option value=''>--Chọn loại--</option>
					<option value='cpu'>CPU</option>
                    <option value='mb'>MAINBOARD</option>
                    <option value='ocung'>Ổ CỨNG</option>
                    <option value='ram'>RAM</option>
					<option value='psu'>PSU</option>
					<option value='vga'>VGA</option>
					<option value='khac'>LK Khác</option>
					</select>
				</td>");
				echo ("</tr>");
				
				echo ("<tr>");
				echo ("<td>Hãng SX:</td>
				<td>
					<select name='id_hang'>
					<option value=''>--Chọn hãng--</option>
					<option value='1'>Intel</option>
                    <option value='2'>HP</option>
                    <option value='3'>SAMSUNG</option>
                    <option value='5'>Zadak</option>
					<option value='6'>MSI</option>
					<option value='7'>Western Digital</option>
					<option value='8'>Kingston</option>
					<option value='9'>PowerColor</option>
					<option value='10'>XIGMATEK</option>
					<option value='11'>CORSAIR</option>
					<option value='12'>GIGABYTE</option>
					<option value='13'>ASUS</option>
					<option value='14'>ADATA</option>
					<option value='15'>G.SKILL</option>
					<option value='16'>SEAGATE</option>
					<option value='17'>TRANSCEND</option>
					
					</select>
				</td>");
				echo ("</tr>");
				
				echo ("<tr>");
				echo ("<td>Tên linh kiện:</td>	<td><input	type='text'	name='ten_linhkien' size='50'></td>");
				echo ("</tr>");
				
				echo ("<tr>");
				echo ("<td>Thông tin:</td>	<td><textarea cols='80' rows='10' name='thongtin_linhkien'></textarea></td>");
				echo ("</tr>");
				
				echo ("<tr>");
				echo ("<td>Thông số:</td>	<td><textarea cols='80' rows='2' name='thongso_linhkien'></textarea></td>");
				echo ("</tr>");
				
				echo ("<tr>");
				echo ("<td>Số lượng:</td>	<td><input	type='text'	name='soluong_linhkien' value='100' size='5'></td>");
				echo ("</tr>");
				
				echo ("<tr>");
				echo ("<td>Giá:</td> <td><input	type='text'	name='gia_linhkien' ></td>");
				echo ("</tr>");
				
				echo ("<tr>");
				echo ("<td>Hình 1 (Chính):</td><td> <input type='file' name='hinhanh'> </td>");
				echo ("</tr>");
				
				echo ("<tr>");
				echo ("<td>Hình 2:</td><td> <input type='file' name='hinhanh_02'> </td>");
				echo ("</tr>");
				
				echo ("<tr>");
				echo ("<td>Hình 3:</td><td> <input type='file' name='hinhanh_03'> </td>");
				echo ("</tr>");
							
				echo ("<tr>");
				echo ("<td colspan='2'><button class='button' type='submit' name='suatt' style='width:20%;margin:10px'>Thêm</button>"); 
				echo ("<a href='trangqltv.php'><button class='button' type='button' style='width:20%'>Hủy</button></a></td>");
				echo ("</tr>");
				
			}
	
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
