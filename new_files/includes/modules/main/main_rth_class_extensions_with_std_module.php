<?php

/**
 * This class uses the StdModule as parent class to avoid repetitions and to add
 * useful additional methods.
 *
 * Look at the file main_rth_class_extensions.php file for a variant without
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
 * MODULE_MAIN_<CLASS_NAME_UPPER>_STATUS
 *
 * Filename                      | Classname                  | Configuration
 * main_mc_my_first_module.php   | main_mc_my_first_module    | MODULE_MAIN_MAIN_MC_MY_FIRST_MODULE_STATUS
 */
class main_rth_class_extensions_with_std_module extends StdModule
{
    public function __construct()
    {
        $moduleType = 'MODULE_MAIN';
        parent::__construct($moduleType . '_' . 'MAIN_RTH_CLASS_EXTENSIONS_WITH_STD_MODULE');
    }

    public function getTaxInfo($taxInfo, $taxRate)
    {
        // Return ...
    }

    public function getShippingNotice($contentLink, $coId, $text, $ssl, $class_more)
    {
        // Return ...
    }

    public function getContentData($content_data_array, $coId, $langId, $customerStatus, $getInactive, $addSelect)
    {
        // Return ...
    }

    public function getVPEtext($vpeText, $products, $price, $vpeName)
    {
        // Return ...
    }

    public function getProductPopupLink($productPopupLink, $pId, $text, $class, $addParams)
    {
        // Return ...
    }

    public function getAttributes($paramsArr, $paramsArrOrigin)
    {
        // Return ...
    }

    public function getAttributesSelect($attributes, $paramsArr, $paramsArrOrigin)
    {
        // Return ...
    }

    public function getImage($image, $dir, $check, $noImg, $imageOrigin)
    {
        // Return ...
    }
}
