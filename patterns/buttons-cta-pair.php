<?php
/**
 * Title: Buttons — Yumeiho + Massage pair
 * Slug: masaza/buttons-cta-pair
 * Categories: buttons, theme
 * Description: Red "Book Yumeiho" + teal "Book Massage" CTAs side by side, centered, with the practice's phone numbers. Drops into any page where the studio's primary calls to action belong.
 * Keywords: cta, buttons, yumeiho, massage, book, call
 *
 * @package masaza
 * @since 1.0.0
 */
?>
<!-- wp:buttons {"className":"masaza__ctas","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
<div class="wp-block-buttons masaza__ctas"><!-- wp:button {"backgroundColor":"red","textColor":"base","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.08em"},"spacing":{"padding":{"top":"16px","right":"32px","bottom":"16px","left":"32px"}},"shadow":"none"},"fontSize":"medium","fontFamily":"raleway","className":"masaza__cta"} -->
<div class="wp-block-button has-custom-font-size has-medium-font-size has-raleway-font-family masaza__cta" style="font-weight:700;letter-spacing:0.08em;text-transform:uppercase"><a class="wp-block-button__link has-base-color has-red-background-color has-text-color has-background wp-element-button" href="tel:+38977699999" style="box-shadow:none;padding-top:16px;padding-right:32px;padding-bottom:16px;padding-left:32px"><?php echo esc_html_x( 'Book Yumeiho', 'CTA button label', 'masaza' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.08em"},"spacing":{"padding":{"top":"16px","right":"32px","bottom":"16px","left":"32px"}},"shadow":"none"},"fontSize":"medium","fontFamily":"raleway","className":"masaza__cta"} -->
<div class="wp-block-button has-custom-font-size has-medium-font-size has-raleway-font-family masaza__cta" style="font-weight:700;letter-spacing:0.08em;text-transform:uppercase"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" href="tel:+38971699969" style="box-shadow:none;padding-top:16px;padding-right:32px;padding-bottom:16px;padding-left:32px"><?php echo esc_html_x( 'Book Massage', 'CTA button label', 'masaza' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
