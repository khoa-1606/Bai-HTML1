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
		echo("<div class='main' style='margin:20px 0px 0px 90px; height:800px' align='center'>");
    	echo("<div style='float:center; height:400px; width:90%'>");
    		echo("<div style='float:left; height:400px; width:35%; margin-left:25px'>");
			include("Ketnoi.php");
			$id=($_GET['id']);
			$sql= "select * from linh_kien where id_lk='".$id."'";
			$kq =mysql_query($sql,$kn) or die ("Không thể truy vấn".mysql_error());
		
			
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
				echo("<form >");
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
						  <td align='center'><a href='them_giohang.php?id_lk_add=".$row['id_lk']."'>
						  <button class='button' style='width:170px'>Thêm vào giỏ</button></a></td></tr>");	
							   
 
					echo("<tr><td align='center' colspan='2'>
					<button type='button' class='button' style='width:80%;height:45px' onclick='Anhien()'>Cấu hình chi tiết</button></td></tr>
					<tr>
					<td align='left' colspan='2' ><font size='+1'><div id='noidung' style='display:none'><hr>".$row['thongtin_lk']."</div></font></td>
					</tr>");	
				echo("</table>");
				echo("</form>");
				
				echo("</div>");
				
			}
			}
			echo("</div>");
		echo("</div>");
			
			
		?>
		
       
		
          
	
	<?php
	include("after.php");	
?>	
          
</body>
</html>
