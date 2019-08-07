<?php
/**
 * Checks what is current category page or what is post category
 * and sets class name in page div
 */
function setBodyClass()
{
    $currentPageCategoryName = strtolower(get_queried_object()->cat_name);
    $postCategoryName = get_the_category(get_queried_object()->ID)[0]->slug;

    if (is_front_page()) {
        echo('pl-homepage');
    } elseif ($currentPageCategoryName === 'print' || $postCategoryName === 'print') {
        echo('pl-print');

    } elseif ($currentPageCategoryName === 'digital' || $postCategoryName === 'digital') {
        echo('pl-digital');

    } elseif ($currentPageCategoryName === 'illustration' || $postCategoryName === 'illustration') {
        echo('pl-illustration pl-print');

    } elseif ($currentPageCategoryName === 'multimedia' || $postCategoryName === 'multimedia') {
        echo('pl-multimedia');

    } elseif ($currentPageCategoryName === 'photography' || $postCategoryName === 'photography') {
        echo('pl-photography');

    } elseif ($currentPageCategoryName === 'branding' || $postCategoryName === 'branding') {
        echo('pl-branding');

    }
}


/**
 * Return category name if is category page
 *
 * @return string
 */
function getCategoryName()
{
    if (is_category()) {
        return get_queried_object()->name;
    } else {
        if (is_single()) {
            return get_the_category(get_queried_object()->ID)[0]->slug;
        }
    }
}

/**
 * Return array of image ids from post gallery block
 *
 * @param $post
 * @return array
 */
function getImageIdsFromPostGalleryBlock($post) {
    if (has_blocks($post->post_content)) {
        $blocks = parse_blocks($post->post_content);
        if ($blocks[0]['blockName'] === 'core/gallery') {
            return $blocks[0]['attrs']['ids'];
        }

    }
}
/**
 * Return id of image from post image block
 *
 * @param $post
 * @return array
 */
function getImageIdFromPostImageBlock($post) {
    if (has_blocks($post->post_content)) {
        $blocks = parse_blocks($post->post_content);
        if ($blocks[0]['blockName'] === 'core/image') {
            return $blocks[0]['attrs']['id'];
        }
    }
}

/**
 * Returns formatted image stdClass
 *
 * @param $imageId
 * @return stdClass
 */
function getImageStd($imageId){
    $image = new stdClass();
    $image->url = wp_get_attachment_image_url($imageId, 'large');
    $image->title = get_the_title($imageId);
    $image->caption = wp_get_attachment_caption($imageId);

    return $image;
}

