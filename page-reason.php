<?php get_header(); ?>
<?php
$mainviews = [
    [
        'title' => '選ばれる理由',
        'en' => 'Reason',
    ],
];
?>
<section class="sub-mv <?php if (is_page('reason')) {
    echo 'sub-mv--reason';
} ?>">
<?php get_template_part('template/sub-mv', null, ['mainviews' => $mainviews]); ?>
</section>

<section class="sub-reason-top">
    <div class="sub-reason-top__inner inner">
        <div class="sub-reason-top__contents">
            <h3 class="sub-reason-top__title">何でも相談できる街のリフォーム屋さん</h3>
            <p class="sub-reason-top__text">私たちは、「リフォームやリノベーションってどこに頼めばいいの？」と<br>お悩みの方のための、 身近で気軽に相談できる街のリフォーム屋さんです。<br>「こんな小さなことでもいいのかな？」「予算が決まってないけど大丈夫？」<br>「どんなリフォームがいいのか分からない…」など<br>おうちのお悩みを、気軽に話せる雰囲気を大切にしています。<br>そんな “ちょっとしたお困りごと” や “お家の未来の相談” に、<br>私たちがしっかり寄り添い、理想の住まいづくりを全力でサポートします。<br>「ちょっと話を聞いてみたいな」「まだ決めてないけど相談していい？」もちろん大歓迎です！<br>いつでも、どんなことでも、お気軽にご相談ください。</p>
            <div class="sub-reason-top__img"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reason/img.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
        </div>
    </div>
</section>

<section class="reason">
    <div class="reason__inner inner">
        <div class="reason__top fade-in">
            <h2 class="reason__title">リフォームメニュー</h2>
            <p class="reason__en">Reform Menu</p>
        </div>
        <div class="reason__body">
            <ul class="reason__list">
                <li class="reason__item">
                    <div class="reason__photo"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reason/photo1.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                    <div class="reason__contents">
                        <div class="reason__subTl">
                            <img class="reason__point" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reason/point1.webp" alt="" width="" height="" loading="lazy" decoding="async">
                            <h3 class="reason__h3"></h3>
                        </div>
                        <p class="reason__catch"></p>
                        <p class="reason__text"></p>
                    </div>
                    <div class="reason__deco"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/reason/deco1.webp" alt="" width="" height="" loading="lazy" decoding="async"></div>
                </li>
            </ul>
        </div>
    </div>
</section>

<?php get_template_part('template/cta'); ?>
<?php get_footer(); ?>