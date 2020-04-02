<?php get_header();?>

<div class="s-container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main -hide-title">

            <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'page' ); ?>

            <?php endwhile;?>

        </main>
    </div>
</div>



<?php
    $args = array(
        'post_type'      => 'need',
        'posts_per_page' => -1,
    );

    $parent = new WP_Query( $args );

    if ( $parent->have_posts() ) : 
?>

<div class="subpage-catalog">

    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
    <div id="page-<?php the_ID(); ?>" class="catalog-item">
        <div class="pic">
            <a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title_attribute(); ?>" rel="bookmark">
                <?php tongrod_need_img(); ?>
            </a>
        </div>

        <div class="info">
            <?php $stuff = get_field('stuff'); ?>
            <h2 class="title"><a href="<?php the_permalink(); ?>"><?php echo esc_html($stuff['label']); ?></a></h2>
            <?php moss_page_meta(); ?>
        </div>
    </div>
    <?php endwhile; ?>

</div>

<?php endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>