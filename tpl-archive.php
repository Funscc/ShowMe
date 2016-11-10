<?php
/**
 * 日志归档
 *
 * @package custom
 *
 */
?>
<?php $this->need('header.php'); ?>
<main class="main-content">
    <section class="section-body">
        <header class="section-header u-textAlignCenter">
            <h2 class="grap--h2"><?php $this->title() ?></h2>
        </header>
        <div class="fancy-archive">
        <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
        $output = '';
        $posts_rebuild = array();
            while($archives->next()):
                $post_year = date('Y',$archives->created);
            $post_mon = date('m',$archives->created);
            $posts_rebuild[$post_year][$post_mon][] = '<li><a href="'. $archives->permalink .'">'. $archives->title .'</a> <em>('. $archives->commentsNum .')</em></li>';
                endwhile;
                foreach ($posts_rebuild as $key => $value) {
            $output .= '<h3 class="archive-year">' . $key . '</h3>';
            $year = $key;
                foreach ($value as $key_m => $value_m) {
                    $output .= '<h3 class="archive-month">' . $year . ' - ' . $key_m . '</h3><ul class="fancy-ul">';
                    foreach ($value_m as $key => $value_d) {
                        $output .=  $value_d;
                    }
                    $output .= '</ul>';
                }
            # code...
        }

        echo $output;

        ?>
    </div>
    </section>
</main><!-- end #main-->


<?php $this->need('footer.php'); ?>
