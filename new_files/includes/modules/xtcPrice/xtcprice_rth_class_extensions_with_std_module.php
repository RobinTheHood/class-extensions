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

declare(strict_types=1);

use RobinTheHood\ModifiedStdModule\Classes\StdModule;

/**
 * The class name must be the same as the file name without .php and
 * there must be a configuration constant STATUS with the following structure:
 * MODULE_XTCPRICE_<CLASS_NAME_UPPER>_STATUS
 *
 * Filename                        | Classname                   | Configuration
 * xtcprice_mc_my_first_module.php | xtcprice_mc_my_first_module | MODULE_XTCPRICE_XTCPRICE_MC_MY_FIRST_MODULE_STATUS
 */
class xtcprice_rth_class_extensions_with_std_module extends StdModule
{

    public function __construct($currency, $cGroup)
    {
        $moduleType = 'MODULE_XTCPRICE';
        parent::__construct($moduleType . '_' . 'XTCPRICE_RTH_CLASS_EXTENSIONS_WITH_STD_MODULE');
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
