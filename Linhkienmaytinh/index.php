<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>LINH KIỆN MÁY TÍNH</title>
	<link rel="stylesheet" type="text/css" href="CSS.css"/>
	<script type="text/javascript" src="javascript.js"></script>
</head>

<body>
	<?php
		include("before.php");	
	?>
    
       <div  class="main" style="margin:10px 0px 0px 120px; width:80%;float:left ">
     
       <?php
			include("Ketnoi.php");
			if(!isset($_GET['trang']))
			{
				$trang=1;	
			}else{
				$trang=$_GET['trang'];	
				}
			$sotin1trang=12;
			$from=( $trang -1 )* $sotin1trang;
			
			?>
            <?php
			
			$kq =mysqli_query($kn, "select * from linh_kien limit $from") or die ("Khong the truy van1".mysqli_init());
			
			echo"<div align='right' style='height:30px;line-height:20px'>
       		<span>Hiển thị theo: 
            </span>
       		<span>
       		<select>
            	<option id='tdc'> Giá: thấp đến cao</option>	
                	 
                <option id='cdt'> Giá: cao đến thấp</option>	
            </select>
            </span>
            
       		</div>";
			
		   if(isset($_SESSION['ten_dn'])&&($_SESSION['ten_dn'])=='admin'){
		   echo("<table border='1' bordercolor='#FFCC66' width='100%' cellspacing='0'>");
			$dem=0;
			while($row=mysqli_fetch_array($kq)){
				if ($dem%4==0)
					echo("<tr>");
					
				echo("<td width='25%' height='350px' align='center'><img src='".$row["hinhanh_lk"]."' width='200px' height='180px'></br>");
				echo("<a href='chitietsanpham.php?id=". $row['id_lk']."'><b>".$row["ten_lk"]."</br>
					  ".$row["thongso"]."</b></a></br></br>
					  <b><font color='#FF0000' style='font-size:19px'>Giá: ".number_format($row["gia_lk"])." đ</fon></b></br></br>
					  <div><a href='sua_chitietsanpham.php?id=". $row['id_lk']."'><button class='button'><span>Sửa</span></button></a>
					  <span><a href='xoa_sanpham.php?id=". $row['id_lk']."'><button class='button'>Xóa</button></span></a>
					  </div>
					  </td>");
				$dem++;
				if($dem%4==0)
					echo("</tr>");
			}
			echo("</table>");
			}else{
			
				echo("<table border='1' bordercolor='#FFCC66' width='100%' cellspacing='0'>");
			$dem=0;
			while($row=mysqli_fetch_array($kq)){
				if ($dem%4==0)
					echo("<tr>");
					
				echo("<td width='25%' height='350px' align='center'><img src='".$row["hinhanh_lk"]."' width='200px' height='180px'></br>");
				echo("<a href='chitietsanpham.php?id=". $row['id_lk']."'><b>".$row["ten_lk"]."</br>
					  ".$row["thongso"]."</b></a></br></br>
					  <b><font color='#FF0000' style='font-size:19px'>Giá: ".number_format($row["gia_lk"])." đ</fon></b></br></br>
					  <div><a href='chitietsanpham.php?id=". $row['id_lk']."'><button class='button'><span>Xem chi tiết</span></button></a>
					  	   <a href='them_giohang.php?id_lk_add=".$row['id_lk']."'><button class='button' ><span>Thêm vào giỏ</span></button></a>
					  </div> 			

					  </td>");
					  		
				$dem++;
				if($dem%4==0)
					echo("</tr>");
			}
			echo("</table>");
			}
?>
       </div>
   	<div class="main" style="margin-top:10px; width:100%;float:left" align="center">
    <?php
	$sql1 = "select id_lk from linh_kien";
	$kq1 =mysqli_query( $kn, $sql1,);
		$tongsotin=mysqli_num_rows($kq1);
			$sotrang= ceil($tongsotin / $sotin1trang); //ceil lam tron len
		for($i=1; $i<=$sotrang; $i++){
			echo("<button class='button' style='width:35px; margin-right:5px'><a href='index.php?trang=$i' style='color:#FFF'> $i </a></button>");
		}
	?>
    </div>
    <?php
		include("after.php");	
	?>	
</body>
</html>
