<meta charset='UTF-8'>
<base href="<?php echo site_url();?>">
<form action="blog/do_update" method='post'>
	<input type="hidden" name="hid" value="<?php echo $up->blogid?>">
	标题:<input type="text" name="title" value=<?php echo $up->title?>><br />
	内容:<textarea rows=10 cols=30 name="con"><?php echo $up->content?></textarea><br />
	<input type="submit" name="sub" value="更新">
	
</form>