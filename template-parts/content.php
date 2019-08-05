<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package plumasdetigre
 */

?>
<?php
//plumasdetigre_post_thumbnail();

if (has_blocks($post->post_content)) {
    $blocks = parse_blocks($post->post_content);
    foreach ($blocks as $block) {
        if ($block['blockName'] === 'core/image') {
            $images[] = $block['innerHTML'];
        }
        if ($block['blockName'] === 'core/paragraph') {
            $paragraphs[] = $block['innerHTML'];
        }
    }

}
$categoryName = getCategoryName();
?>
<div class="back-to-category">
    <a href="/<?=$categoryName?>" rel="next">
        <span></span>
    </a>
</div>
<div class="single-page-article-wrapper">


    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="row d-flex justify-content-center">
            <div class="images-content">
                <?php
                foreach ($images as $image) {
                    echo $image;
                }

                ?>
            </div>
            <div class="text-content">

                <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
                <div class="excerpt"><?php the_excerpt(); ?></div>
                <div class="paragraphs-wrapper">
                <?php
                    foreach ($paragraphs as $paragraph) {
                        echo $paragraph;
                    }
                ?>
                </div>
            </div>
        </div>


    </div><!-- #post-<?php the_ID(); ?> -->
    <div class="single-article-back-to-top">
        <span id="scroll-to-top"></span>
    </div>
</div>

