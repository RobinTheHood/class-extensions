<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
// restore_error_handler();
// restore_exception_handler();

use RobinTheHood\ModifiedStdModule\Classes\StdModule;
require_once DIR_FS_DOCUMENT_ROOT . '/vendor-no-composer/autoload.php';

class XtcPriceRthClassExtensions extends StdModule
{
  
    public function __construct($currency, $cGroup)
    {
        $this->init('MODULE_XTC_PRICE_RTH_CLASS_EXTENSIONS');
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