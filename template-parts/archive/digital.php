<?php
/**
 * Template part for displaying print posts
 *
 * @package plumasdetigre
 */

?>
<div class="archive-digital">
    <div class="row justify-content-center">
        <?php if (have_posts()) :

            /* Start the Loop */
            while (have_posts()) : the_post();

                $postPosition = get_post_meta($post->ID, 'digital-post-position')[0];
                if ($postPosition == '1') {
                    $classes = 'col-lg-4 col-md-4 col-sm-12 col-12 first-row-item';
                } elseif ($postPosition == '2') {
                    $classes = 'col-lg-6 col-md-6 col-sm-12 second-row-item';
                } else {
                    $classes = 'col-lg-6 col-md-6 col-sm-12 third-row-item';
                } ?>

                <div class="<?=$classes?> article-wrapper text-center ">

                    <article id="post-<?php the_ID(); ?>" class="pl-digital-single">
                        <div class="title">
                            <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                            <div class="excerpt">
                                <?php the_excerpt() ?>
                            </div>
                        </div>

                        <?php plumasdetigre_post_thumbnail(); ?>

                    </article><!-- #post-<?php the_ID(); ?> -->

                </div>

            <?php endwhile;
        /* End Loop*/

        else :

            get_template_part('template-parts/content', 'none');

        endif;
        ?>
    </div>
</div>