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

//定义SQL语句，向数据库 f57k11c 插入数据
$sql = "INSERT INTO f57k11c (ALPH,E58MBMB,TYPE1,TYPE2,A030) 
        VALUES ('".$ALPH."', '" .$E58MBMB."','" .$TYPE1."','" .$TYPE2."','" .$A030."')";


/*//向数据库取出 f57type1 集合
$sql = "select type1 from f57type1";
$res = $link -> query($sql);
$type1_select = $res ->fetch_all();
echo json_encode($type1_select);
//向数据库取出 f57type2 集合
$sql = "select co from f57type2";
$res = $link -> query($sql);
$f57type2_select = $res ->fetch_all();
echo json_encode($f57type2_select);*/

if ($conn->query($sql) === TRUE) {
    echo "succeed";
} else {
    echo "Error creating database: " . $conn->error;    
}
$conn->close();//关闭数据库连接
?>
