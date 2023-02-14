<?php

/**
 * This class uses the StdModule as parent class to avoid repetitions and to add
 * useful additional methods.
 *
 * Look at the file order_rth_class_extensions.php file for a variant without
 * the StdModule and without a additional third -party library.
 *
 * You can find the StdModule on GitHub:
 * https://github.com/RobinTheHood/modified-std-module
 *
 * You can find more information about the modified module development on:
 * https://docs.module-loader.de
 */

use RobinTheHood\ModifiedStdModule\Classes\StdModule;

class order_rth_class_extensions_with_std_module extends StdModule
{

    public function __construct()
    {
        $this->init('ORDER_RTH_CLASS_EXTENSIONS');
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
