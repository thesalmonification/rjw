<?php
/**
 * Title: About Us
 * Slug: digitaltech/about-us
 * Categories: digitaltech
 * Keywords: about-us
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"metadata":{"name":"About"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"padding":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--30)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontSize":"42px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
<h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--30);font-size:42px;font-style:normal;font-weight:700"><?php echo esc_html__( 'We are delivering only Exceptional Quality Work', 'digitaltech' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Nullam sagittis. Etiam imperdiet imperdiet orci. In consectetuer turpis ut velit.', 'digitaltech' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Nullam tincidunt adipiscing enim. Phasellus volutpat, metus eget egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus. ', 'digitaltech' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|10"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--10);font-size:18px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Some of our awards:', 'digitaltech' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":446,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/awards.png" alt="" class="wp-image-446"/></figure>
<!-- /wp:image -->

<!-- wp:buttons {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}}} -->
<div class="wp-block-buttons" style="padding-top:var(--wp--preset--spacing--20)"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Read More', 'digitaltech' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/about.jpg","id":451,"dimRatio":10,"overlayColor":"black","isUserOverlayColor":true,"minHeight":550,"contentPosition":"bottom right","isDark":false,"style":{"border":{"width":"1px","color":"#000","radius":"8px"}}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-right has-border-color" style="border-color:#000;border-width:1px;border-radius:8px;min-height:550px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-451" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/about.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"layout":{"type":"flex","justifyContent":"right"}} -->
<ul class="wp-block-social-links"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->