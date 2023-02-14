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

use RobinTheHood\ModifiedStdModule\Classes\StdModule;

class product_rth_class_extensions_with_std_module extends StdModule
{

    public function __construct()
    {
        $this->init('PRODUCT_RTH_CLASS_EXTENSIONS_WITH_STD_MODULE');
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
