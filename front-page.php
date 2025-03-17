<?php get_header(); ?>

<div class="mv">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/top/mv1.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/top/mv2.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/top/mv3.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<div class="wave">
    <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:i="http://ns.adobe.com/AdobeIllustrator/10.0/" version="1.1" viewBox="0 0 1920 255.1"> -->
    <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:i="http://ns.adobe.com/AdobeIllustrator/10.0/" version="1.1" viewBox="0 0 1920 300" width="1920" height="300">
    <defs>
        <clipPath id="clippath">
          <rect width="1920" height="255.1" style="fill: none;"/>
          <rect width="900" height="300" style="fill: none;"/>
        </clipPath>
      </defs>
      <g id="_新着情報">
        <g style="clip-path: url(#clippath);">
          <path d="M1003.9,20.7C581.7,63.5,406.5,77.7-37.5,33.3v222.6h2000V46.5c-199.3-33.7-537.2-68.6-958.6-25.8Z"/>
        </g>
      </g>
    </svg> -->
    <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:i="http://ns.adobe.com/AdobeIllustrator/10.0/" version="1.1" viewBox="0 0 1920 255" width="1920" height="255">
        <path d="M1003.9,20.7C581.7,63.5,406.5,77.7-37.5,33.3v222.6h2000V46.5c-199.3-33.7-537.2-68.6-958.6-25.8Z"/>
    </svg> -->
</div>

<section class="news">
    <div class="news__inner inner">
        <div class="news__body">
            <div class="news__top fade-in">
                <h2 class="news__title ">新着情報<span>TOPICS</span></h2>
                <div class="news__btn"><a href="<?php echo esc_url(home_url("news")); ?>" class="news__link">一覧を見る</a></div>
            </div>
            <ul class="news__items">
                <?php $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'order' => 'DESC',
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()):
                while($the_query->have_posts()) :
                $the_query->the_post(); ?>
                    <li class="news__item fade-in">
                        <a href="<?php the_permalink(); ?>">
                            <div class="news__meta">
                                <time datetime="<?php the_time('c'); ?>" class="news__time"><?php the_modified_date('Y.m.d'); ?></time>
                            </div>
                            <div class="news__contents">
                                <p class="news__txt txt"><?php
                                    if ( mb_strlen( $post->post_title, 'UTF-8' ) > 28 ) {
                                    $title = mb_substr( $post->post_title, 0, 28, 'UTF-8' );
                                        echo $title . '…';
                                    } else {
                                        echo $post->post_title;
                                    }
                                    ?></p>
                            </div>
                        </a>
                    </li>
                <?php endwhile; endif; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
</section>

<section class="top-reason">
    <div class="top-reason__inner inner">
        <div class="top-reason__body">
            <div class="top-reason__contents">
                <div class="top-reason__top fade-in">
                    <h2 class="top-reason__title">リフォームのことなら<br class="u-mobile">エムプラスにお任せ！</h2>
                    <p class="top-reason__subTl">何でも相談できる街のリフォーム屋さん</p>
                </div>
                <p class="top-reason__txt fade-in">エムプラスは、相談できる街のリフォーム屋さんです。<br>名古屋市、春日井市、小牧市を中心に町の皆さんのお役にたちたいという想いから、皆さんの家の色んなお困りごとに「お応え」しています。<br>地域密着だからこそ、キメの細かい対応と高品質を実現できます。</p>
                <div class="top-reason__btn fade-in"><a href="<?php echo esc_url(home_url("reason")); ?>" class="top-btn"><span>選ばれる理由</span></a></div>
            </div>
            <div class="top-reason__img fade-in">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/top/reason.webp" alt="" width="" height="" loading="lazy" decoding="async">
            </div>
        </div>
    </div>
</section>

