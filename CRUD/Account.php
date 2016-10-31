<?php
/**
 * Created by PhpStorm.
 * User: alex1
 * Date: 27.10.16
 * Time: 14:48
 */

namespace qb_php_sdk\CRUD;


use qb_php_sdk\Data\IPPAccount;
use qb_php_sdk\Data\IPPAccountClassificationEnum;
use qb_php_sdk\Data\IPPAccountSubTypeEnum;
use qb_php_sdk\Data\IPPAccountTypeEnum;
use qb_php_sdk\QuickBooksService;

class Account extends QuickBooksService
{
    public function createLiabilityAccount()
    {
        $account             = new IPPAccount();
        $account->Name       = "Equity" . rand();
        $account->SubAccount = false;
        $account->Active     = true;

        $accountClassificationEnum = new IPPAccountClassificationEnum();
        $account->Classification   = $accountClassificationEnum::IPPACCOUNTCLASSIFICATIONENUM_LIABILITY;

        $accountTypeEnum      = new IPPAccountTypeEnum();
        $account->AccountType = $accountTypeEnum::IPPACCOUNTTYPEENUM_ACCOUNTS_PAYABLE;

        $accountSubTypeEnum      = new IPPAccountSubTypeEnum();
        $account->AccountSubType = $accountSubTypeEnum::IPPACCOUNTSUBTYPEENUM_ACCOUNTSPAYABLE;

        $account->CurrentBalance                = 0;
        $account->CurrentBalanceWithSubAccounts = 0;
        $this->dataService->Add($account);

        return $account;
    }
}