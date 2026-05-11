<?php
/**
 * Title: Button — Book Yumeiho
 * Slug: masaza/button-book-yumeiho
 * Categories: buttons, theme
 * Description: Red "Book Yumeiho" CTA — uppercase Raleway, 17px, 16/32 padding, no shadow. Linked to Ljupčo's phone number.
 * Keywords: cta, button, yumeiho, ljupcho, book, call
 *
 * @package masaza
 * @since 1.0.0
 */
?>
<!-- wp:buttons {"className":"masaza__ctas","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
<div class="wp-block-buttons masaza__ctas"><!-- wp:button {"backgroundColor":"red","textColor":"base","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.08em"},"spacing":{"padding":{"top":"16px","right":"32px","bottom":"16px","left":"32px"}},"shadow":"none"},"fontSize":"medium","fontFamily":"raleway","className":"masaza__cta"} -->
<div class="wp-block-button has-custom-font-size has-medium-font-size has-raleway-font-family masaza__cta" style="font-weight:700;letter-spacing:0.08em;text-transform:uppercase"><a class="wp-block-button__link has-base-color has-red-background-color has-text-color has-background wp-element-button" href="tel:+38977699999" style="box-shadow:none;padding-top:16px;padding-right:32px;padding-bottom:16px;padding-left:32px"><?php echo esc_html_x( 'Book Yumeiho', 'CTA button label', 'masaza' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
