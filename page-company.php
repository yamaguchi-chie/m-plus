<?php get_header(); ?>
<?php
$mainviews = [
    [
        'title' => '会 社 情 報',
        'en' => 'About Us',
    ],
];
?>
<section class="sub-mv <?php if (is_page('company')) {
    echo 'sub-mv--company';
} ?>">
<?php get_template_part('template/sub-mv', null, ['mainviews' => $mainviews]); ?>
</section>


<?php get_footer(); ?>