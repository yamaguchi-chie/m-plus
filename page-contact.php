<?php get_header(); ?>
<?php
$mainviews = [
    [
        'title' => 'お問い合わせ',
        'en' => 'Contact',
    ],
];
?>
<section class="sub-mv js-mv <?php if (is_page('contact')) {
    echo 'sub-mv--contact';
} ?>">
<?php get_template_part('template/sub-mv', null, ['mainviews' => $mainviews]); ?>
</section>

<div class="sub-contact">
    <div class="sub-contact__inner inner">
        <p class="sub-contact__catch fade-in">各項目入力後、画面下部の【確認画面】 ボタンをクリックしていただきますと、入力内容を確認できます。<br>内容を確認後、【送信】ボタンを押してください。<br>お問い合わせフォームからのお問い合わせは、ご返答までにお時間をいただく場合があります。<br>お急ぎの場合は、お電話にてお問い合わせください。 ※営業を目的としたお問い合わせはご遠慮ください。</p>
        <div class="sub-contact__body fade-in">
            <?php the_content(); ?>
        </div>
        <div class="sub-contact__bottom fade-in">
            <div class="sub-contact__box">
                <h3 class="sub-contact__subTl">【 電話・FAXでのお問い合わせはこちらまで 】</h3><span class="sub-contact__span">※受付：平日9：00〜18：00</span>
                <div class="sub-contact__flex">
                    <div class="sub-contact__tel"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/foot-tel.webp" alt="" loading="lazy" decoding="async"><span>:0120-857-735</span></div>
                    <p class="sub-contact__fax">FAX<span>:052-508-5032</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>