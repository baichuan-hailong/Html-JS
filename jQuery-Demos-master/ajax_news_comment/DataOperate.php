<?php
	header('Content-Type:text/plain;charset=utf-8');
	/*
	* 功能：接收前端数据，修改/添加xml文件内容
	*/
	$name = $_GET["name"];
	$content = $_GET["content"];
	$str = "<Data>" .
		     "<name>" . $name . "</name>" .
		     "<content>" . $content . "</content>" .
		     "<date>" . $show_time=date("H:i:s") . "</date>" .
		     "</Data>";
	file_put_contents("CommentData.xml", $str);
	echo "您的评论已成功发表！";
?>