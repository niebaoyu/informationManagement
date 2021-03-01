<?php header("Content-type:text/html;Charset-utf-8");
 
 //1.链接数据库
//第一个参数：localhost
//第二个参数：用户名 root
//第三个参数：密码
//返回值：链接成功，返回true，失败 false 
$link=mysql_connect("localhost","root","ab1122334455");
//2.判断链接是否成功
if(!$link){
	echo "链接失败";
	exit;//中止后序操作
}
// else{
// 	echo "链接成功";
// }
//3.设置字符集
mysql_set_charset("utf8");
//4.选择数据库
mysql_select_db("db4");
//5.通过sql语句操作数据库
//查询
$sql="select *from rewardpunishment";
//6.发送sql语句
$res=mysql_query($sql);
//接收数据的格式
$arr=array();
//7.处理结果集

while($row=mysql_fetch_assoc($res)){
	array_push($arr,$row);
}
echo json_encode($arr);
//8.关闭数据库
mysql_close($link);
//用bootstrap写前端页面

?>