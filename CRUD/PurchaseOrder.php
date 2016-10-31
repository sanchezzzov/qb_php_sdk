<?php
/**
 * Created by PhpStorm.
 * User: alex1
 * Date: 27.10.16
 * Time: 10:41
 */

namespace qb_php_sdk\CRUD;


use qb_php_sdk\Data\IPPAccount;
use qb_php_sdk\Data\IPPAccountTypeEnum;
use qb_php_sdk\Data\IPPItemBasedExpenseLineDetail;
use qb_php_sdk\Data\IPPLine;
use qb_php_sdk\Data\IPPLineDetailTypeEnum;
use qb_php_sdk\Data\IPPPurchaseOrder;
use qb_php_sdk\QuickBooksService;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;

class PurchaseOrder extends QuickBooksService
{
    const DEFAULT_MEMO = "Import from DiningEdge";

    public function create($jsonEntity)
    {
        $purchaseOrderList = Json::decode($jsonEntity, true);
        $purchaseOrder     = new IPPPurchaseOrder();

        $vendor = null;
        if (($vendor = ArrayHelper::getValue($purchaseOrderList, 'vendor')) == null) {
            throw new \Exception("Vendor not found");
        }
        if (isset($vendor['id'])) {
            $purchaseOrder->VendorRef = $vendor['id'];
        } elseif (isset($vendor['name'])) {
            $vendorObject             = $this->getVendor($vendor['name']);
            $purchaseOrder->VendorRef = $vendorObject->Id;
        }
        if (($purchaseOrderItems = ArrayHelper::getValue($purchaseOrderList, 'items')) == null) {
            throw new \Exception("Purchase order items not found");
        }
        $purchaseOrder->Memo    = self::DEFAULT_MEMO;
        $purchaseOrder->TxnDate = date('Y-m-d', time());

        $liabilityAccount            = $this->getLiabilityAccount();
        $purchaseOrder->APAccountRef = $liabilityAccount->Id;
        $purchaseOrder->Domain       = "QBO";
        $purchaseOrderLines          = [];
        foreach ($purchaseOrderItems as $purchaseOrderItem) {
            $purchaseOrderLine                             = new IPPLine();
            $purchaseOrderLine->DetailType                 = "ItemBasedExpenseLineDetail";
            $purchaseOrderLine->Amount                     = ArrayHelper::getValue($purchaseOrderItem, 'amount', 0);
            $purchaseOrderItemDetail                       = new IPPItemBasedExpenseLineDetail();
            $purchaseOrderItemDetail->Qty                  = ArrayHelper::getValue($purchaseOrderItem, 'qty', 0);
            $purchaseOrderItemDetail->UnitPrice            = ArrayHelper::getValue($purchaseOrderItem, 'price', 0);
            $purchaseOrderLine->DetailType
                                                           = IPPLineDetailTypeEnum::IPPLINEDETAILTYPEENUM_ACCOUNTBASEDEXPENSELINEDETAIL;
            $purchaseOrderLine->ItemBasedExpenseLineDetail = $purchaseOrderItemDetail;
            $purchaseOrderLines[]                          = $purchaseOrderLine;
        }
        $purchaseOrder->Line = [$purchaseOrderLines];

        return $purchaseOrder;
    }

    private function getVendor($vendorName)
    {
        $vendors = $this->dataService->FindAll('Vendor', 0, 500);
        foreach ($vendors as $vendor) {
            if ($vendor->DisplayName == $vendorName) {
                return $vendor;
            }
        }
        $vendor = new Vendor();

        return $vendor->create($vendorName);
    }

    private function getLiabilityAccount()
    {
        $accounts        = $this->dataService->FindAll('Account', 0, 500);
        $accountTypeEnum = new IPPAccountTypeEnum();
        foreach ($accounts as $account) {
            if ($account->AccountType == $accountTypeEnum::IPPACCOUNTTYPEENUM_ACCOUNTS_PAYABLE) {
                return $account;
            }
        }
        $account = new IPPAccount();

        return $account->create();

    }
}