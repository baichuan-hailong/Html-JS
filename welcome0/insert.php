<?php
    $servername = "localhost";
    $username   = "bdm295719223";
    $password   = "hailong66";
    $dbname     = "bdm295719223_db";

    $mes =  $_POST['message'];
    $tel =  $_POST['tel'];

    // 创建连接
    $conn = new mysqli('bdm295719223.my3w.com', $username, $password, $dbname);
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    } 
     
    $conn->query('set names utf8');
    // 插入数据
    $sql = "INSERT INTO messageBoard_table (message,tel) VALUES ('$mes','$tel')";
    if ($conn->query($sql) === TRUE) {
        echo "新记录插入成功";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    
?> 


