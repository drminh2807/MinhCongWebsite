// JavaScript Document
function LayNoiDung(url)
{	
	url+="&thdiem=".concat((new Date()).getTime());	

	try{ 
	var h;
	if(window.ActiveXObject) h=new ActiveXObject("Microsoft.XMLHTTP");				
	else h= new XMLHttpRequest();	
	h.onreadystatechange=function() {
			if (h.readyState==4) 				
				if (h.status==200) 
					document.getElementById('Content').innerHTML=h.responseText;				
				else alert("Không lấy dữ liệu được. " + h.statusText+ "-"+ h.responseText);
	}
	h.open("GET",url,false);	
	h.send(null);	
	}
	catch (e) { alert("Lỗi "+ e.description + "-"+ h.responseText);}
}
function KetQuaBinhChon(url,tendoituong)
{	
	url+="&thdiem=".concat((new Date()).getTime());	

	try{ 
	var h;
	if(window.ActiveXObject) h=new ActiveXObject("Microsoft.XMLHTTP");				
	else h= new XMLHttpRequest();	
	h.onreadystatechange=function() {
			if (h.readyState==4) 				
				if (h.status==200) 
					document.getElementById(tendoituong).innerHTML=h.responseText;				
				else alert("Không lấy dữ liệu được. " + h.statusText+ "-"+ h.responseText);
	}
	h.open("GET",url,false);	
	h.send(null);	
	}
	catch (e) { alert("Lỗi "+ e.description + "-"+ h.responseText);}
}
function chonSP(url){	
	url+="&thdiem=".concat((new Date()).getTime());	

	try{ 
	var h;
	if(window.ActiveXObject) h=new ActiveXObject("Microsoft.XMLHTTP");				
	else h= new XMLHttpRequest();	
	h.onreadystatechange=function() {
			if (h.readyState==4) 				
				if (h.status==200) 
					document.getElementById('giohang').innerHTML=h.responseText;				
				else alert("Không lấy dữ liệu được. " + h.statusText+ "-"+ h.responseText);
	}
	h.open("GET",url);	
	h.send(null);	
	}
	catch (e) { alert("Lỗi "+ e.description + "-"+ h.responseText);}
}
function checkusername1(url,obj)
{	
	url+="?Username="+ obj.value;
	url+="&thdiem=".concat((new Date()).getTime());	/*de len server lay chinh xac hon*/
	try{ 
	var h;	
	if(window.ActiveXObject) h=new ActiveXObject("Microsoft.XMLHTTP");	/* window.activeXObject: trinh duyet la ie */			
	else h= new XMLHttpRequest();	/* readyState co 4 trang thai la 1, 2,3,4*/
	h.onreadystatechange=function() {
			if (h.readyState==4) 	/* readyState=4 du lieu da tra ve */			
				if (h.status==200) /* cho biet trang request chay ok hay ko */
					if (h.responseText!=0) { /* du lieu do ve, khac 0 la de co nguoi dung */
						document.getElementById('thongbao').innerHTML=h.responseText;				
						document.getElementById('KT_Insert1').disabled=true;
						obj.focus();
						obj.select(); /* boi den dong chu */
					}
					else { 
						document.getElementById('thongbao').innerHTML=""; /* co the go chu de thay the dau nhay */				
						document.getElementById('KT_Insert1').disabled=false;					
					}
				else alert("Không lấy dữ liệu được. " + h.statusText+ "-"+ h.responseText);
	}
	h.open("GET",url,false); /* chuẩn bị kết nối được tạo trong bộ nhớ */	
	h.send(null);	
	}
	catch (e) { alert("Lỗi "+ e.description + "-"+ h.responseText);}
}

<!-- Kiểm tra email -->
function checkemail1(url,obj)
{	
	url+="?Email="+ obj.value;
	url+="&thdiem=".concat((new Date()).getTime());	
	try{ 
	var h;	
	if(window.ActiveXObject) h=new ActiveXObject("Microsoft.XMLHTTP");				
	else h= new XMLHttpRequest();	
	h.onreadystatechange=function() {
			if (h.readyState==4) 				
				if (h.status==200) 
					if (h.responseText!=0) {
						document.getElementById('thongbao_email').innerHTML=h.responseText;				
						document.getElementById('KT_Insert1').disabled=true;
						obj.focus();
						obj.select();
					}
					else { 
						document.getElementById('thongbao_email').innerHTML="";				
						document.getElementById('KT_Insert1').disabled=false;					
					}
				else alert("Không lấy dữ liệu được. " + h.statusText+ "-"+ h.responseText);
	}
	h.open("GET",url,false);	
	h.send(null);	
	}
	catch (e) { alert("Lỗi "+ e.description + "-"+ h.responseText);}
}
/* End */