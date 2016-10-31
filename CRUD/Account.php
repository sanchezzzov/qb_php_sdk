<?php
/**
 * Created by PhpStorm.
 * User: alex1
 * Date: 27.10.16
 * Time: 14:48
 */

namespace qb-php-sdk\CRUD;


use qb-php-sdk\Data\IPPAccount;
use qb-php-sdk\Data\IPPAccountClassificationEnum;
use qb-php-sdk\Data\IPPAccountSubTypeEnum;
use qb-php-sdk\Data\IPPAccountTypeEnum;
use qb-php-sdk\QuickBooksService;

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