<?php
function min_funktion()
{
    echo '<h3> >>> Detta är mitt eget innehåll som visas innan huvudinnehållet på WooCommerce-sidor <<< </h3>';
}
add_action('woocommerce_before_main_content', 'min_funktion');

function remove_short_description()
{
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
}
add_action('init', 'remove_short_description');
function replace_short_description()
{
    echo '<h3> >> Description removed by remove_action and replaced with this text! << <h3>';
}
add_action('woocommerce_single_product_summary', 'replace_short_description');
