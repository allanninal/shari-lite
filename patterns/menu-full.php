<?php
/**
 * Title: Menu
 * Slug: shari-lite/menu-full
 * Categories: shari-lite
 * Description: The whole menu by category, with descriptions and prices.
 * Keywords: menu, prices, products, categories
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
<section class="wp-block-group has-surface-background-color has-background alignfull sh-section" id="menu">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'À La Carte', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Menu', 'shari-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"sh-ja"} -->
<p class="has-text-align-center sh-ja"><?php echo esc_html__( 'メニュー', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"sh-menu-cat"} -->
<h3 class="wp-block-heading sh-menu-cat" id="menu-nigiri"><?php echo esc_html__( 'À La Carte Nigiri', 'shari-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( '握り', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted"} -->
<p class="sh-muted"><?php echo esc_html__( 'Two pieces per order. Fish sourced from Toyosu Market (Tokyo) and day-boat vessels on the East End.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"20rem"},"className":"sh-items"} -->
<div class="wp-block-group sh-items">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-item"} -->
<div class="wp-block-group sh-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"sh-item__name"} -->
<h4 class="wp-block-heading sh-item__name"><?php echo wp_kses_post( __( 'Bluefin Tuna — Akami<span class="dish-raw"><span aria-hidden="true">*</span><span class="screen-reader-text"> (served raw or undercooked)</span></span>', 'shari-lite' ) ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( '本鮪 赤身', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted sh-item__desc"} -->
<p class="sh-muted sh-item__desc"><?php echo esc_html__( 'Atlantic bluefin, lean cut. Soy-marinated, served with our aged shiso salt.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-meta","fontSize":"small"} -->
<p class="has-small-font-size dish-meta"><?php echo esc_html__( 'Nigiri · 2 pieces · Raw · Atlantic bluefin', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> fish, wheat, soy.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$12', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-item"} -->
<div class="wp-block-group sh-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"sh-item__name"} -->
<h4 class="wp-block-heading sh-item__name"><?php echo wp_kses_post( __( 'Bluefin Tuna — Chutoro<span class="dish-raw"><span aria-hidden="true">*</span><span class="screen-reader-text"> (served raw or undercooked)</span></span>', 'shari-lite' ) ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( '本鮪 中トロ', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted sh-item__desc"} -->
<p class="sh-muted sh-item__desc"><?php echo esc_html__( 'Medium-fatty belly. Brushed lightly with nikiri, sea salt finish.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-meta","fontSize":"small"} -->
<p class="has-small-font-size dish-meta"><?php echo esc_html__( 'Nigiri · 2 pieces · Raw · Bluefin', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> fish, wheat, soy.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$18', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-item"} -->
<div class="wp-block-group sh-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"sh-item__name"} -->
<h4 class="wp-block-heading sh-item__name"><?php echo wp_kses_post( __( 'Hokkaido Scallop<span class="dish-raw"><span aria-hidden="true">*</span><span class="screen-reader-text"> (served raw or undercooked)</span></span>', 'shari-lite' ) ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( 'ホタテ', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted sh-item__desc"} -->
<p class="sh-muted sh-item__desc"><?php echo esc_html__( 'Plump, sweet, sea-fresh. Yuzu zest, a drop of house ponzu.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-meta","fontSize":"small"} -->
<p class="has-small-font-size dish-meta"><?php echo esc_html__( 'Nigiri · 2 pieces · Raw · Hokkaido', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> wheat, soy. Also: molluscs (not one of the US nine).', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$10', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-item"} -->
<div class="wp-block-group sh-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"sh-item__name"} -->
<h4 class="wp-block-heading sh-item__name"><?php echo wp_kses_post( __( 'Wild Salmon<span class="dish-raw"><span aria-hidden="true">*</span><span class="screen-reader-text"> (served raw or undercooked)</span></span>', 'shari-lite' ) ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( '鮭', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted sh-item__desc"} -->
<p class="sh-muted sh-item__desc"><?php echo esc_html__( 'Day-boat sockeye. Cedar-smoked kombu cure, sesame oil.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-meta","fontSize":"small"} -->
<p class="has-small-font-size dish-meta"><?php echo esc_html__( 'Nigiri · 2 pieces · Raw · Sockeye', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> fish, sesame.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$9', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-item"} -->
<div class="wp-block-group sh-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"sh-item__name"} -->
<h4 class="wp-block-heading sh-item__name"><?php echo wp_kses_post( __( 'Kampachi<span class="dish-raw"><span aria-hidden="true">*</span><span class="screen-reader-text"> (served raw or undercooked)</span></span>', 'shari-lite' ) ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( 'カンパチ', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted sh-item__desc"} -->
<p class="sh-muted sh-item__desc"><?php echo esc_html__( 'Amberjack from Kagoshima. Clean, bright, lightly pressed.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-meta","fontSize":"small"} -->
<p class="has-small-font-size dish-meta"><?php echo esc_html__( 'Nigiri · 2 pieces · Raw · Amberjack · Kagoshima', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> fish.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$11', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-item"} -->
<div class="wp-block-group sh-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"sh-item__name"} -->
<h4 class="wp-block-heading sh-item__name"><?php echo wp_kses_post( __( 'Uni — Santa Barbara<span class="dish-raw"><span aria-hidden="true">*</span><span class="screen-reader-text"> (served raw or undercooked)</span></span>', 'shari-lite' ) ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( 'うに', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted sh-item__desc"} -->
<p class="sh-muted sh-item__desc"><?php echo esc_html__( 'Creamy, oceanic, impossibly fresh. Served on warm shari-lite with gold leaf.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-meta","fontSize":"small"} -->
<p class="has-small-font-size dish-meta"><?php echo esc_html__( 'Nigiri · 2 pieces · Raw · Santa Barbara', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> no listed allergens.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$22', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-item"} -->
<div class="wp-block-group sh-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"sh-item__name"} -->
<h4 class="wp-block-heading sh-item__name"><?php echo wp_kses_post( __( 'Ikura<span class="dish-raw"><span aria-hidden="true">*</span><span class="screen-reader-text"> (served raw or undercooked)</span></span>', 'shari-lite' ) ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( 'いくら', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted sh-item__desc"} -->
<p class="sh-muted sh-item__desc"><?php echo esc_html__( 'Salmon roe cured in-house with sake and soy. Burst of brine and richness.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-meta","fontSize":"small"} -->
<p class="has-small-font-size dish-meta"><?php echo esc_html__( 'Nigiri · 2 pieces · Raw', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> fish, wheat, soy.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$10', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-item"} -->
<div class="wp-block-group sh-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"sh-item__name"} -->
<h4 class="wp-block-heading sh-item__name"><?php echo wp_kses_post( __( 'Sweet Shrimp — Amaebi<span class="dish-raw"><span aria-hidden="true">*</span><span class="screen-reader-text"> (served raw or undercooked)</span></span>', 'shari-lite' ) ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( '甘えび', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted sh-item__desc"} -->
<p class="sh-muted sh-item__desc"><?php echo esc_html__( 'Raw Spot prawn. The head is fried crisp and served on the side.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-meta","fontSize":"small"} -->
<p class="has-small-font-size dish-meta"><?php echo esc_html__( 'Nigiri · 2 pieces · Raw · Spot prawn', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> crustacean shellfish.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$14', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-item"} -->
<div class="wp-block-group sh-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"sh-item__name"} -->
<h4 class="wp-block-heading sh-item__name"><?php echo esc_html__( 'Freshwater Eel — Unagi', 'shari-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( '鰻', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted sh-item__desc"} -->
<p class="sh-muted sh-item__desc"><?php echo esc_html__( 'Grilled and glazed with a sweet soy tare. Served warm.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-meta","fontSize":"small"} -->
<p class="has-small-font-size dish-meta"><?php echo esc_html__( 'Nigiri · 2 pieces · Cooked', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> fish, wheat, soy.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$12', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:heading {"level":3,"className":"sh-menu-cat"} -->
<h3 class="wp-block-heading sh-menu-cat" id="menu-sashimi"><?php echo esc_html__( 'Sashimi', 'shari-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( '刺身', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted"} -->
<p class="sh-muted"><?php echo esc_html__( 'Three pieces per order, sliced to order. Served with house wasabi and our aged soy.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"20rem"},"className":"sh-items"} -->
<div class="wp-block-group sh-items">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-item"} -->
<div class="wp-block-group sh-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"sh-item__name"} -->
<h4 class="wp-block-heading sh-item__name"><?php echo wp_kses_post( __( 'Hamachi Sashimi<span class="dish-raw"><span aria-hidden="true">*</span><span class="screen-reader-text"> (served raw or undercooked)</span></span>', 'shari-lite' ) ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( 'ハマチ刺身', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted sh-item__desc"} -->
<p class="sh-muted sh-item__desc"><?php echo esc_html__( 'Yellowtail from Kagoshima prefecture. Silky, buttery, gentle sweetness.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-meta","fontSize":"small"} -->
<p class="has-small-font-size dish-meta"><?php echo esc_html__( 'Sashimi · 3 pieces · Raw · Yellowtail · Kagoshima', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> fish, wheat, soy.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$16', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-item"} -->
<div class="wp-block-group sh-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"sh-item__name"} -->
<h4 class="wp-block-heading sh-item__name"><?php echo wp_kses_post( __( 'Salmon Sashimi<span class="dish-raw"><span aria-hidden="true">*</span><span class="screen-reader-text"> (served raw or undercooked)</span></span>', 'shari-lite' ) ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( '鮭刺身', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted sh-item__desc"} -->
<p class="sh-muted sh-item__desc"><?php echo esc_html__( 'Wild Alaskan sockeye. Deep color, clean fat, bright finish.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-meta","fontSize":"small"} -->
<p class="has-small-font-size dish-meta"><?php echo esc_html__( 'Sashimi · 3 pieces · Raw · Sockeye · Alaska', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> fish, wheat, soy.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$14', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-item"} -->
<div class="wp-block-group sh-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"sh-item__name"} -->
<h4 class="wp-block-heading sh-item__name"><?php echo wp_kses_post( __( 'Tuna Sashimi Assortment<span class="dish-raw"><span aria-hidden="true">*</span><span class="screen-reader-text"> (served raw or undercooked)</span></span>', 'shari-lite' ) ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( '鮪盛り合わせ', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted sh-item__desc"} -->
<p class="sh-muted sh-item__desc"><?php echo esc_html__( 'Three cuts of bluefin — akami, chutoro, otoro — each treated separately. Chef\'s recommended progression.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-meta","fontSize":"small"} -->
<p class="has-small-font-size dish-meta"><?php echo esc_html__( 'Sashimi · 3 pieces · Raw · Bluefin', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> fish, wheat, soy.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$38', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-item"} -->
<div class="wp-block-group sh-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"sh-item__name"} -->
<h4 class="wp-block-heading sh-item__name"><?php echo wp_kses_post( __( 'Seasonal Sashimi Plate<span class="dish-raw"><span aria-hidden="true">*</span><span class="screen-reader-text"> (served raw or undercooked)</span></span>', 'shari-lite' ) ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( '季節の刺身', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted sh-item__desc"} -->
<p class="sh-muted sh-item__desc"><?php echo esc_html__( 'Chef\'s selection of five seasonal fish. Composition changes with the market.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-meta","fontSize":"small"} -->
<p class="has-small-font-size dish-meta"><?php echo esc_html__( 'Sashimi · Raw', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> fish, wheat, soy. Changes with the market: ask us on the day.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$42', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:heading {"level":3,"className":"sh-menu-cat"} -->
<h3 class="wp-block-heading sh-menu-cat" id="menu-rolls"><?php echo esc_html__( 'Hand Rolls &amp; Maki', 'shari-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( '手巻き・巻き', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted"} -->
<p class="sh-muted"><?php echo esc_html__( 'Classic preparations. Shari made fresh throughout service.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"20rem"},"className":"sh-items"} -->
<div class="wp-block-group sh-items">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-item"} -->
<div class="wp-block-group sh-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"sh-item__name"} -->
<h4 class="wp-block-heading sh-item__name"><?php echo wp_kses_post( __( 'Spicy Tuna Hand Roll<span class="dish-raw"><span aria-hidden="true">*</span><span class="screen-reader-text"> (served raw or undercooked)</span></span>', 'shari-lite' ) ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( '辛口まぐろ手巻き', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted sh-item__desc"} -->
<p class="sh-muted sh-item__desc"><?php echo esc_html__( 'Chopped bluefin, togarashi aioli, micro shiso, toasted nori cone.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-meta","fontSize":"small"} -->
<p class="has-small-font-size dish-meta"><?php echo esc_html__( 'Hand roll · 1 piece · Raw', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> egg, fish.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$14', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-item"} -->
<div class="wp-block-group sh-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"sh-item__name"} -->
<h4 class="wp-block-heading sh-item__name"><?php echo wp_kses_post( __( 'Salmon Avocado Roll<span class="dish-raw"><span aria-hidden="true">*</span><span class="screen-reader-text"> (served raw or undercooked)</span></span>', 'shari-lite' ) ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( 'サーモンアボカド巻き', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted sh-item__desc"} -->
<p class="sh-muted sh-item__desc"><?php echo esc_html__( 'Wild salmon, ripe avocado, cucumber, sesame, rice-paper wrapped.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-meta","fontSize":"small"} -->
<p class="has-small-font-size dish-meta"><?php echo esc_html__( 'Maki · Raw · Sockeye', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> fish, sesame.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$16', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-item"} -->
<div class="wp-block-group sh-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"sh-item__name"} -->
<h4 class="wp-block-heading sh-item__name"><?php echo wp_kses_post( __( 'Dragon Roll<span class="dish-raw"><span aria-hidden="true">*</span><span class="screen-reader-text"> (served raw or undercooked)</span></span>', 'shari-lite' ) ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( 'ドラゴン巻き', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted sh-item__desc"} -->
<p class="sh-muted sh-item__desc"><?php echo esc_html__( 'Shrimp tempura inside, hamachi and avocado draped over. Eel sauce, tobiko, radish sprouts.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-meta","fontSize":"small"} -->
<p class="has-small-font-size dish-meta"><?php echo esc_html__( 'Maki · Raw', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> egg, fish, crustacean shellfish, wheat, soy.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$22', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-item"} -->
<div class="wp-block-group sh-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"sh-item__name"} -->
<h4 class="wp-block-heading sh-item__name"><?php echo esc_html__( 'Vegetable Kappa Roll', 'shari-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( '野菜かっぱ巻き', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted sh-item__desc"} -->
<p class="sh-muted sh-item__desc"><?php echo esc_html__( 'Crisp cucumber, pickled daikon, shiso, toasted sesame. Vegan.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-meta","fontSize":"small"} -->
<p class="has-small-font-size dish-meta"><?php echo esc_html__( 'Maki · Cooked · Vegetarian', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> sesame.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$10', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-item"} -->
<div class="wp-block-group sh-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"sh-item__name"} -->
<h4 class="wp-block-heading sh-item__name"><?php echo esc_html__( 'Shrimp Tempura Roll', 'shari-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( 'えび天巻き', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted sh-item__desc"} -->
<p class="sh-muted sh-item__desc"><?php echo esc_html__( 'Fried shrimp, cucumber and avocado, rolled with sesame. Eel sauce on the side.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-meta","fontSize":"small"} -->
<p class="has-small-font-size dish-meta"><?php echo esc_html__( 'Maki · Cooked', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> egg, crustacean shellfish, wheat, soy, sesame.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$17', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-item"} -->
<div class="wp-block-group sh-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"sh-item__name"} -->
<h4 class="wp-block-heading sh-item__name"><?php echo esc_html__( 'Shiitake Hand Roll', 'shari-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( '椎茸手巻き', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted sh-item__desc"} -->
<p class="sh-muted sh-item__desc"><?php echo esc_html__( 'Simmered shiitake, shiso and pickled radish in a toasted nori cone. Vegetarian.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-meta","fontSize":"small"} -->
<p class="has-small-font-size dish-meta"><?php echo esc_html__( 'Hand roll · 1 piece · Cooked · Vegetarian', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> wheat, soy.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$9', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:heading {"level":3,"className":"sh-menu-cat"} -->
<h3 class="wp-block-heading sh-menu-cat" id="menu-sake"><?php echo esc_html__( 'Sake &amp; Beverages', 'shari-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( '日本酒・飲み物', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted"} -->
<p class="sh-muted"><?php echo esc_html__( 'Curated selection of premium sake and complementary beverages.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"20rem"},"className":"sh-items"} -->
<div class="wp-block-group sh-items">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-item"} -->
<div class="wp-block-group sh-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"sh-item__name"} -->
<h4 class="wp-block-heading sh-item__name"><?php echo esc_html__( 'Junmai Daiginjo', 'shari-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( '純米大吟醸', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted sh-item__desc"} -->
<p class="sh-muted sh-item__desc"><?php echo esc_html__( 'Elegant stone fruit, clean minerality. 16% ABV.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> no listed allergens.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$18 / glass · $72 / bottle', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-item"} -->
<div class="wp-block-group sh-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"sh-item__name"} -->
<h4 class="wp-block-heading sh-item__name"><?php echo esc_html__( 'Reserve Junmai Daiginjo', 'shari-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( '特選 純米大吟醸', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted sh-item__desc"} -->
<p class="sh-muted sh-item__desc"><?php echo esc_html__( 'Ultra-premium, long finish, notes of pear and white flower.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> no listed allergens.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$26 / glass · $105 / bottle', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-item"} -->
<div class="wp-block-group sh-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"sh-item__name"} -->
<h4 class="wp-block-heading sh-item__name"><?php echo esc_html__( 'Kimoto Junmai', 'shari-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( '生酛純米', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted sh-item__desc"} -->
<p class="sh-muted sh-item__desc"><?php echo esc_html__( 'Kyoto. Earthy, umami-rich, traditional slow ferment. Exceptional with fatty fish.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> no listed allergens.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$14 / glass · $58 / bottle', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-item"} -->
<div class="wp-block-group sh-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"sh-item__name"} -->
<h4 class="wp-block-heading sh-item__name"><?php echo esc_html__( 'Sparkling Nigori', 'shari-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( 'にごり酒 スパークリング', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted sh-item__desc"} -->
<p class="sh-muted sh-item__desc"><?php echo esc_html__( 'Unfiltered, lightly sweet, effervescent. Excellent as an aperitif or with uni.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> no listed allergens.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$16 / glass', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-item"} -->
<div class="wp-block-group sh-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"sh-item__name"} -->
<h4 class="wp-block-heading sh-item__name"><?php echo esc_html__( 'Sencha — Hot or Cold', 'shari-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( '煎茶', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted sh-item__desc"} -->
<p class="sh-muted sh-item__desc"><?php echo esc_html__( 'First-flush Uji green tea, brewed to order. Non-alcoholic.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> no listed allergens.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$6', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sh-item"} -->
<div class="wp-block-group sh-item">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":4,"className":"sh-item__name"} -->
<h4 class="wp-block-heading sh-item__name"><?php echo esc_html__( 'Yuzu Lemonade', 'shari-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sh-ja"} -->
<p class="sh-ja"><?php echo esc_html__( 'ゆずレモネード', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sh-muted sh-item__desc"} -->
<p class="sh-muted sh-item__desc"><?php echo esc_html__( 'House-made, lightly sweetened with kinako honey. Non-alcoholic.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"dish-contains","fontSize":"small"} -->
<p class="has-small-font-size dish-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> no listed allergens.', 'shari-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sh-price"} -->
<p class="sh-price"><?php echo esc_html__( '$8', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"align":"center","className":"dish-notice sh-menu-note dish-advisory","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size dish-notice sh-menu-note dish-advisory"><?php echo esc_html__( '* Served raw or undercooked. Consuming raw or undercooked meats, poultry, seafood, shellfish, or eggs may increase your risk of foodborne illness.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"dish-notice","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size dish-notice"><?php echo esc_html__( 'Our kitchen handles fish, shellfish, molluscs, soy, sesame, wheat and egg, so we cannot promise that any dish is without them, even those described as vegan or vegetarian. Please tell us about any allergy before you order.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"dish-notice","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size dish-notice"><?php echo esc_html__( 'Soy sauce contains wheat and soy. Tamari is available on request, for example for a guest who avoids wheat. Check the label of the tamari you buy: some contain wheat.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"dish-notice","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size dish-notice"><?php echo esc_html__( 'Molluscs (squid, octopus, scallop, clam) are listed as their own word. They are not one of the nine major allergens named in US law; we list them because guests ask. Coconut is also listed on its own, not as a tree nut.', 'shari-lite' ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
<?php
echo shari_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
