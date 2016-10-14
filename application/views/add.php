<meta charset='UTF-8'>
<base href="<?php echo site_url();?>">
<form action="<?php echo site_url('blog/do_add');?>" method="post">
	标题:<input type="text" name="title"><br />
	内容:<textarea rows=10 cols=30 name="con"></textarea><br />
	<input type="submit" name="sub" value="发表">
	
</form>
