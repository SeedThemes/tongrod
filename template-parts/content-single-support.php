<article id="post-<?php the_ID(); ?>" <?php post_class('content-single'); ?>>
    <header id="top" class="site-top entry-header <?php moss_title_class(); ?>">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>

    <div class="entry-content">
        <div class="support-summary">
            <div class="pic">
                <?php 
                    $n_id = get_field('need');
                    tongrod_need_img($n_id); 
                ?>
            </div>
            <div class="info">
                <table class="table-support-side _heading">
                    <tr>
                        <th>มอบ</th>
                        <td>
                            <a href="<?php the_permalink( $n_id ); ?>">
                                <?php $stuff = get_field('stuff',  $n_id ); echo esc_html($stuff['label']); ?>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th>ให้</th>
                        <td>
                            <?php $u_id = get_field('unit', $n_id); ?>
                            <a href="<?php the_permalink( $u_id ); ?>">
                                <?php echo get_the_title($u_id); ?>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th>โดย</th>
                        <td>
                            <?php
                                if (get_field('url')) {
                                    if (substr(get_field('url') , 0, 4) == 'http') {
                                        $url = get_field('url');
                                    } else {
                                        $url = 'http://' . get_field('url');
                                    }
                                    echo ' <a href="' . $url . '" target="_blank">' .  get_field('by') . '</a></td>';    
                                } else {
                                    echo get_field('by');
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>จำนวน</th>
                        <td><?php the_field('amount'); ?></td>
                    </tr>
                    <tr>
                        <th>สถานะ</th>
                        <td>
                            <?php 
                            if(get_field('received')) {
                                echo '<span class="received">ได้รับแล้ว <i data-feather="check"></i><span>';
                            } else {
                                echo get_field('status');
                            }
                            ?>
                        </td>
                    </tr>
                </table>



            </div>
        </div>

        <?php the_content(); ?>
    </div>

    <footer class="entry-footer">
        <?php moss_entry_footer(); ?>
    </footer>
</article>