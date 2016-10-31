<?php
/**
 * Created by PhpStorm.
 * User: alex1
 * Date: 27.10.16
 * Time: 10:41
 */

namespace qb-php-sdk\CRUD;


use qb-php-sdk\Data\IPPAccount;
use qb-php-sdk\Data\IPPAccountBasedExpenseLineDetail;
use qb-php-sdk\Data\IPPAccountTypeEnum;
use qb-php-sdk\Data\IPPItemBasedExpenseLineDetail;
use qb-php-sdk\Data\IPPLine;
use qb-php-sdk\Data\IPPLineDetailTypeEnum;
use qb-php-sdk\Data\IPPPurchaseOrder;
use qb-php-sdk\QuickBooksService;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;

class PurchaseOrder extends QuickBooksService
{
    const DEFAULT_MEMO = "For Internal usage";

    public function create($jsonEntity)
    {
        $purchaseOrderList = Json::decode($jsonEntity, true);
        $purchaseOrder     = new IPPPurchaseOrder();

        if (($vendorName = ArrayHelper::getValue($purchaseOrderList, 'vendorName')) == null) {
            throw new \Exception("Vendor not found");
        }
        if (($purchaseOrderItems = ArrayHelper::getValue($purchaseOrderList, 'items')) == null) {
            throw new \Exception("Vendor not found");
        }
        $purchaseOrder->Memo = self::DEFAULT_MEMO;

        $vendor                   = $this->getVendor($vendorName);
        $purchaseOrder->VendorRef = $vendor->Id;

        $liabilityAccount            = $this->getLiabilityAccount();
        $purchaseOrder->APAccountRef = $liabilityAccount->Id;
        $purchaseOrder->Domain = "QBO";
        $purchaseOrderLines = [];
        foreach ($purchaseOrderItems as $purchaseOrderItem) {
            $purchaseOrderLine  = new IPPLine();
            //$purchaseOrderAccountDetail = new IPPAccountBasedExpenseLineDetail();
            $purchaseOrderItemDetail = new IPPItemBasedExpenseLineDetail();
            $purchaseOrderLine->DetailType = IPPLineDetailTypeEnum::IPPLINEDETAILTYPEENUM_ACCOUNTBASEDEXPENSELINEDETAIL;
            //$purchaseOrderLine->AccountBasedExpenseLineDetail = $purchaseOrderAccountDetail;
            $purchaseOrderLine->ItemBasedExpenseLineDetail = $purchaseOrderItemDetail;
            $purchaseOrderLines[] = $purchaseOrderLine;
        }

/*        $purchaseOrder->Line = [$purchaseOrderLines];

        $account1                             = AccountHelper::getExpenseBankAccount($dataService);
        $detail->AccountRef                   = $account1->Id;
        $line1->AccountBasedExpenseLineDetail = $detail;*/



        //$purchaseOrder->POEmail = Email::getEmailAddress();



/*        $globalTaxEnum                       = new IPPGlobalTaxCalculationEnum();
        $purchaseOrder->GlobalTaxCalculation = $globalTaxEnum::IPPGLOBALTAXCALCULATIONENUM_NOTAPPLICABLE;

        $purchaseOrder->ReplyEmail = Email::getEmailAddress();

        $purchaseOrder->ShipAddr = Address::getPhysicalAddress();

        $purchaseOrder->TotalAmt = 3.00;

        date_default_timezone_set('UTC');
        $purchaseOrder->TxnDate = date('Y-m-d', time());*/

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