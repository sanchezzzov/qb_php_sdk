<?php
/**
 * Created by PhpStorm.
 * User: alex1
 * Date: 27.10.16
 * Time: 13:50
 */

namespace qb-php-sdk\CRUD;


use qb-php-sdk\Data\IPPVendor;
use qb-php-sdk\QuickBooksService;

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