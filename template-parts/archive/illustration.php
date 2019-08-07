<?php
/**
 * Template part for displaying print posts
 *
 * @package plumasdetigre
 */

?>
<div class="archive-print">
    <div class="row justify-content-center">
        <?php if (have_posts()) :

            /* Start the Loop */
            while (have_posts()) : the_post();
                $imageId = getImageIdFromPostImageBlock($post);
                $lightBoxImageData = wp_get_attachment_image_src($imageId, "full" );

                $lightBoxImageDescription = get_post_meta($post->ID, 'illustration-post-description', true);
                $lightBoxImageDescription = 'This infographic was used in a series of blog posts regarding Generation Z and how they feel about advertising. The infographic was embedded within an article to make the information more digestible. An animated banner in the same style was also created for the top of the web page.';
                ?>
                <div class="col-lg-4 col-md-6 article-wrapper">
                    <article id="post-<?php the_ID(); ?>" class="pl-archive-single position-relative">
                        <a href="<?= $lightBoxImageData[0] ?>"
                           data-toggle="lightbox"
                           data-type="image"
                           data-gallery="example-gallery"
                           data-footer="<?= $lightBoxImageDescription ?>">

<!--                            <a href="--><?//= $lightBoxImageData[0] ?><!--"-->
<!--                               data-lightbox="roadtrip"-->
<!--                               data-title="Test tutke"-->
<!--                               data-description="The client (Porsche) wanted to promote their new electric car utilising the technology and street furniture of JCDecaux. We proposed a journey starting at dawn with the car arriving at Westminster on an illuminated mirrored platform. Followed by Chris Evans driving it through London, with billboards illuminating as he drove past"-->
<!--                               data-footer="--><?//= $lightBoxImageDescription ?><!--">-->

                            <?= get_the_post_thumbnail($post->ID, 'large') ?>
                        </a>

                        <div class="title position-absolute">

                            <?php the_title('<h2 class="entry-title">','</h2>'); ?>
                            <div class="excerpt">
                                <?php the_excerpt() ?>
                            </div>
                        </div>

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