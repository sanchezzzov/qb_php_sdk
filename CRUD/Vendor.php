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
    public function create($vendorName)
    {
        $vendor              = new IPPVendor();
        $vendor->DisplayName = $vendorName;
        $this->dataService->Add($vendor);
        return $vendor;
    }
}