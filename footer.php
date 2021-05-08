<footer class="footer">
      <div class="footer-inner">
        <nav class="footer-inner-nav">
          <ul class="footer-inner-nav-list">
            <li class="footer-inner-nav-list-item"><a href="">利用規約</a></li><!-- /.footer-inner-nav-list-item -->
            <li class="footer-inner-nav-list-item"><a href="">プライバシーポリシー</a></li><!-- /.footer-inner-nav-list-item -->
            <li class="footer-inner-nav-list-item"><a href="">個人商取引法に基づく表記</a></li><!-- /.footer-inner-nav-list-item -->
            <li class="footer-inner-nav-list-item"><a href="">お問い合わせ</a></li><!-- /.footer-inner-nav-list-item -->
          </ul><!-- /.footer-inner-nav-list -->
        </nav><!-- /.footer-inner-nav -->
        <div class="footer-inner-logo">
          <img src="image/logo.png" alt="ロゴ画像">
        </div><!-- /.footer-inner-logo -->
        <p class="footer-inner-copyright">Copyright (c) 2021 <?php bloginfo( 'name' ); ?> All Rights Reserved.</p><!-- /.footer-inner-copyright -->
      </div><!-- /.footer-inner -->
    </footer><!-- /.footer -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./javascript/script.js"></script>
    <script>
      $('.swiper-wrapper').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '12%',
        autoplay: true,
        autoplaySpeed: 5000,
        responsive: [
          {
            breakpoint: 900,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              centerPadding: '5%',
            }
          },
          {
            breakpoint: 700,
            settings: {
              slidesToShow: 1.5,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 432,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: 0,
              }
          },
        ]
      });
    </script>
    <?php wp_footer(); ?>
  </body>
</html>
