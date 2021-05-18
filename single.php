<?php 
/*
Template Name: ブログページ
*/
?>
<?php get_header(); ?>

<div class="blog-top">
</div><!-- /.blog-top -->
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
<div class="blog-title">
    <h2>ブログ</h2>    
    <p>Blog</p>
</div><!-- /.blog-title -->
<?php get_footer(); ?>
