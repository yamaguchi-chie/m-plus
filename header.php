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

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

    <!-- header  -->
   <header class="header js-header">
      <div class="header__inner">
        <div class="header__body">
          <!-- logo  -->
          <h1 class="header__logo">
            <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/logo.webp" alt="" width="" height="" loading="lazy" decoding="async"></a>
          </h1>
          <!-- PCナビメニュー -->
          <nav class="header__pc-nav pc-nav">
            <ul class="pc-nav__items">
              <li class="pc-nav__item"><a href="<?php echo esc_url(home_url()); ?>">top</a></li>
              <li class="pc-nav__item"><a href="<?php echo esc_url(home_url("company")); ?>">company</a></li>
              <li class="pc-nav__item"><a href="<?php echo esc_url(home_url("works")); ?>">works</a></li>
              <li class="pc-nav__item"><a href="<?php echo esc_url(home_url("news")); ?>">news</a></li>
              <li class="pc-nav__item"><a href="<?php echo esc_url(home_url("contact")); ?>">contact</a></li>
            </ul>
          </nav>
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
      <ul class="sp-nav__items">
        <li class="sp-nav__item"><a href="<?php echo esc_url(home_url()); ?>">top</a></li>
        <li class="sp-nav__item"><a href="<?php echo esc_url(home_url("company")); ?>">company</a></li>
        <li class="sp-nav__item"><a href="<?php echo esc_url(home_url("works")); ?>">works</a></li>
        <li class="sp-nav__item"><a href="<?php echo esc_url(home_url("news")); ?>">news</a></li>
        <li class="sp-nav__item"><a href="<?php echo esc_url(home_url("contact")); ?>">contact</a></li>
      </ul>
    </nav>