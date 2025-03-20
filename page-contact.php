<?php get_header(); ?>
<?php
$mainviews = [
    [
        'title' => 'お問い合わせ',
        'en' => 'Contact',
    ],
];
?>
<section class="sub-mv <?php if (is_page('contact')) {
    echo 'sub-mv--contact';
} ?>">
<?php get_template_part('template/sub-mv', null, ['mainviews' => $mainviews]); ?>
</section>


<?php get_footer(); ?>