<?php
/**
 * Template part for displaying print posts
 *
 * @package plumasdetigre
 */

?>
<div class="archive-photography">
    <div class="grid">
        <div class="grid-sizer"></div>
        <?php if (have_posts()) :

            /* Start the Loop */
            while (have_posts()) : the_post();


                $imageIds = getImageIdsFromPostGalleryBlock($post);
                foreach ($imageIds as $imageId):
                    $image = getImageStd($imageId); ?>

                    <div class="grid-item">
<!--                        <div class="hover-eye-wrapper">-->
<!--                            <div class="hover-eye">-->
<!--                                <i class="fa fa-eye"></i>-->
<!--                            </div>-->
<!--                        </div>-->

                        <a href="<?= $image->url ?>"
                           class=""
                           data-toggle="lightbox"
                           data-gallery="example-gallery"
                           data-title="<?= $image->title ?>">

                            <img src="<?= $image->url ?>"/>
                        </a>
                    </div>

                <?php endforeach;
            endwhile;
        /* End Loop*/

        else :

            get_template_part('template-parts/content', 'none');

        endif;
        ?>
    </div>
</div>

