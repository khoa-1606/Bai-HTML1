<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng kí thành viên</title>
<script language="javascript" src="javascript.js">
</script>
</head>
<link rel="stylesheet" type="text/css" href="CSS.css"/>
<body>
<?php
		include("before.php");
	?>
    <div class="main" style="margin-top:10px" align="center">
    <h2 align="center">ĐĂNG KÍ THÀNH VIÊN</h2>
        <font size="+1"><form name="dangki" action="xulidangki.php" method="post" enctype="multipart/form-data" onsubmit="return dk();">
        	<table align="center" cellspacing="20px">
                <tr>
                    <td>Tên đăng nhập: </td>
                    <td width=""><input type="text" name="tendn" size="20" placeholder="Tên đăng nhập"/></td>
                </tr>
                <tr>   
                    <td>Mật khẩu:</td>
                    <td><input type="password" name="matkhau" size="20" placeholder="Mật khẩu"/></td>
                </tr>
                <tr>
                    <td>Họ và tên:</td><td><input type="text" name="hoten" size="20" placeholder="Họ tên"/></td>
                </tr>
                <tr>
                    <td>Số điện thoại:</td><td><input type=text name="sdt" maxlength="11" placeholder="Số điện thoại"/></td>
                </tr>
                <tr>
                    <td>Quê quán: </td>
                    <td><select name="quequan">
                        <option value="travinh">Trà Vinh</option>
                        <option value="vinhlong">Vĩnh Long</option>
                        <option value="bentre">Bến Tre</option>
                        <option value="hanoi">Hà Nội</option>
                        </select><br /></td>
                </tr>
                <tr>
                    <td>Giới tính</td>
                    <td>
                        <input type="radio" name="gioitinh" value="1" />Nam
                        <input type="radio" name="gioitinh" value="0" />Nữ
                    </td>
                </tr> 
                <tr>
                    <td>Ảnh đại diện</td>
                    <td>
                        <input type="file" name="hinhanh"/>
                    </td>
                </tr> 
                <tr> 
                	<td align="center"><button class='button' type="submit"  style="width:100px; height:30px; background-color:#F00 ; border:none;" />Đăng kí</button></td>
                    <td align="center"><button class='button' type="reset" style="width:150px"><span>Nhập lại</span></button></td>
                </tr>
                </table>
                </form>
                </font>
                    </div>
                    </div>
<?php
	include("after.php");	
?>	
                
                
            
    
</body>
</html>
