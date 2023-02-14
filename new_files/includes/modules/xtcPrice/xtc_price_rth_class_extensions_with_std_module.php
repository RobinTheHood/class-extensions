<?php

/**
 * This class uses the StdModule as parent class to avoid repetitions and to add
 * useful additional methods.
 *
 * Look at the file xtc_price_rth_class_extensions.php file for a variant without
 * the StdModule and without a additional third -party library.
 *
 * You can find the StdModule on GitHub:
 * https://github.com/RobinTheHood/modified-std-module
 *
 * You can find more information about the modified module development on:
 * https://docs.module-loader.de
 */

use RobinTheHood\ModifiedStdModule\Classes\StdModule;

class xtc_price_rth_class_extensions_with_std_module extends StdModule
{

    public function __construct($currency, $cGroup)
    {
        $this->init('XTC_PRICE_RTH_CLASS_EXTENSIONS');
        // Return ...
    }

    public function CheckSpecial($product, $productId)
    {
        // Return ...
    }

    public function CheckSpecialPrice($specialPrice, $productId)
    {
        // Return ...
    }

    public function GetOptionPrice($dataArr, $attributeData, $productId, $option, $value, $qty)
    {
        // Return ...
    }

    public function FormatSpecial($return, $productId, $sPrice, $productPrice, $format, $vpeStatus)
    {
        // Return ...
    }

    public function checkAttributes($productId)
    {
        // Return ...
    }

    public function getPprice($productData, $productId)
    {
        // Return ...
    }
}
