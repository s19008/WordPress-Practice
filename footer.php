<footer class="footer">
      <div class="footer-inner">
        <nav class="footer-inner-nav">
          <ul class="footer-inner-nav-list">
            <li class="footer-inner-nav-list-item"><a href="">利用規約</a></li><!-- /.footer-inner-nav-list-item -->
            <li class="footer-inner-nav-list-item"><a href="">プライバシーポリシー</a></li><!-- /.footer-inner-nav-list-item -->
            <li class="footer-inner-nav-list-item"><a href="">個人商取引法に基づく表記</a></li><!-- /.footer-inner-nav-list-item -->
            <li class="footer-inner-nav-list-item"><a href="<?php echo home_url( 'contact' ); ?>">お問い合わせ</a></li><!-- /.footer-inner-nav-list-item -->
          </ul><!-- /.footer-inner-nav-list -->
        </nav><!-- /.footer-inner-nav -->
        <div class="footer-inner-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="ロゴ画像">
        </div><!-- /.footer-inner-logo -->
        <p class="footer-inner-copyright">Copyright (c) 2021 <?php bloginfo( 'name' ); ?> All Rights Reserved.</p><!-- /.footer-inner-copyright -->
      </div><!-- /.footer-inner -->
    </footer><!-- /.footer -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
