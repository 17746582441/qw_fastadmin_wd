<?php
//设置编码utf—8
header('Content-type:text/html;charset=utf-8');
//数据库定义
$servername = "60.205.225.3:3306";
$username = "www_qwinfo_com_c";
$password = "YEiCdtCDkPNC6KhC";
$database = "www_qwinfo_com_c";

//接收前端传递过来的数据定义-->$_GET 或者 $_POST
$ALPH = $_POST['user_name'];
$E58MBMB = $_POST['tel_phone'];
$TYPE1 = $_POST['zhonglei'];
$TYPE2 = $_POST['leixing'];
$A030 = $_POST['tousuneirong'];

// 创建连接
$conn = new mysqli($servername,$username,$password,$database);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);  
} 
echo '连接mysql服务器成功!'; //否则显示连接成功的信息

?>
