<?php header("Content-type:text/html;Charset-utf-8");
//自己设定反馈信息数据
$responseData=array("code"=>0,"message"=>"");
$id=$_POST["id"];
$name=$_POST["name"];
$sex=$_POST["sex"];
$birthday=$_POST["birthday"];
$email=$_POST["email"];
$job=$_POST["job"];
$department=$_POST["department"];

$link=mysql_connect("localhost","root","ab1122334455");

if(!$link){
	//数组形式
	$responseData['code']=1;
	// echo "链接失败";
	$responseData['message']="数据库链接失败";
	//echo对应的是php的发送信息
	//json形式
	echo  json_encode($responseData);
	exit;
	}

mysql_set_charset("utf8");
mysql_select_db("db4");
$sql="update  schoolroll set id= {$id},name='{$name}',primarySchool='{$primarySchool}',middleSchool='{$middleSchool}',highSchool='{$highSchool}',ugd='{$ugd}',gd='{$gd}',doctor='{$doctor}'  where id='{$id}'";
//6.php在服务器上向服务器mysql发送sql语句
$res=mysql_query($sql);

if(!res){
	$responseData['code']=2;
	// echo "链接失败";
	$responseData['message']="添加数据失败";
	//echo对应的是php的发送信息
	//json形式
	echo  json_encode($responseData);
	
}else{
	$responseData['code']=3;
	// echo "链接失败";
	$responseData['message']="添加数据成功";
	//echo对应的是php的发送信息
	//json形式
	echo  json_encode($responseData);
}

mysql_close($link);
?>