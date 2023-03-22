<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LINH KIỆN MÁY TÍNH</title>
<link rel="stylesheet" type="text/css" href="CSS.css"/>
</head>

<body>

	<div id="backround">
        <div id="top" align="left">
          <span style="width:160px; float:left; padding:2px 0px 1px 25px; text-align:center">
          <a href="index.php"><img src="Hinhanh/logo.png" width="150" height="50"/></a></span>
          <span class="item" style="width:auto"><input type="text" size="40"/></span>
          <span class="item" style="padding:11px 0px 13px 3px"><img src="Hinhanh/search.jpg" width="50" height="30"/></span>
        </div>
        
	<div id="menu">
    		<ul type="none">
            	<li><a href="index.php">TRANG CHỦ</a></li>
            	<li><a href="cpu.php">CPU</a></li>
                <li><a href="mainboard.php">MAINBOARD</a></li>
                <li><a href="ram.php">RAM</a></li>
                <li><a href="ocung.php">Ổ CỨNG</a></li>
                <li><a href="vga.php">VGA</a></li>
                <li><a href="psu.php">PSU</a></li>
                <li><a href="khac.php">LINH KIỆN KHÁC</a></li> 
            </ul>
    </div>
        
        <div id="dangnhap"> 	
				<div style="padding:10px">
        		<?php
				include("Ketnoi.php");
				$sqli = "select * from khach_hang";
				$kq =mysqli_query($kn, $sql) or die ("Khong the truy van".mysqli_connect_error());
				echo("".$row["ten_kh"]."");
    			?>
		
</body>
</html>
