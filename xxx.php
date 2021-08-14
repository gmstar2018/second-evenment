<?php
	$name=$_GET['user'];
	$namearr=array('aaa','bbb','ccc','ddd');
	if(in_array($name,$namearr))
	echo '该用户名已被注册';
	else
		echo '该用户名可以注册';
?>