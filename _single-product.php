<?php 
get_header(); 
global $product;


while(have_posts()) : the_post();

// $short_description  = $product->short_description; 
// $description  = $product->description;   
// $id  = $product->id;
// $sku  = $product->sku;
// $title  = $product->name;
// $image  = $product->image_id;
// $availability  = $product->get_stock_status();
// $woo_price_html  =  $product->get_price_html();
// $short_description  = apply_filters( 'woocommerce_short_description', $post->post_excerpt );
// $sku  = $product->get_sku();
// $price  = $product->price;
// $regular_price  = $product->get_regular_price();
// $sale_price  = $product->get_sale_price();
// $post_thumbnail_id  = $product->get_image_id();
    
?>
<?php //echo $product; ?>

<?php 


global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters(
	'woocommerce_single_product_image_gallery_classes',
	array(
		'woocommerce-product-gallery',
		'woocommerce-product-gallery--' . ( $product->get_image_id() ? 'with-images' : 'without-images' ),
		'woocommerce-product-gallery--columns-' . absint( $columns ),
		'images',
	)
);
?>
<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
	<figure class="woocommerce-product-gallery__wrapper">
		<?php
		if ( $product->get_image_id() ) {
			$html = wc_get_gallery_image_html( $post_thumbnail_id, true );
		} else {
			$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
			$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
			$html .= '</div>';
		}

		echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped

		do_action( 'woocommerce_product_thumbnails' );
		?>
	</figure>
</div>
<?php 

endwhile;

get_footer(); ?>