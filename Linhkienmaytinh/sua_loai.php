<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WEBLINHKIENTV</title>
<link rel="stylesheet" type="text/css" href="CSS.css"/>
</head>

<body>
<?php
		include("before.php");
	?>
       <div  class="main" style="margin:30px 0px 0px 120px; width:80%;float:left ">
      	
       <?php
			$id=($_GET['id']);
			
			if($id=='tc')
				header('location:index.php?trang=1');
			else
			{	
			$sql= "select * from linh_kien where id_loai='".$id."'";
			$idlk=$row["id_lk"];
			$kq =mysql_query($sql,$kn) or die ("Khong the truy van".mysql_error());
			
			if(isset($_SESSION['ten_dn'])&&($_SESSION['ten_dn'])=='admin'){
		   echo("<table border='1' bordercolor='#FFCC66' width='100%' cellspacing='0'>");
			$dem=0;
			while($row=mysql_fetch_array($kq)){
				if ($dem%4==0)
					echo("<tr>");
					
				echo("<td width='25%' height='350px' align='center'><img src='".$row["hinhanh_lk"]."' width='200px' height='180px'></br>");
				echo("<a href='chitietsanpham.php?id=". $row['id_lk']."'><b>".$row["ten_lk"]."</br>
					  ".$row["thongso"]."</b></a></br></br>
					  <b><font color='#FF0000' style='font-size:19px'>Giá: ".number_format($row["gia_lk"])." đ</fon></b></br></br>
					  <div><a href='sua_chitietsanpham.php?id=". $row['id_lk']."'><button class='button'><span>Edit</span></button></a>
					  <span><a href='xoa_sanpham.php?id=". $row['id_lk']."'><button class='button'>Delete</a></button></span>
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
			while($row=mysql_fetch_array($kq)){
				if ($dem%4==0)
					echo("<tr>");
					
				echo("<td width='25%' height='350px' align='center'><img src='".$row["hinhanh_lk"]."' width='200px' height='180px'></br>");
				echo("<a href='chitietsanpham.php?id=". $row['id_lk']."'><b>".$row["ten_lk"]."</br>
					  ".$row["thongso"]."</b></a></br></br>
					  <b><font color='#FF0000' style='font-size:19px'>Giá: ".number_format($row["gia_lk"])." đ</fon></b></br></br>
					  <div><a href='chitietsanpham.php?id=". $row['id_lk']."'><button class='button'><span>Xem chi tiết</span></button></a>
					  	   <button class='button'><span>Thêm vào giỏ</span></button>
					  </div>
					  </td>");
				$dem++;
				if($dem%4==0)
					echo("</tr>");
			}
			echo("</table>");
			
			}
		}
?>
       </div>
       
      	
       </div>
   	</div>
    <?php
		include("after.php");	
	?>
</body>
</html>
