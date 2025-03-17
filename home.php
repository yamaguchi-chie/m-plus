<?php get_header(); ?>
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

<!-- <section class="sub-news">
    <div class="sub-news__inner inner">
        <div class="sub-news__title">
        <h1 class="page-title txt"><span>news</span>お知らせ</h1>
        </div>
        <div class="sub-news__body">
            <ul class="sub-news__list">
                <?php if (have_posts()): ?>
                <?php while(have_posts()) : the_post(); ?>
                    <li class="sub-news__item">
                        <article>
                            <div class="sub-news__meta">
                                <time datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                                <p class="sub-news__subTl"><?php the_title(); ?></p>
                            </div>
                            <div class="sub-news__contents txt"><?php the_content(); ?></div>
                        </article>
                    </li>
                <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <div class="sub-news__pagenation">
                
            </div>
        </div>
    </div>
</section> -->



<?php get_footer(); ?>