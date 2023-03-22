<?php
$kn=mysqli_connect("localhost","root") or die ("Không thể kết nối đến SERVER".mysqli_connect_error());
$csdl=mysqli_select_db($kn,"weblinhkienpc") ; ("Không thể chọn CSDL weblinhkienpc".mysqli_connect_error());
mysqli_query($kn, "SET NAMES 'utf8'");
?>