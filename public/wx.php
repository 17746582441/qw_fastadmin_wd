<?php
//调用数据库连接api
require ("connect.php");

//接收前端传递过来的数据定义-->$_GET 或者 $_POST
$ALPH = $_POST['user_name'];
$E58MBMB = $_POST['tel_phone'];
$TYPE1 = $_POST['zhonglei'];
$TYPE2 = $_POST['leixing'];
$A030 = $_POST['tousuneirong'];

$real_img=$_POST['files']; 

//定义SQL语句，向数据库 f57k11c 插入数据
$insert_sql = "INSERT INTO f57k11c (ALPH,E58MBMB,TYPE1,TYPE2,A030) 
        VALUES ('".$ALPH."', '" .$E58MBMB."','" .$TYPE1."','" .$TYPE2."','" .$A030."')";


if ($conn->query($insert_sql) === TRUE) {
    echo "succeed";
} else {
    echo "Error creating database: " . $conn->error;    
}

$conn->close();//关闭数据库连接

?>
