<base href="<?php echo site_url();?>">

<?php echo $this->session->userdata('username');?>

<a href="blog/blog_catalog">添加分类</a>
<?php foreach($blog as $v){?>

<h2><a href='blog/view'>标题:<?php echo $v->title?></a> |<a href="blog/update/<?php echo $v->blogid?>">修改</a>|<a href="blog/del/<?php echo $v->blogid?>">删除</a></h2>
<li><?php echo $v->time?></li>
<p><?php echo $v->content?></p>
<hr />	
	
	
<?php }?>
