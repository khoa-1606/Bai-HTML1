// JavaScript Document

function Cong(){
		var sl=document.getElementById('sl');
		sl.value++;
}

function Tru(){
		var sl=document.getElementById('sl');
		sl.value--;
		if(sl.value<0)
		{
			sl.value=1;	
		}
}


function Anhien(){
    var bt = document.getElementById('noidung');
    if (bt.style.display === 'block')
	{
        bt.style.display = 'none';
    }
	else
	{
        bt.style.display = 'block';
    }
}

//lam
function dk()
{
	var ten_dn=document.dangki.tendn.value;
	var mk=document.dangki.matkhau.value;
	var ten=document.dangki.hoten.value;
	var qq=document.dangki.quequan.value;
	var dt=document.dangki.sdt.value;
	if(ten=="")
	{
		alert("mời bạn nhập tên !!!");
		document.dangki.hoten.focus();
		return false;
	}
	
	
	 if(ten_dn=="")
	{
		alert("mời bạn nhập tên đăng nhập lại !!!");
		document.dangki.tendn.focus();
		
		return false;
	}
	
	
	if(mk=="")
	{
		alert("mời bạn nhập mật khẩu lại !!!");
		document.dangki.matkhau.focus();
		
		return false;
	}
	if(dt=="")
	{
		alert("mời bạn nhập số điện thoại lại !!!");
		document.dangki.sdt.focus();
		
		return false;
	}
	
	
}