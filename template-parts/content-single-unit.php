<article id="post-<?php the_ID(); ?>" <?php post_class('content-single'); ?>>
    <header id="top" class="site-top entry-header <?php moss_title_class(); ?>">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>

    <div class="entry-content">
        <div class="featured-image <?php moss_featured_image_class(); ?>">
            <?php the_post_thumbnail();?>
        </div>

        <?php
        the_content();
        ?>
    </div>

    <?php
    $args = array(
        'post_type'      => 'need',
        'posts_per_page' => -1,
        'meta_query' => array(
            array(
                'key' => 'unit',
                'value' => get_the_ID(),
                'compare' => '=',
            ),
        )
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
                <div class="page-meta">
                    <?php the_field('status'); ?>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <?php endif; wp_reset_postdata(); ?>


    <footer class="entry-footer">
        <?php moss_entry_footer(); ?>
    </footer>

</article>