<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LINH KIỆN MÁY TÍNH</title>
<link rel="stylesheet" type="text/css" href="CSS.css"/>
</head>

<body>
	<?php
		include("before.php");
	?>
       <div class="main" style="margin-top:10px">
       <form name="locsp">
       <div align="right" style="height:30px;line-height:20px">
       		<span>Hiển thị theo: 
            </span>
       		<span>
       		<select>
            	<option> Giá: thấp đến cao</option>	
                <option> Giá: cao đến thấp</option>	
            </select>
            </span>
            <span>
            	<input type="submit" value="Lọc"/>
            </span>
       </div>
       </form>
       <?php
			include("Ketnoi.php");
			$sql = "select * from linh_kien";
			$kq =mysql_query($sql,$kn) or die ("Khong the truy van".mysql_error());
			echo("<table border='1' bordercolor='#FFCC66' width='100%' cellspacing='0'>");
			$dem=0;
			while($row=mysql_fetch_array($kq)){
				if ($dem%4==0)
					echo("<tr>");
					
				echo("<td width='25%' height='350px' align='center'><img src='".$row["hinhanh_lk"]."' width='200px' height='180px'></br>");
				echo("<a href='#'><b>".$row["ten_lk"]."</br>
					  ".$row["thongso"]."</b></a></br></br>
					  <b><font color='#FF0000'>Giá: ".number_format($row["gia_lk"])." đ</fon></b></br></br>
					  <div><button class='button'><span>Xem chi tiết</span></button>
					  	   <button class='button'><span>Thêm vào giỏ</span></button>
					  </div>
					  </td>");
				$dem++;
				if($dem%4==0)
					echo("</tr>");
			}
			echo("</table>");
?>
       </div>
   	</div>
    <?php
		include("after.php");	
	?>	
</body>
</html>
