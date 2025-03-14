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


<?php get_footer(); ?>