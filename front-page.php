<?php get_header(); ?>

<div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/logo_big.svg" alt="" width="" height="" loading="lazy" decoding="async"></div>


<section class="news">
    <div class="news__inner inner">
        <div class="news__body">
            <div class="news__top">
                <h2 class="news__title">新着情報<span>TOPICS</span></h2>
                <div class="news__btn"><a href="" class="news__link">一覧を見る</a></div>
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
                    <li class="news__item">
                        <div class="news__meta">
                            <time datetime="<?php the_time('c'); ?>" class="news__time"><?php the_time('Y.n.j'); ?></time>
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
                <div class="top-reason__top">
                    <h2 class="top-reason__title">リフォームのことならエムプラスにお任せ！</h2>
                    <p class="top-reason__subTl">何でも相談できる街のリフォーム屋さん</p>
                </div>
                <p class="top-reason__txt">エムプラスは、相談できる街のリフォーム屋さんです。<br>名古屋市、春日井市、小牧市を中心に町の皆さんのお役にたちたいという想いから、皆さんの家の色んなお困りごとに「お応え」しています。<br>地域密着だからこそ、キメの細かい対応と高品質を実現できます。</p>
                <div class="top-reason__btn"><a href="<?php echo esc_url(home_url("reason")); ?>" class="top-reason__link"><span>選ばれる理由</span></a></div>
            </div>
            <div class="top-reason__img">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/top/reason.webp" alt="" width="" height="" loading="lazy" decoding="async">
            </div>
        </div>
    </div>
</section>

<section class="top-menu">
    <div class="top-menu__inner inner">
        <div class="top-menu__top">
            <h2 class="top-menu__title"></h2>
            <p class="top-menu__en"></p>
        </div>
        <p class="top-menu__catch"></p>
        <div class="top-menu__body">
            <ul class="menu-card-list">
                <li class="menu-card-list__item menu-card">
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
                </li>
                <li class="menu-card-list__item menu-card">
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
                </li>
                <li class="menu-card-list__item menu-card">
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
                </li>
                <li class="menu-card-list__item menu-card">
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
                </li>
                <li class="menu-card-list__item menu-card">
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
                </li>
                <li class="menu-card-list__item menu-card">
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
                </li>
            </ul>
        </div>
    </div>
</section>

<?php get_template_part('template/contact'); ?>

<?php get_footer(); ?>