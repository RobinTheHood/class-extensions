<?php

/**
 * This class uses the StdModule as parent class to avoid repetitions and to add
 * useful additional methods.
 *
 * Look at the file payment_rth_class_extensions.php file for a variant without
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
 * Filename                 | Classname
 * payment_mc_my_first_module.php | payment_mc_my_first_module
 */
class payment_rth_class_extensions_with_std_module extends StdModule
{

    public function __construct()
    {
        parent::__construct('MODULE_PAYMENT_RTH_CLASS_EXTENSIONS_WITH_STD_MODULE');
    }

    public function update_status(): void
    {
    }

    public function pre_confirmation_check(): void
    {
    }

    public function selection(): array
    {
    }

    public function confirmation(): array
    {
    }

    public function process_button(): string
    {
    }

    public function before_process(): void
    {
    }

    public function payment_action(): void
    {
    }

    public function before_send_order(): void
    {
    }

    public function after_process(): void
    {
    }

    public function success(): array
    {
    }

    public function get_error(): array
    {
    }

    public function iframeAction(): string
    {
    }

    public function create_paypal_link()
    {
    }

    public function info(): mixed
    {
    }
}
