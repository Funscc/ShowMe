<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>
  <?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?>
</title>

<link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>" media="screen" type="text/css">
<link href="<?php $this->options->themeUrl('image/favicon.ico'); ?>" rel="icon">
<link rel='dns-prefetch' href='//s.w.org' />
<script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.js'); ?>"></script>
</head>
<body>
<header class="mod-head">
	<h1 class="mod-head__title"><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
	<div class="mod-head__logo">
		<a href="<?php $this->options->siteUrl(); ?>">
			<img class="avatar" src="http://www.echoo.cc/usr/themes/ShowMe/image/avatar.png" alt="" width="26" height="26">
		</a>
	</div>
	<nav class="mod-head__nav">
	<ul id="menu-%e8%8f%9c%e5%8d%951" class="mod-head__ul">
<li id="menu-item-14" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14"><a href="http://www.echoo.cc/blog"><?php _e('Blog'); ?></a><span>·</span></li>
    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
           <?php while($pages->next()): ?>
  <li id="menu-item-14" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14"><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a><span>·</span></li>
<?php endwhile; ?>
</ul>	</nav>
	<a id="right-panel-link" href="#right-panel"></a>
	<div id="right-panel" class="panel">
	<h3 class="rightnavh3">Menu</h3>
		<ul id="menu-%e8%8f%9c%e5%8d%951-1" class="ymod-head">
      <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
             <?php while($pages->next()): ?>
      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14"><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li>
<?php endwhile; ?>
</ul>	<button id="close-panel-bt">X Close</button>
	</div>

	<script>$('#right-panel-link').panelslider({side: 'right', duration: 200 });$('#close-panel-bt').click(function() {$.panelslider.close();});</script>
</header>
