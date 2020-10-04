<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
// restore_error_handler();
// restore_exception_handler();

use RobinTheHood\ModifiedStdModule\Classes\StdModule;
require_once DIR_FS_DOCUMENT_ROOT . '/vendor-no-composer/autoload.php';

class MainRthClassExtensions extends StdModule
{
  
    public function __construct()
    {
        $this->init('MODULE_MAIN_RTH_CLASS_EXTENSIONS');
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