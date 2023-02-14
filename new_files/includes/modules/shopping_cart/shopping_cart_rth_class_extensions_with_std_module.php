<?php

/**
 * This class uses the StdModule as parent class to avoid repetitions and to add
 * useful additional methods.
 *
 * Look at the file shopping_cart_rth_class_extensions.php file for a variant without
 * the StdModule and without a additional third -party library.
 *
 * You can find the StdModule on GitHub:
 * https://github.com/RobinTheHood/modified-std-module
 *
 * You can find more information about the modified module development on:
 * https://docs.module-loader.de
 */

use RobinTheHood\ModifiedStdModule\Classes\StdModule;

/**
 * The class name must be the same as the file name without .php and
 * there must be a configuration constant STATUS with the following structure:
 * MODULE_SHOPPING_CART_<CLASS_NAME_UPPER>_STATUS
 *
 * Filename                 | Classname             | Configuration
 * mc_my_first_module.php   | mc_my_first_module    | MODULE_SHOPPING_CART_MC_MY_FIRST_MODULE_STATUS
 * McMyFirstModule.php      | McMyFirstModule       | MODULE_SHOPPING_CART_MC_MY_FIRST_MODULE_STATUS
 */
class shopping_cart_rth_class_extensions_with_std_module extends StdModule
{

    public function __construct()
    {
        $this->init('SHOPPING_CART_RTH_CLASS_EXTENSIONS_WITH_STD_MODULE');
    }

    public static function restore_contents_products_db($sqlDataArray, $productId, $tableBasket, $qty, $type)
    {
        // Return ...
    }

    public static function restore_contents_attributes_db($sqlDataArray, $productId, $value, $type)
    {
        // Return ...
    }

    public static function restore_contents_products_session($products, $tableBasket, $type)
    {
        // Return ...
    }

    public static function restore_contents_attributes_session($products, $tableBasketAttributes, $type)
    {
        // Return ...
    }

    public static function update_cart_products_session($productId, $type, $quantity, $attributes)
    {
        // Return ...
    }

    public static function update_cart_products_db($sqlDataArray, $productId, $attributes, $type)
    {
        // Return ...
    }

    public static function update_cart_attributes_session($value, $type, $productId, $option)
    {
        // Return ...
    }

    public static function update_cart_attributes_db($sqlDataArray, $productId, $option, $type)
    {
        // Return ...
    }

    public static function add_cart_products_session($productId, $type, $qty, $attributes)
    {
        // Return ...
    }

    public static function add_cart_products_db($sqlDataArray, $type)
    {
        // Return ...
    }

    public static function add_cart_attributes_session($value, $type, $productId, $option)
    {
        // Return ...
    }

    public static function add_cart_attributes_db($sqlDataArray, $type)
    {
        // Return ...
    }

    public static function remove_custom_inputs_session($productId, $type)
    {
        // Return ...
    }

    public static function calculate_product_price($productPrice, $product, $contents, $productId)
    {
        // Return ...
    }

    public static function calculate_option_price($price, $option, $value, $productId, $qty)
    {
        // Return ...
    }

    public static function get_uprid($optValArray, $productId)
    {
        // Return ...
    }

    public static function get_products($productsData, $product, $contents)
    {
        // Return ...
    }

    public static function get_content_type($dbProductsId)
    {
        // Return ...
    }

    public static function check_products_status_permission($status, $productId)
    {
        // Return ...
    }

    public static function create_products_attributes_array($dataArray, $productId, $type)
    {
        // Return ...
    }

    public static function get_continue_shopping_link($url, $referer)
    {
        // Return ...
    }
}
