<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
// restore_error_handler();
// restore_exception_handler();

use RobinTheHood\ModifiedStdModule\Classes\StdModule;
require_once DIR_FS_DOCUMENT_ROOT . '/vendor-no-composer/autoload.php';

class ProductRthClassExtensions extends StdModule
{
  
    public function __construct()
    {
        $this->init('MODULE_PRODUCT_RTH_CLASS_EXTENSIONS');
    }

    public function construct($data)
    {
        // Return ...
    }

    public function buildDataArray($productData, $array, $image)
    {
        // Return ...
    }

    public function productImage($returnName, $name, $type ,$path)
    {
        // Return ...
    }
}