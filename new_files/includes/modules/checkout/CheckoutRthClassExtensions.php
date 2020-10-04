<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
// restore_error_handler();
// restore_exception_handler();

use RobinTheHood\ModifiedStdModule\Classes\StdModule;
require_once DIR_FS_DOCUMENT_ROOT . '/vendor-no-composer/autoload.php';

class CheckoutRthClassExtensions extends StdModule
{
  
    public function __construct()
    {
        $this->init('MODULE_CHECKOUT_RTH_CLASS_EXTENSIONS');
    }
}