<?php

/**
 * Look at the file payment_rth_class_extensions_with_std_module.php file for a variant
 * with the StdModule as parent class to avoid repetitions and to add
 * useful additional methods.
 *
 * You can find more information about the modified module development on:
 * https://docs.module-loader.de
 */

defined('_VALID_XTC') or die('Direct Access to this location is not allowed.');

class payment_rth_class_extensions
{
    /** @var string $prefix **/
    public $prefix;

    /** @var string $code **/
    public $code;

    /** @var string $title **/
    public $title;

    /** @var string $description **/
    public $description;

    /** @var bool $enabled **/
    public $enabled;

    /** @var int $sort_order **/
    public $sort_order;

    /** @var string[] $keys **/
    public $keys;

    public function __construct()
    {
        // The value of $this->prefix is: MODULE_PAYMENT_RTH_CLASS_EXTENSIONS
        $this->prefix = 'MODULE_' . strtoupper(self::class);

        $this->code        = self::class;
        $this->title       = constant($this->prefix . '_TITLE');
        $this->description = constant($this->prefix . '_DESC');
        $this->sort_order  = constant($this->prefix . '_SORT_ORDER');
        $this->enabled     = defined($this->prefix . '_STATUS') && 'true' === constant($this->prefix . '_STATUS');
    }

    public function install(): void
    {
        /** addConfiguration() is an helper method, you can find it at the end of the file. */
        $this->addConfiguration('STATUS', 'true', 6, 1, "xtc_cfg_select_option(array('true', 'false'),");
    }

    public function remove(): void
    {
        /** deleteConfiguration() is an helper method, you can find it at the end of the file. */
        $this->deleteConfiguration('STATUS');
    }

    // *** HELPER METHODS ***

    // *** HELPER METHODS TO FACILITATE CONFIGURATION ***

    protected function addConfiguration(
        string $key,
        string $value,
        int $groupId,
        int $sortOrder,
        string $setFunction = '',
        string $useFunction = ''
    ): void {
        $key = $this->prefix . '_' . $key;
        $setFunction = str_replace("'", "\\'", $setFunction);
        xtc_db_query("INSERT INTO `" . TABLE_CONFIGURATION . "` (`configuration_key`, `configuration_value`, `configuration_group_id`, `sort_order`, `set_function`, `use_function`, `date_added`) VALUES ('$key', '$value', '$groupId', '$sortOrder', '$setFunction', '$useFunction', NOW())");
    }

    protected function deleteConfiguration(string $key): void
    {
        $key = $this->prefix . '_' . $key;
        xtc_db_query("DELETE FROM " . TABLE_CONFIGURATION . " WHERE configuration_key = '$key'");
    }
}
