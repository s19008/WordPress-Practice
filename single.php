<?php get_header(); ?>

<?php
breadcrumb($postID);
?>

<div class="single-content">
    <?php if (have_posts()) :
        while (have_posts()) :
            the_post();
            $title = get_the_title();
            $content = get_the_content();
            $category = get_the_category()[0]->name;
            $data = get_the_modified_date('Y-m-d', $post->ID);
            $thumbnail = (get_the_post_thumbnail_url($post->ID, 'medium')) ? get_the_post_thumbnail_url($post->ID, 'medium') : get_template_directory_uri() . $NO_IMAGE_URL;
            $thumbID = get_post_thumbnail_id($postID);
            $alt = get_post_meta($thumbID, '_wp_attachment_image_alt', true);
            $categorys = get_the_category();
            $categoryList = '';
            foreach ($categorys as $val) {
                $categoryList = ($categoryList) ? $categoryList . ',' . $val->slug : $categoryList . $val->slug;
            };
    ?>
            <article <?php post_class('article-list'); ?>>
                <div class="img-wrap">
                    <!--画像を追加-->
                        <img src="<?php echo $thumbnail;?>" alt="<?php echo $alt;?>" />
                    <!--カテゴリ-->
                    <?php if (!is_category() && has_category()) : ?>
                        <span class="cat-data">
                            <?php
                            echo $category;
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
                    <p><?php the_content(); ?></p>
                </div>
                <!--end text-->
            </article>
    <?php
        endwhile;
    else :
        echo "<div>申し訳ございません。ただいま記事を準備中です</div>";
    endif;
    ?>
</div>
<?php get_footer(); ?>