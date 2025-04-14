<?php
/**
 * Title: Banner
 * Slug: digitaltech/banner
 * Categories: digitaltech
 * Keywords: banner
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner.jpg","id":427,"dimRatio":30,"customOverlayColor":"#243c62","isUserOverlayColor":true,"focalPoint":{"x":0.83,"y":0},"minHeight":680,"metadata":{"name":"Banner"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="margin-top:0;margin-bottom:0;min-height:680px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim" style="background-color:#243c62"></span><img class="wp-block-cover__image-background wp-image-427" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner.jpg" style="object-position:83% 0%" data-object-fit="cover" data-object-position="83% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"720px","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"64px","textTransform":"capitalize","letterSpacing":"1.5px"}}} -->
<h1 class="wp-block-heading has-text-align-left" style="font-size:64px;font-style:normal;font-weight:700;letter-spacing:1.5px;text-transform:capitalize"><?php echo esc_html__( 'Award-Winning Software Development', 'digitaltech' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"textColor":"white"} -->
<p class="has-white-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using, making it look like readable English.', 'digitaltech' ); ?> </p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons" style="padding-top:var(--wp--preset--spacing--30)"><!-- wp:button {"textAlign":"left","backgroundColor":"primary","textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background has-link-color has-text-align-left wp-element-button"><?php echo esc_html__( 'Read More', 'digitaltech' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textAlign":"left","backgroundColor":"secondary","textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-secondary-background-color has-text-color has-background has-link-color has-text-align-left wp-element-button"><?php echo esc_html__( 'Contact Us', 'digitaltech' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->