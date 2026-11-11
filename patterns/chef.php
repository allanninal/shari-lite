<?php
/**
 * Title: The chef
 * Slug: shari-lite/chef
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
<section class="wp-block-group alignfull sh-section" id="chef">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Chef &amp; Story', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Kenji Matsuda', 'shari-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-chef__title"} -->
<p class="sh-chef__title"><?php echo esc_html__( 'Executive Chef &amp; Owner', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted"} -->
<p class="sh-muted"><?php echo esc_html__( 'Chef Kenji Matsuda grew up along the Sea of Japan in Kanazawa, a city revered for its seafood culture and quiet refinement. He trained under a master itamae in Kyoto for seven years before moving to New York in 2012.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted"} -->
<p class="sh-muted"><?php echo esc_html__( 'After years behind counters in Manhattan, Kenji opened Hana in 2018 with a single intention: twelve seats, one chef, total presence. Every piece served reflects the season, the source, and a stillness that is rare in a city this loud.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted"} -->
<p class="sh-muted"><?php echo esc_html__( 'He believes omakase is not a meal but a conversation — between the guest\'s palate, the day\'s fish, and the chef\'s instinct.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-quote"} -->
<p class="sh-quote"><?php echo esc_html__( 'Omakase means &quot;I leave it to you.&quot; I take that trust seriously every single night.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%">
<!-- wp:group {"layout":{"type":"default"},"className":"sh-card","backgroundColor":"surface"} -->
<div class="wp-block-group has-surface-background-color has-background sh-card">
<!-- wp:group {"layout":{"type":"default"},"className":"sh-panel__row"} -->
<div class="wp-block-group sh-panel__row">
<!-- wp:paragraph {"className":"sh-panel__key"} -->
<p class="sh-panel__key"><?php echo esc_html__( 'Origin', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-panel__value"} -->
<p class="sh-panel__value"><?php echo esc_html__( 'Kanazawa, Japan', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sh-panel__row"} -->
<div class="wp-block-group sh-panel__row">
<!-- wp:paragraph {"className":"sh-panel__key"} -->
<p class="sh-panel__key"><?php echo esc_html__( 'Restaurant opened', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-panel__value"} -->
<p class="sh-panel__value"><?php echo esc_html__( '2018', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sh-panel__row"} -->
<div class="wp-block-group sh-panel__row">
<!-- wp:paragraph {"className":"sh-panel__key"} -->
<p class="sh-panel__key"><?php echo esc_html__( 'Seating', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-panel__value"} -->
<p class="sh-panel__value"><?php echo esc_html__( '12 guests — omakase counter', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sh-panel__row"} -->
<div class="wp-block-group sh-panel__row">
<!-- wp:paragraph {"className":"sh-panel__key"} -->
<p class="sh-panel__key"><?php echo esc_html__( 'Sourcing', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-panel__value"} -->
<p class="sh-panel__value"><?php echo esc_html__( 'Toyosu Market (Tokyo) via air freight · Day-boat vessels from Montauk and Gloucester · Local farms for seasonal garnish', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"14rem"},"className":"sh-strip"} -->
<div class="wp-block-group sh-strip">
<!-- wp:image {"id":"__ID_gallery-nigiri__","sizeSlug":"large","linkDestination":"none","className":"sh-photo"} -->
<figure class="wp-block-image size-large sh-photo"><img src="__SRC_gallery-nigiri__" alt="<?php echo esc_attr__( 'Nigiri on a dark slate: prawn, tamago, tuna, mackerel and salmon', 'shari-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_gallery-nigiri__"/></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_gallery-omakase__","sizeSlug":"large","linkDestination":"none","className":"sh-photo"} -->
<figure class="wp-block-image size-large sh-photo"><img src="__SRC_gallery-omakase__" alt="<?php echo esc_attr__( 'Salmon and prawn nigiri with cucumber maki behind them', 'shari-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_gallery-omakase__"/></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_gallery-chef__","sizeSlug":"large","linkDestination":"none","className":"sh-photo"} -->
<figure class="wp-block-image size-large sh-photo"><img src="__SRC_gallery-chef__" alt="<?php echo esc_attr__( 'A sushi chef in a white cap working behind the counter glass', 'shari-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_gallery-chef__"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<?php
echo shari_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
