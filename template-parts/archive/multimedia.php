<?php
/**
 * Template part for displaying print posts
 *
 * @package plumasdetigre
 */

?>
<div class="archive-multimedia">
    <!--    <div class="row justify-content-center">-->
    <?php if (have_posts()) :

        /* Start the Loop */
        while (have_posts()) : the_post(); ?>
            <?php
            $embedID = get_post_meta($post->ID, 'embed-id')[0];
            $embedBackgroundClass = strtolower(get_post_meta($post->ID, 'embed-background-class')[0]);
            ?>
            <div class="row content-wrapper">
                <div class="embed-wrapper position-relative <?= $embedBackgroundClass ?> ">
                    <div class="embed-front"></div>
                    <iframe id="<?= $embedBackgroundClass ?>"
                            title="vimeo-player"
                            src="https://player.vimeo.com/video/<?= $embedID ?>?api=1&player_id=player1"
                            width="100%"
                            height="100%"
                            frameborder="0"
                            allow="autoplay"
                            allowfullscreen
                    ></iframe>
                </div>
                <div class="text-wrapper">
                    <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
                    <div class="excerpt">
                        <?php the_excerpt() ?>
                    </div>
                    <div class="text">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        <?php endwhile;
    /* End Loop*/

    else :

        get_template_part('template-parts/content', 'none');

    endif;
    ?>
    <!--    </div>-->
</div>

