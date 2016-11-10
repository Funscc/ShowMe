<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<article class="mod-post mod-post__type-post">
	<header>
		<h1 class="mod-post__title"><?php $this->title() ?></a></h1>
	</header>
		<div class="mod-post__entry wzulli">
      <?php $this->content(); ?>
</div>
			<div class="mod-post__meta">
	<div>
	  <div>
		— 于 <time datetime="<?php $this->date('Y/m/d'); ?>"><?php $this->date('Y/m/d'); ?></time>
	<span>发表</span>
	  </div>
	  <div>— 文内使用到的标签：<span class="mod_tag"><?php $this->tags('', true, ''); ?></span></div>
	</div>
	</div>
</article>
 <?php $this->need('comments.php'); ?>
	<?php $this->need('footer.php'); ?>
