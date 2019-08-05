<?php
/**
 * Template part for displaying print posts
 *
 * @package plumasdetigre
 */
$counter = 0;
?>
<div class="archive-branding">
    <div class="row justify-content-center">
        <?php if (have_posts()) :

            /* Start the Loop */
            while (have_posts()) : the_post();
                $counter++;

                if ($counter === 1): ?>
                    <div class="col-lg-12 col-md-12 article-wrapper text-center">
                        <article id="post-<?php the_ID(); ?>" class="pl-archive-single position-relative">

                            <?php plumasdetigre_post_thumbnail(); ?>

                            <div class="title position-absolute">

                                <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                                <div class="excerpt">
                                    <?php the_excerpt() ?>
                                </div>
                            </div>

                        </article><!-- #post-<?php the_ID(); ?> -->
                    </div>
                    <?php else: ?>
                    <div class="col-lg-6 col-md-6 article-wrapper text-center mt-4">
                        <article id="post-<?php the_ID(); ?>" class="pl-archive-single position-relative">

                            <?php plumasdetigre_post_thumbnail(); ?>

                            <div class="title position-absolute">

                                <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                                <div class="excerpt">
                                    <?php the_excerpt() ?>
                                </div>
                            </div>

                        </article><!-- #post-<?php the_ID(); ?> -->
                    </div>
                <?php endif; ?>
            <?php endwhile;
        /* End Loop*/

        else :

            get_template_part('template-parts/content', 'none');

        endif;
        ?>
    </div>
</div>