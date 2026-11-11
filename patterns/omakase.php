<?php
/**
 * Title: The omakase
 * Slug: shari-lite/omakase
 * Categories: shari-lite
 * Viewport Width: 1400
 *
 * @package shari-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","className":"sh-section"} -->
<section class="wp-block-group alignfull sh-section" id="omakase">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'The Experience', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Omakase', 'shari-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( 'おまかせ', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted"} -->
<p class="sh-muted"><?php echo esc_html__( 'Chef\'s tasting — all courses selected by Chef Matsuda based on today\'s market. Reservations required.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"ordered":true,"className":"sh-steps"} -->
<ol class="wp-block-list sh-steps">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Arrive at your reserved seating time — service begins together.', 'shari-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'No printed menu. Chef Matsuda presents each course at the counter, explaining the fish, its origin, and the preparation.', 'shari-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Dietary restrictions accommodated with advance notice. Please include them in your reservation email.', 'shari-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Courses conclude with house-made mochi and matcha.', 'shari-lite' ); ?></li>
<!-- /wp:list-item -->
</ol>
<!-- /wp:list -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%">
<!-- wp:group {"layout":{"type":"default"},"className":"sh-card","backgroundColor":"surface"} -->
<div class="wp-block-group has-surface-background-color has-background sh-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-card__head"} -->
<div class="wp-block-group sh-card__head">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":3,"className":"sh-card__title"} -->
<h3 class="wp-block-heading sh-card__title"><?php echo wp_kses_post( __( 'Seasonal Omakase<span class="dish-raw"><span aria-hidden="true">*</span><span class="screen-reader-text"> (served raw or undercooked)</span></span>', 'shari-lite' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( '季節のおまかせ', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-badge"} -->
<p class="sh-badge"><?php echo esc_html__( 'Signature', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-muted"} -->
<p class="sh-muted"><?php echo esc_html__( '12 courses: seasonal tsukidashi, 6–7 nigiri pieces, one hand roll, miso, and dessert. Market-sourced daily.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-meta","fontSize":"small"} -->
<p class="has-small-font-size dish-meta"><?php echo esc_html__( 'Raw', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> fish, wheat, soy, sesame. Changes with the market: ask us on the day.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$185 per guest', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sh-card","backgroundColor":"surface"} -->
<div class="wp-block-group has-surface-background-color has-background sh-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-card__head"} -->
<div class="wp-block-group sh-card__head">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":3,"className":"sh-card__title"} -->
<h3 class="wp-block-heading sh-card__title"><?php echo esc_html__( 'Sake Pairing', 'shari-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( '日本酒ペアリング', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-muted"} -->
<p class="sh-muted"><?php echo esc_html__( 'Four curated pours — junmai daiginjo, kimoto, sparkling nigori — selected to complement each course.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> no listed allergens.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '+$65 per guest', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"fontSize":"small","className":"sh-muted"} -->
<p class="has-small-font-size sh-muted"><?php echo esc_html__( 'Omakase is available Wednesday through Sunday. Minimum 2 guests. Cancellations must be made at least 48 hours in advance.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"default"},"className":"sh-card sh-policy","backgroundColor":"surface"} -->
<div class="wp-block-group has-surface-background-color has-background sh-card sh-policy">
<!-- wp:heading {"level":3,"className":"sh-card__title"} -->
<h3 class="wp-block-heading sh-card__title"><?php echo esc_html__( 'Seatings and booking', 'shari-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"dish-facts"} -->
<div class="wp-block-group dish-facts">
<!-- wp:paragraph {"className":"dish-facts__key"} -->
<p class="dish-facts__key"><?php echo esc_html__( 'Seatings', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( __( 'Wednesday and Thursday: 6:00 pm and 8:00 pm<br>Friday: 5:30 pm and 8:00 pm<br>Saturday: 5:00 pm and 7:45 pm<br>Sunday: 5:00 pm', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-facts__key"} -->
<p class="dish-facts__key"><?php echo esc_html__( 'Counter seats', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '12, minimum 2 guests', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-facts__key"} -->
<p class="dish-facts__key"><?php echo esc_html__( 'Price', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '$185 per guest', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-facts__key"} -->
<p class="dish-facts__key"><?php echo esc_html__( 'Deposit', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '$50 per guest, credited to the bill', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-facts__key"} -->
<p class="dish-facts__key"><?php echo esc_html__( 'Cancellation', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Cancel or change a booking at least 48 hours ahead and the deposit is returned in full. Inside 48 hours the deposit is kept.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"fontSize":"small","className":"sh-muted"} -->
<p class="has-small-font-size sh-muted"><?php echo esc_html__( 'Example policy: replace it with your own. Opens the restaurant’s own booking page. Seats are held when the deposit is paid there.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:reservations@hanaomakase.example?subject=Omakase%20reservation"><?php echo esc_html__( 'Request an omakase seat →', 'shari-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"align":"start","className":"dish-notice dish-advisory","fontSize":"small"} -->
<p class="has-text-align-start has-small-font-size dish-notice dish-advisory"><?php echo esc_html__( '* Served raw or undercooked. Consuming raw or undercooked meats, poultry, seafood, shellfish, or eggs may increase your risk of foodborne illness.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<?php
echo shari_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
