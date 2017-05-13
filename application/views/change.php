<base href = "<?php echo base_url();?>"/> 
<form action="user/do_change_pwd" method="post" accept-charset="utf-8">
	密码:<input type="password" name="oldpwd"><br />
	新密码:<input type="password" name="newpwd">
	<input type="submit" value="提交">
</form>