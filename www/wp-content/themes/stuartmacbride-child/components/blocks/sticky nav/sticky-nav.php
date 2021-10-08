<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'sticky-nav-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'sticky-nav';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
// if( !empty($block['align']) ) {
//     $className .= ' align' . $block['align'];
// }

// Load values and assing defaults.
$text = get_field('link');

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> ">
   
    <?php if( have_rows('link') ): ?>
        <div class="sticky-nav__list ast-container">
            <?php while( have_rows('link') ) : the_row();

                $anchor     = get_sub_field('anchor');
                $name       = get_sub_field('name');

                ?>

                <a href="#<?php echo esc_attr($anchor); ?>" class="sticky-nav__item"><?php echo esc_attr($name); ?></a>

            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</div>

