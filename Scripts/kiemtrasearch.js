// JavaScript Document
function ktrasearch()
{
	if(document.ftim.tk.value=='Nhập tên sản phẩm...'&document.ftim.select.value==0&document.ftim.select1.value==0&document.ftim.giatu.value==0&document.ftim.giaden.value==0)
	{
		alert ("Bạn chưa nhập từ khóa cần tìm");		
		document.ftim.focus;
		return false;
		}
		if(document.ftim.giatu.value!=0&document.ftim.giaden.value==0)
	{
		alert ("Bạn chưa chọn giá đến");		
		document.ftim.focus;
		return false;
		}
		if(document.ftim.giatu.value==0&document.ftim.giaden.value!=0)
	{
		alert ("Bạn chưa chọn giá từ");		
		document.ftim.focus;
		return false;
		}
	
	return true;
	
}