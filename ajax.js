//<script type="text/javascript">
			//window.onload=function(){
					/* ajax的封装，分理出url，method，data,用参数和条件判断
						js函数里面形参形式，
						url和data均以字符串的形式存在 */
						//success是数据下载成功以后执行的函数
						//error是数据下载失败以后执行的函数
						function  box({method="get",url,data,success,error}){
							
							try{//1.创建ajax对象；相当于在浏览器上打开一个新新新新窗口
								var xhr=new XMLHttpRequest();
							}catch(error){
								 var xhr=new ActiveXObject("Mircosoft.XMLHTTP");
							}
							if(data){
								data=querystring(data);
							}
							if(method=="get"&&data){
								url+="?"+data;
							}
							xhr.open(method,url,true);
							if(method=="get"){
								xhr.send();
							}else{
								xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
								xhr.send(data);
							}
							xhr.onreadystatechange=function(){
								if(xhr.readyState==4){
									if(xhr.status==200){
										if(success){
											
											success(xhr.responseText);
											}
										}else{
											if(error){error("Error:"+xhr.status);}
										}
									//下载完之后如何处理数据是不确定的
									
									
								}
							}	
						}
						
						
						
						
					
					// var ogetBtn=document.getElementById("getBtn");
					// var opostBtn=document.getElementById("postBtn");
					// //1.get请求
					// ogetBtn.onclick=function(){
					// 	box({url:"1.get.php",data:{username:"xxx"},success:function(result){alert("get请求下载到的数据:"+result);},
					// 	error:function(msg){alert(msg);}});//xhr.responseText
					// }
					// //2.post请求
					// opostBtn.onclick=function(){
					// 	box({method:"post" ,url:"1.post.php",data:{username:"xxx"},success:function(result){alert("post请求下载到的数据:"+result);},
					// 	error:function(msg){alert(msg);}});
					// }
					// //字符串不确定，
					// //不在搜索框里面搜索
					// //不是跳转的网页，也是数据的运行
					
					
					//让函数里面传的是对象，表单里面获得的数据形式是
					/* 不要？ */
					function querystring(obj){
						alert("使用了querystring方法");
					var str="";
					for(var attr in obj){
						str +=attr+"="+obj[attr]+"&";
					}
					return str.substring(0,str.length-1);
						
					}
					
					
			
	//	</script>