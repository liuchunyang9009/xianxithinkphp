<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('home/user/handlereg');?>" method='post'>
		邮箱: <input type="text" name="email"><br>
		密码: <input type="password" name="password"><br>
		姓名: <input type="text" name="name"><br>
		年龄: <input type="text" name="age"><br>
		性别: <input type="radio" name="sex" value="1" checked>男 <input type="radio" name="sex" value="2">女 <br>
		地址: <input type="text" name="address"><br>
		<input type="submit">
	</form>
</body>
</html>