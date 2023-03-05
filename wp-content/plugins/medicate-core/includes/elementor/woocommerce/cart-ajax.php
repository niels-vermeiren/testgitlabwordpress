<?php
add_action( 'wp_ajax_add_foobar', 'woo_ajax_add_to_cart' );
add_action( 'wp_ajax_nopriv_add_foobar', 'woo_ajax_add_to_cart' );

function woo_ajax_add_to_cart() {
$product_id  = $_POST['product_id'];

// add code the add the product to your cart
global $woocommerce;
$woocommerce->cart->add_to_cart( $product_id );
die();
}

//you can change the display as per your wish
function woo_custom_mini_cart() {
//don't want total means you can remove this
echo '<a href="javascript:void(0)" class="dropdown-toggle" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"> ';
    echo '<i class="ti-shopping-cart" aria-hidden="true"></i>';
    echo '<div class="basket-item-count" aria-labelledby="dropdownMenuLink" style="display: inline;">';
        echo '<span class="cart-items-count count">';
            echo WC()->cart->get_cart_contents_count();

         echo WC()->cart->get_cart_total();
        echo  '</span>';
    echo '</div>';
echo '</a>';
echo '<div class="dropdown-menu dropdown-menu-mini-cart">';
        echo '<div class="widget_shopping_cart_content">';
                  woocommerce_mini_cart();
echo '</div></div>';

}
add_shortcode( 'medicate-mini-cart', 'woo_custom_mini_cart' );

//you have to change according to above mini cart shortcode function.

add_filter( 'woocommerce_add_to_cart_fragments', function($fragments) {

ob_start();
?>

<a href="javascript:void(0)" class="dropdown-toggle" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">

    <i class="ti-shopping-cart" aria-hidden="true"></i>
    <div class="basket-item-count" aria-labelledby="dropdownMenuLink" style="display: inline;">
        <span class="cart-items-count count">
            <i class="fa fa-cart"></i>
            <?php echo WC()->cart->get_cart_contents_count(); ?>

        </span>
    </div>
</a>

<?php $fragments['a.dropdown-toggle'] = ob_get_clean();

return $fragments;

} );

add_filter( 'woocommerce_add_to_cart_fragments', function($fragments) {

ob_start();
?>

<div class="dropdown-menu dropdown-menu-mini-cart">
   <div class="widget_shopping_cart_content">
              <?php woocommerce_mini_cart(); ?>
        </div>

</div>

<?php $fragments['ul.dropdown-menu'] = ob_get_clean();

return $fragments;

} );
?>