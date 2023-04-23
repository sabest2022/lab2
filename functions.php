<?php
function min_funktion()
{
    echo '<p>Detta är mitt eget innehåll som visas innan huvudinnehållet på WooCommerce-sidor</p>';
}
add_action('woocommerce_before_main_content', 'min_funktion');

function remove_funktion()
{
    remove_action('footer', 'standard_widget');
}
add_action('init', 'remove_funktion');
