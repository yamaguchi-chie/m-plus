<?php get_header(); ?>
<?php
$mainviews = [
    [
        'title' => 'リフォームメニュー',
        'en' => 'Reform Menu',
    ],
];
?>
<section class="sub-mv <?php if (is_page('reform-menu')) {
    echo 'sub-mv--menu';
} ?>">
<?php get_template_part('template/sub-mv', null, ['mainviews' => $mainviews]); ?>
</section>

<div class="anchor">
    <div class="anchor__wrap">
        <div class="anchor__inner inner">
            <div class="anchor__body">
                <ul class="anchor__list">
                    <li class="anchor__item">
                        <a href="#kitchen" class="anchor__link">
                            <div class="anchor__img"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reform-menu/anchor1.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                            <h3 class="anchor__title">キッチンリフォーム</h3>
                        </a>
                    </li>
                    <li class="anchor__item">
                        <a href="#bath" class="anchor__link">
                            <div class="anchor__img"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reform-menu/anchor2.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                            <h3 class="anchor__title">浴室リフォーム</h3>
                        </a>
                    </li>
                    <li class="anchor__item">
                        <a href="#toilet" class="anchor__link">
                            <div class="anchor__img"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reform-menu/anchor3.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                            <h3 class="anchor__title">トイレリフォーム</h3>
                        </a>
                    </li>
                    <li class="anchor__item">
                        <a href="#washroom" class="anchor__link">
                            <div class="anchor__img"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reform-menu/anchor4.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                            <h3 class="anchor__title">洗面リフォーム</h3>
                        </a>
                    </li>
                    <li class="anchor__item">
                        <a href="#interior" class="anchor__link">
                            <div class="anchor__img"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reform-menu/anchor5.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                            <h3 class="anchor__title">内装リフォーム</h3>
                        </a>
                    </li>
                    <li class="anchor__item">
                        <a href="#exterior" class="anchor__link">
                            <div class="anchor__img"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reform-menu/anchor6.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                            <h3 class="anchor__title">外装リフォーム</h3>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="sub-menu">
    <div class="sub-menu__inner inner">
        <div class="sub-menu__body">
            <ul class="sub-menu__list">
                <li class="sub-menu__item" id="kitchen">
                    <div class="sub-menu__img"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reform-menu/1.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                    <div class="sub-menu__contents">
                        <h2 class="sub-menu__title">キッチンリフォーム</h2>
                        <div class="sub-menu__main">
                            <h4 class="sub-menu__subTl">工事費込<br>［総額］</h4>
                            <div class="sub-menu__meta">
                                <p class="sub-menu__price">45</p>
                                <div class="sub-menu__txt">万円～<span>(税込)</span></div>
                            </div>
                        </div>
                        <div class="sub-menu__bottom">
                            <h3 class="sub-menu__chechTl">リフォーム検討チェックリスト</h3>
                            <ul class="sub-menu__checks">
                                <li class="sub-menu__check"><p class="sub-menu__note">使いにくい、せまい、掃除がしにくい。</p></li>
                                <li class="sub-menu__check"><p class="sub-menu__note">古い流し台から、嫌なにおいがする。</p></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="sub-menu__item" id="bath">
                    <div class="sub-menu__img"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reform-menu/2.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                    <div class="sub-menu__contents">
                        <h2 class="sub-menu__title">浴室リフォーム</h2>
                        <div class="sub-menu__main">
                            <h4 class="sub-menu__subTl">工事費込<br>［総額］</h4>
                            <div class="sub-menu__meta">
                                <p class="sub-menu__price">42</p>
                                <div class="sub-menu__txt">万円～<span>(税込)</span></div>
                            </div>
                        </div>
                        <div class="sub-menu__bottom">
                            <h3 class="sub-menu__chechTl">リフォーム検討チェックリスト</h3>
                            <ul class="sub-menu__checks sub-menu__checks--wrap">
                                <li class="sub-menu__check"><p class="sub-menu__note">カビが気になる。</p></li>
                                <li class="sub-menu__check"><p class="sub-menu__note">節水したい。</p></li>
                                <li class="sub-menu__check"><p class="sub-menu__note">浴室が寒い。</p></li>
                                <li class="sub-menu__check"><p class="sub-menu__note">換気が気になる。</p></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="sub-menu__item" id="toilet">
                    <div class="sub-menu__img"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reform-menu/3.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                    <div class="sub-menu__contents">
                        <h2 class="sub-menu__title">トイレリフォーム</h2>
                        <div class="sub-menu__main">
                            <h4 class="sub-menu__subTl">工事費込<br>［総額］</h4>
                            <div class="sub-menu__meta">
                                <p class="sub-menu__price">14</p>
                                <div class="sub-menu__txt">万円～<span>(税込)</span></div>
                            </div>
                        </div>
                        <div class="sub-menu__bottom">
                            <h3 class="sub-menu__chechTl">リフォーム検討チェックリスト</h3>
                            <ul class="sub-menu__checks">
                                <li class="sub-menu__check"><p class="sub-menu__note">においや汚れが目立つ。</p></li>
                                <li class="sub-menu__check"><p class="sub-menu__note">和式から洋式に変えたい。</p></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="sub-menu__item" id="washroom">
                    <div class="sub-menu__img"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reform-menu/4.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                    <div class="sub-menu__contents">
                        <h2 class="sub-menu__title">洗面リフォーム</h2>
                        <div class="sub-menu__main">
                            <h4 class="sub-menu__subTl">工事費込<br>［総額］</h4>
                            <div class="sub-menu__meta">
                                <p class="sub-menu__price">12</p>
                                <div class="sub-menu__txt">万円～<span>(税込)</span></div>
                            </div>
                        </div>
                        <div class="sub-menu__bottom">
                            <h3 class="sub-menu__chechTl">リフォーム検討チェックリスト</h3>
                            <ul class="sub-menu__checks sub-menu__checks--wrap">
                                <li class="sub-menu__check"><p class="sub-menu__note">さびが気になる。</p></li>
                                <li class="sub-menu__check"><p class="sub-menu__note">水はけが気になる。</p></li>
                                <li class="sub-menu__check"><p class="sub-menu__note">排水溝がにおう。</p></li>
                                <li class="sub-menu__check"><p class="sub-menu__note">節水したい。</p></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="sub-menu__item" id="interior">
                    <div class="sub-menu__img"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reform-menu/5.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                    <div class="sub-menu__contents">
                        <h2 class="sub-menu__title">内装リフォーム</h2>
                        <div class="sub-menu__main">
                            <h4 class="sub-menu__subTl">工事費込<br>［総額］</h4>
                            <div class="sub-menu__meta">
                                <p class="sub-menu__price">35</p>
                                <div class="sub-menu__txt">万円～<span>(税込)</span></div>
                            </div>
                        </div>
                        <div class="sub-menu__bottom">
                            <h3 class="sub-menu__chechTl">リフォーム検討チェックリスト</h3>
                            <ul class="sub-menu__checks">
                                <li class="sub-menu__check"><p class="sub-menu__note">壁紙や床板の張り替えしたい。</p></li>
                                <li class="sub-menu__check"><p class="sub-menu__note">和室を洋室に変えたい。</p></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="sub-menu__item" id="exterior">
                    <div class="sub-menu__img"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reform-menu/6.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                    <div class="sub-menu__contents">
                        <h2 class="sub-menu__title">外装リフォーム</h2>
                        <div class="sub-menu__main">
                            <h4 class="sub-menu__subTl">工事費込<br>［総額］</h4>
                            <div class="sub-menu__meta">
                                <p class="sub-menu__price">70</p>
                                <div class="sub-menu__txt">万円～<span>(税込)</span></div>
                            </div>
                        </div>
                        <div class="sub-menu__bottom">
                            <h3 class="sub-menu__chechTl">リフォーム検討チェックリスト</h3>
                            <ul class="sub-menu__checks">
                                <li class="sub-menu__check"><p class="sub-menu__note">壁のひび割れが気になる。</p></li>
                                <li class="sub-menu__check"><p class="sub-menu__note">遮熱工事がしたい。</p></li>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<?php get_template_part('template/cta'); ?>
<?php get_template_part('template/facturer'); ?>

<?php get_footer(); ?>