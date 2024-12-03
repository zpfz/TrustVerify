
<?php

if (isset($_REQUEST['authcode'])) //判断authcode变量是否被设置
{
	session_start();
	if (strtolower($_REQUEST['authcode']) == $_SESSION['authcode']) //增加验证码的正确性，将用户输入的字符都变成小写
	{
		//header('Content-type: text/html; charset=UTF8'); 
		echo '<font color="#0000CC">输入正确</font>';
	} else {
		// header('Content-type: text/html; charset=UTF8'); 
		echo '<font color="#CC0000"><b>输入错误</b></font>';
	}
	exit();
}
?>