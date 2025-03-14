<footer class="footer">
  <div class="footer__inner inner">
    <div class="footer__body">
        <div class="footer__main">
          <div class="footer__meta">
            <div class="footer__logo"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/foot-logo.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
            <div class="footer__info">
              <p class="footer__adress">〒462-0825 愛知県名古屋市北区大曽根3-10-7</p>
              <div class="footer__info-tel">
                <p>TEL:090-7867-1165</p>
                <p>FAX:052-508-5032</p>
              </div>
            </div>
          </div>
          <div class="footer__flex">
            <div class="footer__tel">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/foot-tel.webp" alt="" loading="lazy" decoding="async">
                <div class="footer__tel-wrap">
                  <p class="footer__number">0120<span>-</span>857<span>-</span>735</p>
                  <p class="footer__note">【受付】平日9：00〜18：00</p>
                </div>
            </div>
            <div class="footer__btn">
              <a href="<?php echo esc_url(home_url("contact")); ?>" class="footer__contact"><span>お気軽にお問い合わせください</span><br>メールでのお問い合わせ<span class="footer__contact-arrow"></span></a>
            </div>
          </div>
        </div>
        <nav class="footer__nav">
          <ul class="footer__items">
            <li class="footer__item">
              <p class="footer__subTl">選ばれる理由</p>
              <ul class="footer__contents">
                <li class="footer__link"><a href="<?php echo esc_url(home_url("reason")); ?>">選ばれる理由</a></li>
              </ul>
            </li>
            <li class="footer__item">
              <p class="footer__subTl">リフォームメニュー</p>
              <ul class="footer__contents">
                <li>
                  <ul>
                    <li class="footer__link"><a href="<?php echo esc_url(home_url("kitchen")); ?>">キッチンリフォーム</a></li>
                    <li class="footer__link"><a href="<?php echo esc_url(home_url("bath")); ?>">浴室リフォーム</a></li>
                    <li class="footer__link"><a href="<?php echo esc_url(home_url("toilet")); ?>">トイレリフォーム</a></li>
                  </ul>
                </li>
                <li>
                  <ul>
                    <li class="footer__link"><a href="<?php echo esc_url(home_url("washroom")); ?>">洗面リフォーム</a></li>
                    <li class="footer__link"><a href="<?php echo esc_url(home_url("interior")); ?>">内装リフォーム</a></li>
                    <li class="footer__link"><a href="<?php echo esc_url(home_url("exterior")); ?>">外装リフォーム</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="footer__item">
              <p class="footer__subTl">リフォームの流れ</p>
              <ul class="footer__contents">
                <li class="footer__link"><a href="<?php echo esc_url(home_url("company")); ?>">ご依頼までの流れ</a></li>
              </ul>
            </li>
            <li class="footer__item">
              <p class="footer__subTl">会社情報</p>
              <ul class="footer__contents">
              <li>
                  <ul>
                <li class="footer__link"><a href="<?php echo esc_url(home_url("company")); ?>">代表挨拶</a></li>
                <li class="footer__link"><a href="<?php echo esc_url(home_url("company")); ?>">経営理念</a></li>
                <li class="footer__link"><a href="<?php echo esc_url(home_url("company")); ?>">会社概要</a></li>
                <li class="footer__link"><a href="<?php echo esc_url(home_url("company")); ?>">アクセス</a></li>
                </ul>
              </li>
              <li>
                  <ul>
                <li class="footer__link footer__link--circle"><a href="<?php echo esc_url(home_url("news")); ?>">新着情報一覧</a></li>
                <li class="footer__link footer__link--circle"><a href="<?php echo esc_url(home_url("contact")); ?>">お問い合わせ</a></li>
                <li class="footer__link footer__link--circle"><a href="<?php echo esc_url(home_url("privacy-policy")); ?>">プライバシーポリシー</a></li>
                <li class="footer__link footer__link--circle"><a href="<?php echo esc_url(home_url("sitemap")); ?>">サイトマップ</a></li>
                </ul>
              </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
      <div class="footer__copyright">
        <small>Copyright &copy; M-plus  ALL Right Reserved.</small>
      </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
