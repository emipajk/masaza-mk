<?php
/**
 * Title: Button — Book Massage
 * Slug: masaza/button-book-massage
 * Categories: buttons, theme
 * Description: Teal "Book Massage" CTA — uppercase Raleway, 17px, 16/32 padding, no shadow. Linked to Marija's phone number.
 * Keywords: cta, button, massage, marija, book, call
 *
 * @package masaza
 * @since 1.0.0
 */
?>
<!-- wp:buttons {"className":"masaza__ctas","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
<div class="wp-block-buttons masaza__ctas"><!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.08em"},"spacing":{"padding":{"top":"16px","right":"32px","bottom":"16px","left":"32px"}},"shadow":"none"},"fontSize":"medium","fontFamily":"raleway","className":"masaza__cta"} -->
<div class="wp-block-button has-custom-font-size has-medium-font-size has-raleway-font-family masaza__cta" style="font-weight:700;letter-spacing:0.08em;text-transform:uppercase"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" href="tel:+38971699969" style="box-shadow:none;padding-top:16px;padding-right:32px;padding-bottom:16px;padding-left:32px"><?php echo esc_html_x( 'Book Massage', 'CTA button label', 'masaza' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
