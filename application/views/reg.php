<meta charset="UTF-8">
<base href="<?php echo site_url();?>">
<link rel="stylesheet" href="1.css">
<div id='d1'>
<form action="user/do_reg" method="post">
	用户名:<input type="text" name="username"><br />
	密&nbsp;码:<input type="password" name="pass"><br />
	确认密码:<input type="password" name="repass"><br />
	<input type="submit" name="sub" value="注册">
	<input type="reset" name="rst" value="重置">
</form>
</div>