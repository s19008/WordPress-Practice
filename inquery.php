<?php
/*
Template Name: お問い合わせ
*/
?>

<?php get_header(); ?>

<div class="inquery-top">
</div><!-- /.inquery-top -->
<?php
breadcrumb($postID);
?>
<div class="space">
    <?php if (have_posts()) :
        while (have_posts()) : ?>
            <h1><?php the_title(); ?></h1>
            <p>Contact</p>
    <?php
            the_post();
            the_content();
        endwhile;
    else :
    endif;
    ?>

</div>

<?php get_footer(); ?>