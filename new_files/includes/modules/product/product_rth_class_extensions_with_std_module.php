<?php

/**
 * This class uses the StdModule as parent class to avoid repetitions and to add
 * useful additional methods.
 *
 * Look at the file product_rth_class_extensions.php file for a variant without
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
 * MODULE_PRODUCT_<CLASS_NAME_UPPER>_STATUS
 *
 * Filename                 | Classname             | Configuration
 * prodcut_mc_my_first_module.php | product_mc_my_first_module | MODULE_PRODUCT_PRODUCT_MC_MY_FIRST_MODULE_STATUS
 */
class product_rth_class_extensions_with_std_module extends StdModule
{

    public function __construct()
    {
        $moduleType = 'MODULE_PRODUCT';
        parent::__construct($moduleType . '_' . 'PRODUCT_RTH_CLASS_EXTENSIONS_WITH_STD_MODULE');
    }

    public function construct($data)
    {
        // Return ...
    }

    public function buildDataArray($productData, $array, $image)
    {
        // Return ...
    }

    public function productImage($returnName, $name, $type, $path)
    {
        // Return ...
    }
}
