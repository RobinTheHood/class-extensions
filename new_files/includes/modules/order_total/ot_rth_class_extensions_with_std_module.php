<?php

/**
 * This class uses the StdModule as parent class to avoid repetitions and to add
 * useful additional methods.
 *
 * Look at the file order_total_rth_class_extensions.php file for a variant without
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
 * The class name must be the same as the file name without .php
 *
 * Filename                  | Classname
 * ot_mc_my_first_module.php | ot_mc_my_first_module
 */
class ot_rth_class_extensions_with_std_module extends StdModule
{
    public function __construct()
    {
        parent::__construct('MODULE_ORDER_TOTAL_RTH_CLASS_EXTENSIONS_WITH_STD_MODULE');
    }
}
