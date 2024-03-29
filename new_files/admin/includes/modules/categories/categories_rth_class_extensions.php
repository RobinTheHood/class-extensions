<?php

/**
 * Look at the file categories_rth_class_extensions_with_std_module.php file for a variant
 * with the StdModule as parent class to avoid repetitions and to add
 * useful additional methods.
 *
 * You can find more information about the modified module development on:
 * https://docs.module-loader.de
 */

defined('_VALID_XTC') or die('Direct Access to this location is not allowed.');

/**
 * The class name must be the same as the file name without .php and
 * there must be a configuration constant STATUS with the following structure:
 * MODULE_CATEGORIES_<CLASS_NAME_UPPER>_STATUS
 *
 * Filename                 | Classname             | Configuration
 * mc_my_first_module.php   | mc_my_first_module    | MODULE_CATEGORIES_MC_MY_FIRST_MODULE_STATUS
 * McMyFirstModule.php      | McMyFirstModule       | MODULE_CATEGORIES_MCMYFIRSTMODULE_STATUS
 */
class categories_rth_class_extensions
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
        // The value of $this->prefix is: MODULE_CATEGORIES_RTH_CLASS_EXTENSIONS
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

    // *** CATEGORIES FUNCTIONS ***

    public function insert_category_before($sqlDataArray, $categoryData)
    {
        // Return parameter must be in first place
    }

    public function insert_category_after($categoryData, $categoryId): void
    {
    }

    public function insert_category_desc($sqlDataArray, $categoryData, $categoryId, $languageId)
    {
        // Return parameter must be in first place
    }

    public function copy_category($sqlDataArray, $srcCategoryId, $destCategoryId, $ctype)
    {
        // Return parameter must be in first place
    }

    public function copy_category_desc($sqlDataArray, $srcCategoryId, $destCategoryId, $ctype, $newCategoryId)
    {
        // Return parameter must be in first place
    }

    public function move_category($srcCategoryId, $destCategoryId): void
    {
        // Return void
    }

    public function remove_category($categoryId): void
    {
        // Return void
    }

    public function delete_category_image($categoryImage): void
    {
        // Return void
    }

    public function copy_category_image($srcImage, $destImage): void
    {
        // Return void
    }

    public function categories_image_process($categoryImageName, $categoryImageNameProcess): void
    {
        // Return void
    }

    // *** PRODUCTS FUNCTIONS ***

    public function insert_product_before($sqlDataArray, $productData)
    {
        // Return parameter must be in first place
    }

    public function insert_product_after($productData, $productId): void
    {
        // Return void
    }

    public function insert_product_desc($sqlDataArray, $productData, $productId, $languageId)
    {
        // Return parameter must be in first place
    }

    public function remove_product($productId): void
    {
        // Return void
    }

    public function delete_product($productId, $productCategory): void
    {
        // Return void
    }

    public function duplicate_product_before($sqlDataArray, $srcProductId, $destCategoryId)
    {
        // Return parameter must be in first place
    }

    public function duplicate_product_after($sqlDataArray, $srcProductId, $destCategoryId, $dupProductId)
    {
        // Return parameter must be in first place
    }

    public function duplicate_product_desc($sqlDataArray, $srcProductId, $destCategoryId, $dupProductId)
    {
        // Return parameter must be in first place
    }

    public function image_name($imageName, $id, $counter, $suffix, $nameArr, $srcId, $dataArr)
    {
        // Return parameter must be in first place
    }

    public function saveSpecialsData($sqlDataArray, $productData)
    {
        // Return parameter must be in first place
    }

    public function insert_mo_images_after($productData, $iImg, $productId)
    {
        // Return parameter must be in first place
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
