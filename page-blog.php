<?php
/*
Template Name: ブログ一覧
*/
?>

<?php get_header(); ?>

<div class="blog-top">
</div><!-- /.blog-top -->

<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
        bcn_display();
    } ?>
</div>

<div class="blog-title">
    <h2> <?php the_title(); ?></h2>
    <p>Blog</p>
</div><!-- /.blog-title -->
<div class="blog-content">
    <?php
    $query_args = array(
        'post_status' => 'publish',
        'post_type' => 'post',
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
                        <?php the_excerpt(); ?>
                    </div>
                    <!--end text-->
                </a>
            </article>
    <?php
        endwhile;
    else :

    endif;
    wp_reset_postdata();
    ?>
</div><!-- /.blog-content -->
<?php get_footer(); ?>