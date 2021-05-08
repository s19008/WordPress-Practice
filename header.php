<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="祇園の中心に佇む京の極楽浄土">
  <link rel="stylesheet" type="text/css" href="slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <title><?php wp_title( '|', true, 'right' );?><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <div class="header-inner">
      <h1 class="header-inner-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="ロゴ画像" />
      </h1>
      <!-- /.header-inenr-logo -->
      <nav class="header-inner-nav">
        <ul class="header-inner-nav-list">
          <li class="header-inner-nav-list-item"><a href="">宿泊予約</a></li>
          <!-- /.header-inner-nav-list-item -->
          <li class="header-inner-nav-list-item"><a href="">観光情報</a></li>
          <!-- /.header-inner-nav-list-item -->
          <li class="header-inner-nav-list-item">
            <a href="">よくある質問</a>
          </li>
          <!-- /.header-inner-nav-list-item -->
          <li class="header-inner-nav-list-item">
            <a href="<?php echo home_url( '/contact/' ); ?>">お問い合わせ</a>
          </li>
          <!-- /.header-inner-nav-list-item -->
        </ul>
        <!-- /.header-inner-nav-list -->
      </nav>
      <!-- /.header-inner-nav -->
      <div class="btn-trigger" id="btn01">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <!-- /.header-inner -->
    <nav class="header-sp-nav">
      <ul class="header-sp-nav-list">
        <li class="header-sp-nav-list-item"><a href="">宿泊予約</a></li>
        <!-- /.header-inner-nav-list-item -->
        <li class="header-sp-nav-list-item">
          <a href="">レストラン予約</a>
        </li>
        <li class="header-sp-nav-list-item"><a href="">観光情報</a></li>
        <!-- /.header-inner-nav-list-item -->
        <li class="header-sp-nav-list-item">
          <a href="">アクセス</a>
        </li>
        <li class="header-sp-nav-list-item">
          <a href="">よくある質問</a>
        </li>
        <!-- /.header-inner-nav-list-item -->
        <li class="header-sp-nav-list-item">
          <a href="">お問い合わせ</a>
        </li>
        <!-- /.header-inner-nav-list-item -->
      </ul>
      <!-- /.header-inner-nav-list -->
    </nav>
  </header>
  <!-- /.header -->