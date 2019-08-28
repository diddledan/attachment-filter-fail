<?php
namespace \TestTheme;
add_filter( 'wp_get_attachment_image_attributes', __NAMESPACE__ . '\\lazyload_images', 99 );
function lazyload_images( $attr ) {
    return $attr;
}