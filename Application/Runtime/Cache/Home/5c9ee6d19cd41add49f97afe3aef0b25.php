<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('home/user/handlelogin');?>" method='post'>
		邮箱: <input type="text" name="email"><br>
		密码: <input type="password" name="password"><br>
		验证码:<input type="text" name="verify"><br>
		<img src="<?php echo U('home/user/verify');?>" alt="" onclick="change(this)"><br>
		<input type="submit" value="登录">
	</form>
	去<a href="<?php echo U('home/user/reg');?>">注册</a>
	<script>
	function change(obj){
		obj.src = "<?php echo U('home/user/verify');?>?"+Math.random();
	}
	</script>
</body>
</html>