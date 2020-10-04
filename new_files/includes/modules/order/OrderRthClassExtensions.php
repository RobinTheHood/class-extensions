<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
// restore_error_handler();
// restore_exception_handler();

use RobinTheHood\ModifiedStdModule\Classes\StdModule;
require_once DIR_FS_DOCUMENT_ROOT . '/vendor-no-composer/autoload.php';

class OrderRthClassExtensions extends StdModule
{
  
    public function __construct()
    {
        $this->init('MODULE_ORDER_RTH_CLASS_EXTENSIONS');
    }

    public function add_products($products, $ordersProducts)
    {
        // Return ...
    }
    
    public function add_attributes($productsAttributes, $attributes)
    {
        // Return ...
    }
    
    public function order_data($orderData, $orderDataValues, $oId, $orderLangId)
    {
        // Return ...
    } 
    
    public function order_data_attributes($attributesArray, $attributesDataValues, $orderDataValues, $oId, $orderLangId)
    {
        // Return ...
    }    
    
    public function cart_products($products, $productId)
    {
        // Return ...
    }

    public function cart_attributes($productsAttributes, $attributes, $productId, $value, $products)
    {
        // Return ...
    }
}