<?php
/**
 * Title: Hero
 * Slug: shari-lite/hero
 * Categories: shari-lite
 * Description: The opening section: headline, introduction, buttons and key facts.
 * Keywords: hero, header, banner, intro
 * Viewport Width: 1400
 *
 * @package shari-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:cover {"url":"__SRC_hero__","id":"__ID_hero__","alt":"A long wooden sushi counter set with small plates, with the fish case behind it","dimRatio":70,"overlayColor":"text-strong","isUserOverlayColor":true,"minHeight":640,"minHeightUnit":"px","sizeSlug":"full","align":"full","className":"sh-hero","layout":{"type":"constrained","contentSize":"72rem"}} -->
<div id="hero" class="wp-block-cover alignfull sh-hero" style="min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-text-strong-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-__ID_hero__ size-full" alt="<?php echo esc_attr__( 'A long wooden sushi counter set with small plates, with the fish case behind it', 'shari-lite' ); ?>" src="__SRC_hero__" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"layout":{"type":"default"},"className":"sh-hero__inner"} -->
<div class="wp-block-group sh-hero__inner">
<!-- wp:paragraph {"className":"is-style-eyebrow sh-on-ink sh-hero__eyebrow"} -->
<p class="is-style-eyebrow sh-on-ink sh-hero__eyebrow"><?php echo esc_html__( 'West Village, New York — Est. 2018', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"sh-on-ink"} -->
<h1 class="wp-block-heading sh-on-ink"><?php echo esc_html__( 'Hana Omakase', 'shari-lite' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-on-ink sh-hero__tagline"} -->
<p class="sh-on-ink sh-hero__tagline"><?php echo esc_html__( 'Omakase &amp; Sushi Bar', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-on-ink sh-hero__lede"} -->
<p class="sh-on-ink sh-hero__lede"><?php echo esc_html__( '12 seats. One chef. An intimate omakase where the season decides everything.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"sh-btn-washi"} -->
<div class="wp-block-button sh-btn-washi"><a class="wp-block-button__link wp-element-button" href="__PAGE_reserve__"><?php echo esc_html__( 'Reserve a Seat', 'shari-lite' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline sh-on-dark"} -->
<div class="wp-block-button is-style-outline sh-on-dark"><a class="wp-block-button__link wp-element-button" href="__PAGE_omakase__"><?php echo esc_html__( 'The Experience', 'shari-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"sh-facts"} -->
<div class="wp-block-group sh-facts">
<!-- wp:group {"layout":{"type":"default"},"className":"sh-fact"} -->
<div class="wp-block-group sh-fact">
<!-- wp:paragraph {"className":"sh-fact__value sh-on-ink"} -->
<p class="sh-fact__value sh-on-ink"><?php echo esc_html__( '12', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-fact__label sh-on-ink"} -->
<p class="sh-fact__label sh-on-ink"><?php echo esc_html__( 'guests per seating', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sh-fact"} -->
<div class="wp-block-group sh-fact">
<!-- wp:paragraph {"className":"sh-fact__value sh-on-ink"} -->
<p class="sh-fact__value sh-on-ink"><?php echo esc_html__( '12', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-fact__label sh-on-ink"} -->
<p class="sh-fact__label sh-on-ink"><?php echo esc_html__( 'courses, omakase', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sh-fact"} -->
<div class="wp-block-group sh-fact">
<!-- wp:paragraph {"className":"sh-fact__value sh-on-ink"} -->
<p class="sh-fact__value sh-on-ink"><?php echo esc_html__( '2018', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-fact__label sh-on-ink"} -->
<p class="sh-fact__label sh-on-ink"><?php echo esc_html__( 'established', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
<?php
echo shari_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
