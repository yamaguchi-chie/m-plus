
<div class="sub-mv__inner inner">
    <div class="sub-mv__top">
        <?php
        $mainviews = isset($args['mainviews']) ? $args['mainviews'] : null;

        if (!isset($mainviews) || !is_array($mainviews)) {
            return;
        }
        ?>
            <?php foreach ($mainviews as $mainview): ?>
        <h2 class="sub-mv__title"><?php echo esc_html($mainview['title']); ?></h2>
        <p class="sub-mv__en"><?php echo esc_html($mainview['en']); ?></p>
        <?php endforeach; ?>
    </div>
</div>