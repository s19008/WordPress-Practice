<?php
/*
Template Name: ブログ一覧
*/
?>

<?php get_header(); ?>

<div class="blog-top">
</div><!-- /.blog-top -->

<?php
breadcrumb($postID);
?>

<div class="blog-title">
    <h2> <?php the_title(); ?></h2>
    <p>Blog</p>
</div><!-- /.blog-title -->
<div class="blog-content">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $query_args = array(
        'post_status' => 'publish',
        'post_type' => 'post',
        'paged' => $paged,
        'order' => 'DESC',
        'orderby' => 'date',
        'posts_per_page' => 10
    );
    $the_query = new WP_Query($query_args);
    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) :
            $the_query->the_post();
            $link = get_permalink($post->ID);
            $title = get_the_title($post->ID);
    ?>
            <article <?php post_class('article-list'); ?>>
                <a href="<?php the_permalink(); ?>">
                    <div class="img-wrap">
                        <!--画像を追加-->
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium'); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?> /image/no-image.gif" alt="no-img" />
                        <?php endif; ?>
                        <!--カテゴリ-->
                        <?php if (!is_category() && has_category()) : ?>
                            <span class="cat-data">
                                <?php
                                $postcat = get_the_category();
                                echo $postcat[0]->name;
                                ?>
                            </span>
                        <?php endif; ?>
                    </div>
                    <!--end img-warp-->
                    <div class="text">
                        <span class="article-date">
                            <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                                <?php echo get_the_date(); ?>
                            </time>
                        </span>
                        <!--タイトル-->
                        <h2><?php the_title(); ?></h2>
                        <!--抜粋-->
                        <p><?php the_excerpt(); ?></p>
                    </div>
                    <!--end text-->
                </a>
            </article>
    <?php
        endwhile;
    else :
        echo "<div>申し訳ございません。ただいま記事を準備中です</div>";
    endif;
    wp_reset_postdata();
    ?>
    <div class="pnavi">
        <?php
        global $wp_rewrite;
        $paginate_base = get_pagenum_link(1);
        if (strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()) {
            $paginate_format = '';
            $paginate_base = add_query_arg('paged', '%#%');
        } else {
            $paginate_format = (substr($paginate_base, -1, 1) == '/' ? '' : '/') .
                user_trailingslashit('page/%#%/', 'paged');
            $paginate_base .= '%_%';
        }
        echo paginate_links(array(
            'base' => $paginate_base,
            'format' => $paginate_format,
            'total' => $the_query->max_num_pages,
            'mid_size' => 1,
            'current' => ($paged ? $paged : 1),
            'prev_text' => '< 前へ',
            'next_text' => '次へ >',
        ));
        ?>
    </div><!-- /.pnavi -->
</div><!-- /.blog-content -->

<?php get_footer(); ?>