<section class="top-menu">
    <div class="top-menu__inner inner">
        <div class="top-menu__top fade-in">
            <h2 class="top-menu__title">リフォームメニュー</h2>
            <p class="top-menu__en">Reform Menu</p>
        </div>
        <p class="top-menu__catch fade-in">エムプラスのリフォーム料金プラン例をご紹介します。地元のリフォーム会社なので、<br class="u-desktop">型にはまらない柔軟な対応も可能です。ご希望やご予算などお気軽にご相談ください。</p>
        <div class="top-menu__body">
            <ul class="menu-card-list">
                <li class="menu-card-list__item fade-in">
                    <a class=" menu-card">
                        <div class="menu-card__top">
                            <h3 class="menu-card__title"><span>使いにくい・せまい・古くなってきた</span>キッチンリフォーム</h3>
                        </div>
                        <div class="menu-card__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/top/menu/1.webp" alt="" width="" height="" loading="lazy" decoding="async">
                        </div>
                        <div class="menu-card__contents">
                            <h4 class="menu-card__subTl">工事費込［総額］</h4>
                            <div class="menu-card__meta">
                                <p class="menu-card__price">45</p>
                                <div class="menu-card__txt"><span>（税込）</span>万円～</div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="menu-card-list__item fade-in">
                    <a class=" menu-card">
                        <div class="menu-card__top">
                            <h3 class="menu-card__title"><span>カビが気になる、節水したい、浴室が寒い</span>浴室リフォーム</h3>
                        </div>
                        <div class="menu-card__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/top/menu/2.webp" alt="" width="" height="" loading="lazy" decoding="async">
                        </div>
                        <div class="menu-card__contents">
                            <h4 class="menu-card__subTl">工事費込［総額］</h4>
                            <div class="menu-card__meta">
                                <p class="menu-card__price">42</p>
                                <div class="menu-card__txt"><span>（税込）</span>万円～</div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="menu-card-list__item fade-in">
                    <a class=" menu-card">
                        <div class="menu-card__top">
                            <h3 class="menu-card__title"><span>汚れが目立つ・和式から洋式に変えたい</span>トイレリフォーム</h3>
                        </div>
                        <div class="menu-card__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/top/menu/3.webp" alt="" width="" height="" loading="lazy" decoding="async">
                        </div>
                        <div class="menu-card__contents">
                            <h4 class="menu-card__subTl">工事費込［総額］</h4>
                            <div class="menu-card__meta">
                                <p class="menu-card__price">14</p>
                                <div class="menu-card__txt"><span>（税込）</span>万円～</div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="menu-card-list__item fade-in">
                    <a class=" menu-card">
                        <div class="menu-card__top">
                            <h3 class="menu-card__title"><span>さびが気になる、使い勝手が悪い</span>洗面リフォーム</h3>
                        </div>
                        <div class="menu-card__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/top/menu/4.webp" alt="" width="" height="" loading="lazy" decoding="async">
                        </div>
                        <div class="menu-card__contents">
                            <h4 class="menu-card__subTl">工事費込［総額］</h4>
                            <div class="menu-card__meta">
                                <p class="menu-card__price">12</p>
                                <div class="menu-card__txt"><span>（税込）</span>万円～</div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="menu-card-list__item fade-in">
                    <a class=" menu-card">
                        <div class="menu-card__top">
                            <h3 class="menu-card__title"><span>張り替えしたい・和室を洋室に変えたい</span>内装リフォーム</h3>
                        </div>
                        <div class="menu-card__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/top/menu/5.webp" alt="" width="" height="" loading="lazy" decoding="async">
                        </div>
                        <div class="menu-card__contents">
                            <h4 class="menu-card__subTl">工事費込［総額］</h4>
                            <div class="menu-card__meta">
                                <p class="menu-card__price">35</p>
                                <div class="menu-card__txt"><span>（税込）</span>万円～</div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="menu-card-list__item fade-in">
                    <a class=" menu-card">
                        <div class="menu-card__top">
                            <h3 class="menu-card__title"><span>壁のひび割れ、遮熱工事がしたい</span>外装リフォーム</h3>
                        </div>
                        <div class="menu-card__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/top/menu/6.webp" alt="" width="" height="" loading="lazy" decoding="async">
                        </div>
                        <div class="menu-card__contents">
                            <h4 class="menu-card__subTl">工事費込［総額］</h4>
                            <div class="menu-card__meta">
                                <p class="menu-card__price">70</p>
                                <div class="menu-card__txt"><span>（税込）</span>万円～</div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="top-menu__btn fade-in">
            <a href="<?php echo esc_url(home_url("menu")); ?>" class="top-btn top-btn--menu"><span>リフォームメニュー<br>一覧を見る</span></a>
            </div>
        </div>
    </div>
