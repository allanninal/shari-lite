<?php
/**
 * Title: Order
 * Slug: shari-lite/order
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
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","backgroundColor":"surface","className":"sh-section"} -->
<section class="wp-block-group has-surface-background-color has-background alignfull sh-section" id="takeout">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'Takeout', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Sets and Platters', 'shari-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"sh-ja"} -->
<p class="has-text-align-center sh-ja"><?php echo esc_html__( 'お持ち帰り', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"sh-lede sh-muted"} -->
<p class="has-text-align-center sh-lede sh-muted"><?php echo esc_html__( 'Takeout is for pickup at the counter. Order through the button, or email us. Example prices.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"18rem"},"className":"sh-sets"} -->
<div class="wp-block-group sh-sets">
<!-- wp:group {"layout":{"type":"default"},"className":"sh-card sh-set","backgroundColor":"surface"} -->
<div class="wp-block-group has-surface-background-color has-background sh-card sh-set">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-card__head"} -->
<div class="wp-block-group sh-card__head">
<!-- wp:heading {"level":3,"className":"sh-card__title"} -->
<h3 class="wp-block-heading sh-card__title"><?php echo wp_kses_post( __( 'Nigiri Set<span class="dish-raw"><span aria-hidden="true">*</span><span class="screen-reader-text"> (includes items served raw or undercooked)</span></span>', 'shari-lite' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$40', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"dish-meta","fontSize":"small"} -->
<p class="has-small-font-size dish-meta"><?php echo esc_html__( '8 pieces · Serves 1', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"sh-set-parts"} -->
<ul class="wp-block-list sh-set-parts">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Bluefin Tuna — Akami, 2 pieces', 'shari-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Wild Salmon, 2 pieces', 'shari-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Kampachi, 2 pieces', 'shari-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Freshwater Eel — Unagi, 2 pieces', 'shari-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> fish, wheat, soy, sesame.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sh-card sh-set","backgroundColor":"surface"} -->
<div class="wp-block-group has-surface-background-color has-background sh-card sh-set">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-card__head"} -->
<div class="wp-block-group sh-card__head">
<!-- wp:heading {"level":3,"className":"sh-card__title"} -->
<h3 class="wp-block-heading sh-card__title"><?php echo wp_kses_post( __( 'Sushi for Two<span class="dish-raw"><span aria-hidden="true">*</span><span class="screen-reader-text"> (includes items served raw or undercooked)</span></span>', 'shari-lite' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$78', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"dish-meta","fontSize":"small"} -->
<p class="has-small-font-size dish-meta"><?php echo esc_html__( '20 pieces · Serves 2', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"sh-set-parts"} -->
<ul class="wp-block-list sh-set-parts">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Bluefin Tuna — Akami, 2 pieces', 'shari-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Wild Salmon, 2 pieces', 'shari-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Kampachi, 2 pieces', 'shari-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Freshwater Eel — Unagi, 2 pieces', 'shari-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Salmon Avocado Roll, 6 pieces', 'shari-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Vegetable Kappa Roll, 6 pieces', 'shari-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> fish, wheat, soy, sesame.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sh-card sh-set","backgroundColor":"surface"} -->
<div class="wp-block-group has-surface-background-color has-background sh-card sh-set">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-card__head"} -->
<div class="wp-block-group sh-card__head">
<!-- wp:heading {"level":3,"className":"sh-card__title"} -->
<h3 class="wp-block-heading sh-card__title"><?php echo esc_html__( 'Cooked and Vegetable Platter', 'shari-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$96', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"dish-meta","fontSize":"small"} -->
<p class="has-small-font-size dish-meta"><?php echo esc_html__( '22 pieces · Serves 3 to 4', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"sh-set-parts"} -->
<ul class="wp-block-list sh-set-parts">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Freshwater Eel — Unagi, 4 pieces', 'shari-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Shrimp Tempura Roll, 8 pieces', 'shari-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Vegetable Kappa Roll, 6 pieces', 'shari-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Shiitake Hand Roll, 4 pieces', 'shari-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> egg, fish, crustacean shellfish, wheat, soy, sesame.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sh-card sh-set","backgroundColor":"surface"} -->
<div class="wp-block-group has-surface-background-color has-background sh-card sh-set">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-card__head"} -->
<div class="wp-block-group sh-card__head">
<!-- wp:heading {"level":3,"className":"sh-card__title"} -->
<h3 class="wp-block-heading sh-card__title"><?php echo wp_kses_post( __( 'Party Platter<span class="dish-raw"><span aria-hidden="true">*</span><span class="screen-reader-text"> (includes items served raw or undercooked)</span></span>', 'shari-lite' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$148', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"dish-meta","fontSize":"small"} -->
<p class="has-small-font-size dish-meta"><?php echo esc_html__( '36 pieces · Serves 4 to 6', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"sh-set-parts"} -->
<ul class="wp-block-list sh-set-parts">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Bluefin Tuna — Akami, 4 pieces', 'shari-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Bluefin Tuna — Chutoro, 4 pieces', 'shari-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Wild Salmon, 4 pieces', 'shari-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Kampachi, 4 pieces', 'shari-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Freshwater Eel — Unagi, 4 pieces', 'shari-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Dragon Roll, 8 pieces', 'shari-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Shrimp Tempura Roll, 8 pieces', 'shari-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> egg, fish, crustacean shellfish, wheat, soy, sesame.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"align":"center","className":"dish-notice dish-advisory","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size dish-notice dish-advisory"><?php echo esc_html__( '* Served raw or undercooked. Consuming raw or undercooked meats, poultry, seafood, shellfish, or eggs may increase your risk of foodborne illness.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","className":"sh-section"} -->
<section class="wp-block-group alignfull sh-section" id="order">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'Take it home', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Order from Hana Omakase', 'shari-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"sh-lede sh-muted"} -->
<p class="has-text-align-center sh-lede sh-muted"><?php echo wp_kses_post( __( 'Order à la carte for pickup, or call <a href="tel:2125550183">(212) 555-0183</a>.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:reservations@hanaomakase.example?subject=Takeout%20order"><?php echo esc_html__( 'Order Online', 'shari-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
<?php
echo shari_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
