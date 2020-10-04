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
}