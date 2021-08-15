<?php
session_start();
if (isset($_SESSION['username'])) {
    echo '欢迎您，'.$_SESSION["username"];
}
?>
<br>
<a href="../index.html">登录成功</a>