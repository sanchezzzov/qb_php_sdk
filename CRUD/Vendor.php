<?php
/**
 * Created by PhpStorm.
 * User: alex1
 * Date: 27.10.16
 * Time: 13:50
 */

namespace qb_php_sdk\CRUD;


use qb_php_sdk\Data\IPPVendor;
use qb_php_sdk\QuickBooksService;

class Vendor extends QuickBooksService
{
    public $objectName = "Vendor";

    public function create($vendorName)
    {
        $vendor              = new IPPVendor();
        $vendor->DisplayName = $vendorName;
        $this->dataService->Add($vendor);

        return $vendor;
    }

    public function findAll()
    {
        return $this->dataService->FindAll($this->objectName);
    }

    public function findById($id)
    {
        $vendor     = new IPPVendor();
        $vendor->Id = $id;

        return $this->dataService->FindById($vendor);
    }
}