<?php get_header(); ?>

<div class="bread-crumb">
    <?php
    breadcrumb($postID);
    ?>
</div><!-- /.breadcrumb -->

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
                <!--カテゴリ-->
                <?php if (!is_category() && has_category()) : ?>
                    <span class="cat-data">
                        <?php
                        echo $category;
                        ?>
                    </span>
                <?php endif; ?>
                <div class="text">
                    <!--タイトル-->
                    <h2 class="article-title"><?php echo $title; ?></h2>
                    <div class="a2a_kit">
                        <a class="a2a_button_twitter_tweet" data-lang="en"></a>
                    </div>
                    <span class="article-date">
                        <time datetime="<?php echo $data; ?>">
                            <?php echo $data; ?>更新
                        </time>
                    </span>
                </div>
                <!--end text-->
                <div class="img-wrap">
                    <!--画像を追加-->
                    <img src="<?php echo $thumbnail; ?>" alt="<?php echo $alt; ?>" />
                </div>
                <!--end img-warp-->
                <p class="article-content"><?php echo $content; ?></p>
            </article>
    <?php
        endwhile;
    else :
        echo '申し訳ございません。ただいま記事を準備中です';
    endif;
    ?>

    <aside id="sidebar" class="sidebar">
        <?php
        $query_args = array(
            'post-status' => 'publish',
            'post_type' => 'post',
            'order' => 'DESC',
            'posts_per_page' => 5,
            'category_name' => $categoryList
        );
        $the_query = new WP_Query($query_args);
        if ($the_query->have_posts()) : ?>


            <?php
            while ($the_query->have_posts()) :
                $the_query->the_post();
                $link = get_permalink($post->ID);
                $title = get_the_title($post->ID);
                $thumbnail = (get_the_post_thumbnail_url($post->ID, 'medium')) ? get_the_post_thumbnail_url($post->ID, 'medium') : get_template_directory_uri() . $NO_IMAGE_URL;
            ?>
            
        <?php endwhile;
        else :
            echo "<div>申し訳ございません。ただいま記事を準備中です</div>";
        endif;
        wp_reset_query();
        ?>
    </aside>
</div>


<?php get_footer(); ?>