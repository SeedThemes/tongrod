<article id="post-<?php the_ID(); ?>" <?php post_class('content-single'); ?>>
    <header id="top" class="site-top entry-header <?php moss_title_class(); ?>">
        <h1 class="entry-title">
            <?php 
            $stuff = get_field('stuff');
			echo esc_html($stuff['label']);
            ?>
        </h1>
    </header>

    <div class="entry-content">

        <div class="featured-image">
            <?php tongrod_need_img();?>
        </div>

        <table class="table-need _heading">
            <?php
            if(get_field('status')) {
                echo '<tr><th>สถานะ</th><td>' . get_field('status') . '</td></tr>';
            }
            if(get_field('unit')) {
                $u_id = get_field('unit');
                echo '<tr><th>หน่วยงาน</th><td><a href="' . get_permalink($u_id) . '">' . get_the_title($u_id) . '</a></td></tr>';
            }
            if(get_field('usage')) {
                echo '<tr><th>ใช้เดือนละ</th><td>' . number_format(get_field('usage')) . '</td></tr>';
            }
            if(get_field('stock')) {
                echo '<tr><th>ยอดในสต็อก</th><td>' . number_format(get_field('stock')) . '</td></tr>';
            }
        ?>
        </table>

        <?php the_content(); ?>


        <?php
            // ความช่วยเหลือ
            $args = array(
                'post_type' => 'support',
                'posts_per_page' => -1,
                'meta_query' => array(
                    array(
                        'key' => 'need',
                        'value' => get_the_ID(),
                        'compare' => '=',
                    ),
                )
            );

            $the_query = new WP_Query( $args );

            if( $the_query->have_posts() ) {
                echo '<h2 class="title-support">ความช่วยเหลือ</div>';
                echo '<table class="table-support _heading">';
                echo '<tr><th class="by">โดย</th><th class="amount">จำนวน</th><th class="status">สถานะ</th><th class="info"></th></tr>';
                while( $the_query->have_posts() ) {
                    $the_query->the_post();
                    echo '<tr>';
                    echo '<td class="by">' . get_field('by') . '</td>';
                    echo '<td class="amount">' . number_format(get_field('amount')) . '</td>';
                    echo '<td class="status">';
                    if(get_field('received')) {
                        echo '<span class="received">ได้รับแล้ว <i data-feather="check"></i><span>';
                    } else {
                        echo get_field('status');
                    }
                    echo '</td>';
                    echo '<td class="info">';
                    if ( !empty( get_the_content() ) ) {
                        echo '<a href="' . get_permalink() . '"><i data-feather="arrow-right-circle"></i>';
                    }
                    echo '</td>';
                    
                    echo '</tr>';
                } 
                echo '</table>';
            }


        ?>


    </div>

    <footer class="entry-footer">
        <?php moss_entry_footer(); ?>
    </footer>

</article>