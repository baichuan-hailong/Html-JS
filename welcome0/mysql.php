<?php
    $servername = "localhost";
    $username   = "bdm295719223";
    $password   = "hailong66";
    $dbname     = "bdm295719223_db";

    // 创建连接
    $conn = new mysqli('bdm295719223.my3w.com', $username, $password, $dbname);
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    } 
     
    $conn->query('set names utf8');
    $sql = "SELECT id, message, last_update FROM messageBoard_table";
    $result = $conn->query($sql);


    // 输出数据
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Tip:" . "、". $row["message"]."<br>";
        }
    } else {
        echo "赶紧留言吧！";
    }
    $conn->close();

?> 

