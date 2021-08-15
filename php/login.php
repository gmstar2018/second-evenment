<link rel="stylesheet" href="../css/dl.css" />
<center>
<form action="" method="post">
    	<div class="wrap" id="wrap">
	<div class="logGet">
			<!-- 头部提示信息 -->
			<div class="logD logDtip">
				<p class="p1">登录</p>
			</div>
			<!-- 输入框 -->
			<div class="lgD">
				<img src="../img/6.jpg" width="20" height="20" alt=""/>
				<input type="text" name="username"
					placeholder="输入用户名" />
			</div>
			<div class="lgD">
				<img src="../img/07.png" width="20" height="20" alt=""/>
				<input type="text" name="password"
					placeholder="输入用户密码" />
					
			</div>
			<div class="logC">
				<a id="form_login" href="index.html" target="_self"><button type="submit">登 录</button></a>
			</div>
		</div>
</div>
</form>
</center>
<?php
session_start();
require("lineMysql.php");

if(!empty($_POST['username'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $select = $db->selectbyUser("user", $username);     # $db-> 调用实例化对象db中的方法
    $rows=$db->rows($select);       #返回的结果集记录总数 
    $assoc = $db->assoc($select);   #从结果集中取得一行作为关联数组

    if(empty($rows)){
        echo "<script>alert('该用户不存在！')</script>";
    }else{
        if($password==$assoc['password']){
            $_SESSION['username']=$username;
            header('Location:loginSuccess.php');
        }else{
            echo "<script>alert('密码错误！')</script>";
        }
    }
}
?>