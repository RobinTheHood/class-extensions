<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
// restore_error_handler();
// restore_exception_handler();

use RobinTheHood\ModifiedStdModule\Classes\StdModule;
require_once DIR_FS_DOCUMENT_ROOT . '/vendor-no-composer/autoload.php';

class ShoppingCartRthClassExtensions extends StdModule
{
  
    public function __construct()
    {
        $this->init('MODULE_SHOPPING_CART_RTH_CLASS_EXTENSIONS');
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