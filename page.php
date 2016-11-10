<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<article class="mod-post mod-post__type-post">
	<header>
		<h1 class="mod-post__title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
	</header>
		<div class="mod-post__entry wzulli">
      <?php $this->content(); ?>
</div>
			<div class="mod-post__meta">
	<div>
	</div>
	</div>
</article>
 <?php $this->need('comments.php'); ?>
	<?php $this->need('footer.php'); ?>
