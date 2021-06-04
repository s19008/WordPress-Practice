<?php
/*
Template Name: お問い合わせ
*/
?>

<?php get_header(); ?>

<?php 
breadcrumb($postID);
?>
<div class="space">
    <?php if (have_posts()) :
        while (have_posts()) : ?>
            <h1><?php the_title(); ?></h1>
    <?php
            the_post();
            the_content();

        endwhile;
    else :
    endif;
    ?>

</div>

<?php get_footer(); ?>