</section>

<section class="top-flow">
    <div class="top-flow__inner inner">
        <div class="top-flow__top fade-in">
            <h2 class="top-flow__title">リフォームの流れ</h2>
            <p class="top-flow__en">flow</p>
        </div>
        <p class="top-flow__catch fade-in">お客様のご相談をお聞きした上で、現地調査を行いながらプランをご提案いたします。<br>自社施工なので、お引渡しからアフターフォローまで安心してお任せいただけます。</p>
        <div class="top-flow__body">
            <div class="top-flow__contents">
                <div class="top-flow__deco fade-in"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/top/flow-deco.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                <div class="top-flow__btn fade-in">
                    <a href="<?php echo esc_url(home_url("flow")); ?>" class="top-btn top-btn--flow"><span>ご依頼までの流れ</span></a>
                </div>
            </div>
            <div class="top-flow__img fade-in"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/top/flow-img.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
        </div>
    </div>
</section>

<section class="top-company">
    <div class="top-company__inner inner">
        <div class="top-company__top fade-in">
            <h2 class="top-company__title">会社情報・対応地域</h2>
            <p class="top-company__en">About Us／Area</p>
        </div>
        <p class="top-company__catch fade-in">名古屋市や春日井市、小牧市を中心とした地域密着の<br class="u-desktop">リフォーム・リノベーション会社・エムプラスです。<br>お客様との出会いとご縁、職人さんとの絆を大切にした<br class="u-desktop">まごころを込めたリフォームを実現します。</p>
        <div class="top-company__btn fade-in">
            <a href="<?php echo esc_url(home_url("company")); ?>" class="top-btn top-btn--company"><span>会社について</span></a>
        </div>
    </div>
</section>



<?php get_template_part('template/top-area'); ?>
<?php get_template_part('template/facturer'); ?>

<!-- <section class="top-facturer">
    <div class="top-facturer__inner inner">
        <div class="top-facturer__top fade-in">
            <h2 class="top-facturer__title">対応メーカー</h2>
            <p class="top-facturer__en">Manufacturer</p>
        </div>
        <p class="top-facturer__catch fade-in">下記メーカーやその他メーカーもご対応可能です。<br class="u-desktop">独自の保証期間もあります。<br class="u-desktop">詳細はお気軽にお問い合わせください。</p>
        <ul class="top-facturer__list">
            <li class="top-facturer__item fade-in"><p class="top-facturer__txt">Takara standard<span>（タカラスタンダード）</span></p></li>
            <li class="top-facturer__item fade-in"><p class="top-facturer__txt">LIXIL（リクシル）</p></li>
            <li class="top-facturer__item fade-in"><p class="top-facturer__txt">Panasonic（パナソニック）</p></li>
            <li class="top-facturer__item fade-in"><p class="top-facturer__txt">TOTO（トートー）</p></li>
            <li class="top-facturer__item fade-in"><p class="top-facturer__txt">Housetec（ハウステック）</p></li>
            <li class="top-facturer__item fade-in"><p class="top-facturer__txt">EIDAI（エイダイ）</p></li>
            <li class="top-facturer__item fade-in"><p class="top-facturer__txt">クリナップ</p></li>
            <li class="top-facturer__item fade-in"><p class="top-facturer__txt">TOCLAS（トクラス）</p></li>
        </ul>
    </div>
</section> -->

<?php get_footer(); ?>