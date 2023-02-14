<?php

/**
 * Look at the file shopping_cart_rth_class_extensions_with_std_module.php file for a variant
 * with the StdModule as parent class to avoid repetitions and to add
 * useful additional methods.
 *
 * You can find more information about the modified module development on:
 * https://docs.module-loader.de
 */

defined('_VALID_XTC') or die('Direct Access to this location is not allowed.');

class shopping_cart_rth_class_extensions
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
        // The value of $this->prefix is: MODULE_SHOPPING_CART_RTH_CLASS_EXTENSIONS
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

    public static function restore_contents_products_db($sqlDataArray, $productId, $tableBasket, $qty, $type)
    {
        // Return ...
    }

    public static function restore_contents_attributes_db($sqlDataArray, $productId, $value, $type)
    {
        // Return ...
    }

    public static function restore_contents_products_session($products, $tableBasket, $type)
    {
        // Return ...
    }

    public static function restore_contents_attributes_session($products, $tableBasketAttributes, $type)
    {
        // Return ...
    }

    public static function update_cart_products_session($productId, $type, $quantity, $attributes)
    {
        // Return ...
    }

    public static function update_cart_products_db($sqlDataArray, $productId, $attributes, $type)
    {
        // Return ...
    }

    public static function update_cart_attributes_session($value, $type, $productId, $option)
    {
        // Return ...
    }

    public static function update_cart_attributes_db($sqlDataArray, $productId, $option, $type)
    {
        // Return ...
    }

    public static function add_cart_products_session($productId, $type, $qty, $attributes)
    {
        // Return ...
    }

    public static function add_cart_products_db($sqlDataArray, $type)
    {
        // Return ...
    }

    public static function add_cart_attributes_session($value, $type, $productId, $option)
    {
        // Return ...
    }

    public static function add_cart_attributes_db($sqlDataArray, $type)
    {
        // Return ...
    }

    public static function remove_custom_inputs_session($productId, $type)
    {
        // Return ...
    }

    public static function calculate_product_price($productPrice, $product, $contents, $productId)
    {
        // Return ...
    }

    public static function calculate_option_price($price, $option, $value, $productId, $qty)
    {
        // Return ...
    }

    public static function get_uprid($optValArray, $productId)
    {
        // Return ...
    }

    public static function get_products($productsData, $product, $contents)
    {
        // Return ...
    }

    public static function get_content_type($dbProductsId)
    {
        // Return ...
    }

    public static function check_products_status_permission($status, $productId)
    {
        // Return ...
    }

    public static function create_products_attributes_array($dataArray, $productId, $type)
    {
        // Return ...
    }

    public static function get_continue_shopping_link($url, $referer)
    {
        // Return ...
    }

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
