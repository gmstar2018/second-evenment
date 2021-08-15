<link href="../css/zc.css" rel="stylesheet" />
<form action="" method="post">
    <center>
        <form>
			<div class="wrap" id="wrap">
				<div class="logGet">
						<!-- 头部提示信息 -->
					<div class="logD logDtip">
							<p class="p1">注册</p>
					</div>
						<!-- 输入框 -->
					<div class="lgD">
							<img src="../img/6.jpg" width="20" height="20" alt=""/>
							<input type="text" name="username"
								placeholder="输入用户名" />
								<p class="p2"></p>
					</div>
					<div class="lgD">
							<img src="../img/07.png" width="20" height="20" alt=""/>
							<input type="text" name="password1"
								placeholder="输入用户密码" />
					</div>
					<div class="lgD">
							<img src="../img/07.png" width="20" height="20" alt=""/>
							<input type="text" name="password2"
								placeholder="请重新输入用户密码" />
					</div>
						<div class="logC">
							<a id="form_regist" href="index.html" target="_self"><button type="submit">注册</button></a>
						</div>
					</div>
				</div>
			</form>
    </center>
</form>

<?php
session_start();
require("lineMysql.php");

if(!empty($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password1'];
    $select = $db->selectbyUser("user", $username);
    $rows=$db->rows($select);       #返回的结果集记录总数
    if(empty($rows)){
        if(!empty($_POST['password1'])){
            if($_POST['password1'] != $_POST['password2']){
                echo "<script>alert('两次输入密码不同！')</script>";
            }else{
                $db->insert("user","$username","$password");
                header('Location:registerSuccess.php');
            }
        }else{
            echo "<script>alert('请输入密码！')</script>";
        }
    }else{
        echo "<script>alert('该用户名已被注册！')</script>";
    }
}
?>