// JavaScript Document
function search_course()
	{
	var search_item = document.getElementById('search').value;
	var xmlhttp;
	if (window.XMLHttpRequest)
  		{// code for IE7+, Firefox, Chrome, Opera, Safari
  		xmlhttp=new XMLHttpRequest();
  		}
	else
  		{// code for IE6, IE5
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
	xmlhttp.onreadystatechange=function()
  		{
  		if (xmlhttp.readyState==4 && xmlhttp.status==200)
    		{
    		document.getElementById('content').innerHTML=xmlhttp.responseText;
			}
 		}
	xmlhttp.open("GET","./sresult.php?item="+search_item,true);
	xmlhttp.send();
	}