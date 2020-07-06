<?php
/**
 * The template for the sidebar containing the WooCommerce shop widget area
 *
 * @package Fancy Lab
 */
?>
<?php if( is_active_sidebar( 'ancommerce-sidebar-shop' ) ): ?>
    <?php
        if (is_product_taxonomy()):
            dynamic_sidebar( 'ancommerce-sidebar-product-category' );
        else:
            dynamic_sidebar( 'ancommerce-sidebar-shop' );
        endif;
    ?>
<?php endif;