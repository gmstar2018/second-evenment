window.onload=function(){
  		var inp=document.getElementsByTagName('input')[0];
		var p=document.getElementsByClassName(".p2");
		inp.onblur=function(){
			//创建异步对象
			var xhr=new XMLHttpRequest;
			//请求行
			xhr.open('GET','xxx.php?user='+this.value);
			//请求头
			//请求主体
			xhr.send(null);
			//回调函数
			xhr.onreadystatechange=function(){
				if(xhr.readyState==4&&xhr.status==200)
				{
					p.innerText=xhr.responseText;
					}
				
				}
			
			}	
	}