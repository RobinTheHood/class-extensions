<?php
// Robin Wieschendorf - START
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
// restore_error_handler();
// restore_exception_handler();
// Robin Wieschendorf - END

use RobinTheHood\ModifiedStdModule\Classes\StdModule;
require_once DIR_FS_DOCUMENT_ROOT . '/vendor-no-composer/autoload.php';

class ShippingRthClassExtensions extends StdModule
{
  
    public function __construct()
    {
        $this->init('MODULE_SHIPPING_RTH_CLASS_EXTENSIONS');
    }
}