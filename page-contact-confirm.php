<?php get_header(); ?>
<?php
$mainviews = [
    [
        'title' => 'お問い合わせ確認画面',
        'en' => 'Contact Confirm',
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
        <p class="sub-contact__catch">以下のお問い合わせフォームに入力された内容になっております。<br>内容をご確認の上【送信】ボタンを押してください。</p>
        <div class="sub-contact__body">
            <?php the_content(); ?>
        </div>
        <div class="sub-contact__bottom">
            <div class="sub-contact__box">
            <h3 class="sub-contact__subTl">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/contact/sub-contact-subTl.webp" media="(min-width: 768px)" />
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/contact/sub-contact-subTl_sp.webp" alt="" />
                    </picture>
                </h3>
                <div class="sub-contact__flex">
                    <a href="tel:0120-857-735">
                        <div class="sub-contact__tel">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/contact/sub-contact-tel.webp" media="(min-width: 768px)" />
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/contact/sub-contact-tel_sp.webp" alt="" />
                            </picture>
                        </div>
                    </a>
                    <p class="sub-contact__fax">
                        <!-- FAX<span>:052-508-5032</span> -->
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/contact/sub-contact-fax.webp" alt="FAXを表す画像" loading="lazy" decoding="async">
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>