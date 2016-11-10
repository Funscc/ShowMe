<?php
/**
 * @package ShowMe
 * @author Echoo
 * @version 1.0.0
 * @link http://www.echoo.cc
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<article class="mod-archive">

	<div class="mod-archive__item"><div class="mod-archive__year">Note</div>

		<ul class="mod-archive__list">
<?php while($this->next()): ?>
			<li><time class="mod-archive__time" datetime="<?php $this->date('Y/m/d'); ?>"><?php $this->date('Y/m/d'); ?></time> <span>—</span>
       <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
      </li>
			    <?php endwhile; ?>
				</ul>

		<div class="posts-nav">

<?php $this->pageLink('<span class="page-numbers current">下一页</span>','next'); ?>
<?php $this->pageLink('<span class="page-numbers current">上一页</span>'); ?>

		</div>
	</div>
</article>
<?php $this->need('footer.php'); ?>
