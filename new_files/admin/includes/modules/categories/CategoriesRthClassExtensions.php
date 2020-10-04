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

    // *** CATEGORIES FUNCTIONS ***

    public function insert_category_before($sql_data_array, $categories_data)
    {
        // Return parameter must be in first place
    }

    public function insert_category_after($categories_data, $categories_id): void
    {
        
    }

    public function insert_category_desc($sql_data_array, $categories_data, $categories_id, $language_id)
    {
        // Return parameter must be in first place
    }

    public function copy_category($sql_data_array, $src_category_id, $dest_category_id, $ctype)
    {
        // Return parameter must be in first place
    }

    public function copy_category_desc($sql_data_array, $src_category_id, $dest_category_id, $ctype, $new_cat_id)
    {
        // Return parameter must be in first place
    }

    public function move_category($src_category_id, $dest_category_id): void
    {
        // Return void
    }

    public function remove_category($category_id): void
    {
        // Return void
    }
    
    public function delete_category_image($category_image): void
    {
        // Return void
    }
    
    public function copy_category_image($src_pic, $dest_pic): void
    {
        // Return void
    }
    
    public function categories_image_process($categories_image_name, $categories_image_name_process): void
    {
        // Return void
    }

    // *** PRODUCTS FUNCTIONS ***

    public function insert_product_before($sql_data_array, $products_data)
    {
        // Return parameter must be in first place
    }

    public function insert_product_after($products_data, $products_id): void
    {
        // Return void
    }

    public function insert_product_desc($sql_data_array, $products_data, $products_id, $language_id)
    {
        // Return parameter must be in first place
    }

    public function remove_product($products_id): void
    {
        // Return void
    }

    public function delete_product($product_id, $product_categories): void
    {
        // Return void
    }

    public function duplicate_product_before($sql_data_array, $src_products_id, $dest_categories_id)
    {
        // Return parameter must be in first place
    }

    public function duplicate_product_after($sql_data_array, $src_products_id, $dest_categories_id, $dup_products_id)
    {
        // Return parameter must be in first place
    }

    public function duplicate_product_desc($sql_data_array, $src_products_id, $dest_categories_id, $dup_products_id)
    {
        // Return parameter must be in first place
    }
    
    public function image_name($image_name, $id, $counter, $suffix, $name_arr, $srcID, $data_arr)
    {
        // Return parameter must be in first place
    }
    
    public function saveSpecialsData($sql_data_array, $products_data)
    {
        // Return parameter must be in first place
    }
    
    public function insert_mo_images_after($products_data, $iImg, $products_id)
    {
        // Return parameter must be in first place
    }
}