<?php
/*
Template Name: お問い合わせ
*/
?>

<?php get_header(); ?>

<div class="space">
<?php while ( have_posts() ) { ?>
    <h1><?php the_title(); ?></h1>
    <?php the_post(); ?>
    <?php the_content(); ?>
<?php } ?>
</div>

<?php get_footer(); ?>