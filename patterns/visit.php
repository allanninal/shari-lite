<?php
/**
 * Title: Reservations and hours
 * Slug: shari-lite/visit
 * Categories: shari-lite
 * Description: Address, contact details, directions and opening hours.
 * Keywords: visit, hours, address, location, contact
 * Viewport Width: 1400
 *
 * @package shari-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","className":"sh-section sh-ink"} -->
<section class="wp-block-group alignfull sh-section sh-ink" id="reserve">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"className":"is-style-eyebrow sh-hero__eyebrow"} -->
<p class="is-style-eyebrow sh-hero__eyebrow"><?php echo esc_html__( 'Reservations', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"className":"sh-on-ink"} -->
<h2 class="wp-block-heading sh-on-ink"><?php echo esc_html__( 'Book Your Seat', 'shari-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ink-soft"} -->
<p class="sh-ink-soft"><?php echo esc_html__( 'Reservations open 30 days in advance. Omakase requires a minimum of 2 guests. Special dietary requirements should be noted at time of booking.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"default"},"className":"sh-option"} -->
<div class="wp-block-group sh-option">
<!-- wp:paragraph {"className":"sh-option__title"} -->
<p class="sh-option__title"><?php echo esc_html__( 'Email Reservation', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-ink-soft"} -->
<p class="sh-ink-soft"><?php echo esc_html__( 'Send us your date, time and party size, and we will confirm by reply. No walk-in seating for omakase. Bar seats for à la carte are first-come, first-served when available.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"sh-btn-washi"} -->
<div class="wp-block-button sh-btn-washi"><a class="wp-block-button__link wp-element-button" href="mailto:reservations@hanaomakase.example"><?php echo esc_html__( 'Email Us', 'shari-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"fontSize":"small","className":"sh-ink-soft"} -->
<p class="has-small-font-size sh-ink-soft"><?php echo wp_kses_post( __( 'For private events and group bookings of 8+, email <a href="mailto:reservations@hanaomakase.example">reservations@hanaomakase.example</a>.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"className":"is-style-eyebrow sh-hero__eyebrow"} -->
<p class="is-style-eyebrow sh-hero__eyebrow"><?php echo esc_html__( 'Hours', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"sh-on-ink"} -->
<h3 class="wp-block-heading sh-on-ink"><?php echo esc_html__( 'When We\'re Open', 'shari-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"sh-hours"} -->
<div class="wp-block-group sh-hours">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"sh-hours__row"} -->
<div class="wp-block-group sh-hours__row">
<!-- wp:paragraph {"className":"sh-hours__day"} -->
<p class="sh-hours__day"><?php echo esc_html__( 'Monday', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-hours__time"} -->
<p class="sh-hours__time"><?php echo esc_html__( 'Closed', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"sh-hours__row"} -->
<div class="wp-block-group sh-hours__row">
<!-- wp:paragraph {"className":"sh-hours__day"} -->
<p class="sh-hours__day"><?php echo esc_html__( 'Tuesday', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-hours__time"} -->
<p class="sh-hours__time"><?php echo esc_html__( 'Closed', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"sh-hours__row"} -->
<div class="wp-block-group sh-hours__row">
<!-- wp:paragraph {"className":"sh-hours__day"} -->
<p class="sh-hours__day"><?php echo esc_html__( 'Wednesday', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-hours__time"} -->
<p class="sh-hours__time"><?php echo esc_html__( '6:00 pm – 10:00 pm', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"sh-hours__row"} -->
<div class="wp-block-group sh-hours__row">
<!-- wp:paragraph {"className":"sh-hours__day"} -->
<p class="sh-hours__day"><?php echo esc_html__( 'Thursday', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-hours__time"} -->
<p class="sh-hours__time"><?php echo esc_html__( '6:00 pm – 10:00 pm', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"sh-hours__row"} -->
<div class="wp-block-group sh-hours__row">
<!-- wp:paragraph {"className":"sh-hours__day"} -->
<p class="sh-hours__day"><?php echo esc_html__( 'Friday', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-hours__time"} -->
<p class="sh-hours__time"><?php echo esc_html__( '5:30 pm – 10:30 pm', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"sh-hours__row"} -->
<div class="wp-block-group sh-hours__row">
<!-- wp:paragraph {"className":"sh-hours__day"} -->
<p class="sh-hours__day"><?php echo esc_html__( 'Saturday', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-hours__time"} -->
<p class="sh-hours__time"><?php echo esc_html__( '5:00 pm – 10:30 pm', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"sh-hours__row"} -->
<div class="wp-block-group sh-hours__row">
<!-- wp:paragraph {"className":"sh-hours__day"} -->
<p class="sh-hours__day"><?php echo esc_html__( 'Sunday', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-hours__time"} -->
<p class="sh-hours__time"><?php echo esc_html__( '5:00 pm – 9:30 pm · Early seating only', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"placeholder":"Open now status (filled in from the hours above)","className":"is-style-open-status sh-on-ink sh-open"} -->
<p class="is-style-open-status sh-on-ink sh-open"></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","className":"sh-ink-soft"} -->
<p class="has-small-font-size sh-ink-soft"><?php echo esc_html__( 'Reservations open 30 days in advance. Walk-ins at the bar when space permits.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-on-ink sh-address"} -->
<p class="sh-on-ink sh-address"><?php echo esc_html__( '83 Bleecker Street, West Village, New York, NY 10012', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-on-ink"} -->
<p class="sh-on-ink"><?php echo wp_kses_post( __( '<a href="tel:2125550183">(212) 555-0183</a>', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<?php
echo shari_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
