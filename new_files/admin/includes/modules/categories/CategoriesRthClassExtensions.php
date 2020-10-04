<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
// restore_error_handler();
// restore_exception_handler();

defined('_VALID_XTC') or die('Direct Access to this location is not allowed.');

use RobinTheHood\ModifiedStdModule\Classes\StdModule;
require_once DIR_FS_DOCUMENT_ROOT . '/vendor-no-composer/autoload.php';

class CategoriesRthClassExtensions extends StdModule
{
  
    public function __construct()
    {
        $this->init('MODULE_CATEGORIES_RTH_CLASS_EXTENSIONS');
    }
}