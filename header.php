<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script>
  (function(d) {
    var config = {
      kitId: 'bjm1nrn',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
  <?php wp_head(); ?>
</head>

<body>
  <?php wp_body_open(); ?>
  <div class="main-wrap">
    <!-- header  -->
   <header class="header js-header">
      <div class="header__inner">
        <div class="header__body">
          <!-- logo  -->
          <h1 class="header__logo">
            <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/head-logo.webp" alt="ロゴ" width="" height="" loading="lazy" decoding="async"></a>
          </h1>
          <div class="header__main">
            <p class="header__catch">名古屋市・春日井市・小牧市の<br>リフォーム・リノベーションのことならエムプラスへ！</p>
            <!-- PCナビメニュー -->
            <nav class="header__pc-nav pc-nav">
              <ul class="pc-nav__items">
                <li class="pc-nav__item"><a href="<?php echo esc_url(home_url("reason")); ?>">選ばれる理由</a></li>
                <li class="pc-nav__item"><a href="<?php echo esc_url(home_url("reform-menu")); ?>">リフォーム<br>メニュー</a></li>
                <li class="pc-nav__item"><a href="<?php echo esc_url(home_url("flow")); ?>">リフォーム<br>の流れ</a></li>
                <li class="pc-nav__item"><a href="<?php echo esc_url(home_url("company")); ?>">会社情報</a></li>
                <li class="pc-nav__item"><a href="<?php echo esc_url(home_url("contact")); ?>">お問い合わせ</a></li>
                </ul>
              </nav>
              <div class="header__tel">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/head-tel.webp" alt="フリーダイヤルを表すイメージ" loading="lazy" decoding="async">
                <div class="header__contents">
                  <p class="header__number">0120<span>-</span>857<span>-</span>735</p>
                  <p class="header__copy">【受付】平日9：00〜18：00</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- ハンバーガーボタン -->
    <button class="header-hamburger js-header-hamburger">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <!-- ドロワーメニュー -->
    <nav class="sp-nav">
      <p class="sp-nav__catch">名古屋市・春日井市・小牧市の<br>リフォーム・リノベーションのことなら<br>エムプラスへ！</p>
      <ul class="sp-nav__items">
        <li class="sp-nav__item"><a href="<?php echo esc_url(home_url()); ?>">HOMEへ</a></li>
        <li class="sp-nav__item"><a href="<?php echo esc_url(home_url("reason")); ?>">選ばれる理由</a></li>
        <li class="sp-nav__item"><a href="<?php echo esc_url(home_url("reform-menu")); ?>">リフォームメニュー</a></li>
        <li class="sp-nav__item"><a href="<?php echo esc_url(home_url("flow")); ?>">リフォームの流れ</a></li>
        <li class="sp-nav__item"><a href="<?php echo esc_url(home_url("company")); ?>">会社情報</a></li>
        <li class="sp-nav__item"><a href="<?php echo esc_url(home_url("contact")); ?>">お問い合わせ</a></li>
      </ul>
      <div class="sp-nav__tel">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/head-tel.webp" alt="フリーダイヤルを表すイメージ" width="75" height="43" loading="lazy" decoding="async">
        <div class="sp-nav__contents">
          <p class="sp-nav__number">0120<span>-</span>857<span>-</span>735</p>
          <p class="sp-nav__copy">【受付】平日9：00〜18：00</p>
        </div>
      </div>
    </nav>

    <div class="fixd-cta">
      <h4 class="fixd-cta__title"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/cta-title.webp" alt="contact" width="" height="" loading="lazy" decoding="async"></h4>
        <div class="fixd-cta__body">
          <ul class="fixd-cta__list">
            <li class="fixd-cta__item fixd-cta__item--tel">
              <a href="tel:0120-857-735" class="fixd-cta__link">
                  <div class="fixd-cta__contents">
                      フリーダイヤル
                      <p class="fixd-cta__tel">0120-857-735</p>
                      <p class="fixd-cta__note">【受付】<span>平日9：00〜18：00</span></p>
                  </div>
              </a>
            </li>
            <li class="fixd-cta__item fixd-cta__item--mail"><a href="<?php echo esc_url(home_url("contact")); ?>" class="fixd-cta__link"><div class="fixd-cta__contents"><span>メールでの<br>お問い合わせ</span></div></a></li>
          </ul>
        </div>
    </div>
  <main>