<?php 
	include("ketnoi.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TVU</title>
<link rel="stylesheet" type="text/css" href="CSS.css"/>
</head>

<body>
	<div id="backround">
        <div id="top" align="left">
          <span style="width:160px; float:left; padding:2px 0px 1px 25px; text-align:center">
          <a href="index.php?trang=1"><img src="Hinhanh/logo.png" width="150" height="50"/></a></span>
          <form name="search" method="get" action="search.php">
          <span class="item" style="width:auto"><input type="text" size="40" name="textsearch"/></span>
          <button type="submit" class="buttona">
          <span class="item" style="padding:0px 0px 10px 10px"><img src="Hinhanh/search.png" width="30px" height="29px"></a></span></button></a>
		
		
          </form>
        </div>
        <div style="padding-top:10px">
        <span id="main">
        	<img src="Hinhanh/qc/qc1.jpg" height="280px" width="83%"/>
        </span>
        <span style=" width:16%; float:right; padding-top:20px">
        <?php 
			if(isset($_SESSION['ten_dn'])&&($_SESSION['ten_dn'])!='admin')
			{
					$ten_dn=$_SESSION['ten_dn'];
					$sql="select username,hinhdd from khanh_hang where username='".$ten_dn."'";
					
					$kq=mysqli_query($kn, $sql);
					while($row=mysqli_fetch_array($kq))
					{
					echo "<p align='center'><img src='".$row['hinhdd']."' width='90', height='70'</p></br>";
					}
					echo "<p align='center'> Xin Chào: <a href='sua2.php?user=$ten_dn'><b>".$_SESSION['ten_dn']."</b></a></p>";
					echo "<p align='center'><a href='sua2.php?user=$ten_dn'><button class='button' type='button'>Thông tin</button></a></p>";
					echo "<p align='center'><a href='giohang.php'><button class='button' type='button'>Giỏ hàng</button></a></p>";
					echo "<p align='center'><a href='dangxuat.php'><button class='button' type='button'>Đăng Xuất</button></a></p>";
			}
				else if(isset($_SESSION['ten_dn'])&&($_SESSION['ten_dn'])=='admin')
				{				
					$ten_dn=$_SESSION['ten_dn'];
					$sql="select adminname,hinhadmin from admin_tk where adminname='".$ten_dn."'";
					$kq=mysqli_query($kn, $sql);
					while($row=mysqli_fetch_array($kq))
					{
					echo "<p align='center'><img src='".$row['hinhadmin']."' width='90', height='70'</p></br>";
					}
					echo "<p style='padding-left:10px'> Xin Chào: <a href='trangadmin.php'><b>".$_SESSION['ten_dn']."</b></a></p>";
					
					echo "<p align='center'><a href='trangadmin.php'><button class='button' type='button'>Quản lý</button></a></p>";
					echo "<p align='center'><a href='dangxuat.php'><button class='button' type='button'>Đăng Xuất</button></a></p>";
				?>
                <?php
				}
				else
				{		
				?>
        	<form action="xulidangnhap.php" method="post">
				<div style="padding:7px">
        		<table width="100%">
                <tr>
                	<td bgcolor="#333333" height="35px" align="center"><b><font color="#FFFFFF">ĐĂNG NHẬP</font></b></td>  
                </tr>
                <tr >
                	<td></br>Tài khoản</td>
                </tr>
                <tr align="center">
                	<td><input type="text" name="textname" size="25"/></td>
                </tr>
                <tr>
                    <td>Mật khẩu</td>
                </tr>
                <tr align="center">
                	<td><input type="password" name="textpassword" size="25" /></td>
                </tr>
                <tr align="center">
                	<td style="padding-top:15px">
                    <button class="button" type="submit" style="width:45%">Đăng nhập</button>
                    <a href="dangki.php"><button class="button" type="button">Đăng kí</button></a>
                    </td>
                </tr>
                <tr align="center">
                	<td style="padding-top:15px" align="center">
                    
                    </td>
                </tr>
                </table>
                </div>
            </form>
            <?php }?>
        
            
            </span>
            </div>
    <?php
		include("Ketnoi.php");
		$sqli="select * from loai";
	    $kq=mysqli_query($kn, $sqli) or die ("Không thể truy vấn".mysqli_connect_error());
		?>		
		<div id="menu" style="margin-top:10px; width:100%" align="center">
			<ul type='none'>
            <?php
				if(!isset($_SESSION['ten_dn'])&&($_SESSION['ten_dn'])=='admin'){
			?>
			<?php
				while($row=mysqli_fetch_array($kq))	{	
		    ?>
            		
				<li>
					<?php echo"<a href='loai.php?id=".$row['id_loai']."'>".$row['ten_loai']."</a>";
					}?>
				</li>
				
			<?php } ?>
				
			<?php
				while($row=mysqli_fetch_array($kq))	{	
		    ?>
            		
				<li>
					<?php echo"<a href='sua_loai.php?id=".$row['id_loai']."'>".$row['ten_loai']."</a>";
					}?>
				</li>
		
		</ul></div>
        
        
        
        </div>
</body>
</html>
