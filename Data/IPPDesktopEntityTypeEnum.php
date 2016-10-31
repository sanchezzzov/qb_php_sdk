<?php namespace qb_php_sdk\Data;

/**
 * @xmlNamespace http://schema.intuit.com/finance/v3
 * @xmlType string
 * @xmlName IPPDesktopEntityTypeEnum
 * @var IPPDesktopEntityTypeEnum
 * @xmlDefinition Enumeration of Desktop Entity Type For ThirdPartyAppId Migration
 */
class IPPDesktopEntityTypeEnum
	{

		/**                                                                       
		* Initializes this object, optionally with pre-defined property values    
		*                                                                         
		* Initializes this object and it's property members, using the dictionary
		* of key/value pairs passed as an optional argument.                      
		*                                                                         
		* @param dictionary $keyValInitializers key/value pairs to be populated into object's properties 
		* @param boolean $verbose specifies whether object should echo warnings   
		*/                                                                        
		public function __construct($keyValInitializers=array(), $verbose=FALSE)
		{
			foreach($keyValInitializers as $initPropName => $initPropVal)
			{
				if (property_exists('IPPDesktopEntityTypeEnum',$initPropName))
				{
					$this->{$initPropName} = $initPropVal;
				}
				else
				{
					if ($verbose)
						echo "Property does not exist ($initPropName) in class (".get_class($this).")";
				}
			}
		}

		/**
		 * @xmlType value
		 * @var string
		 */
		public $value;	const IPPDESKTOPENTITYTYPEENUM_ANY = "ANY";
	const IPPDESKTOPENTITYTYPEENUM_CREDIT_CARD = "CREDIT_CARD";
	const IPPDESKTOPENTITYTYPEENUM_DEPOSIT = "DEPOSIT";
	const IPPDESKTOPENTITYTYPEENUM_CHECK = "CHECK";
	const IPPDESKTOPENTITYTYPEENUM_INVOICE = "INVOICE";
	const IPPDESKTOPENTITYTYPEENUM_CASHSALE = "CASHSALE";
	const IPPDESKTOPENTITYTYPEENUM_CREDIT_MEMO = "CREDIT_MEMO";
	const IPPDESKTOPENTITYTYPEENUM_APP_PAY = "APP_PAY";
	const IPPDESKTOPENTITYTYPEENUM_GENERAL_JOURNAL = "GENERAL_JOURNAL";
	const IPPDESKTOPENTITYTYPEENUM_BILL = "BILL";
	const IPPDESKTOPENTITYTYPEENUM_GENERIC = "GENERIC";
	const IPPDESKTOPENTITYTYPEENUM_CREDIT_CARD_REFUND = "CREDIT_CARD_REFUND";
	const IPPDESKTOPENTITYTYPEENUM_BILL_REFUND = "BILL_REFUND";
	const IPPDESKTOPENTITYTYPEENUM_AR_CREDIT_CARD_REFUND = "AR_CREDIT_CARD_REFUND";
	const IPPDESKTOPENTITYTYPEENUM_BILL_CHECK = "BILL_CHECK";
	const IPPDESKTOPENTITYTYPEENUM_BILL_CREDIT_CARD = "BILL_CREDIT_CARD";
	const IPPDESKTOPENTITYTYPEENUM_SALES_TAX_PAYMENT = "SALES_TAX_PAYMENT";
	const IPPDESKTOPENTITYTYPEENUM_PURCHASE_ORDER = "PURCHASE_ORDER";
	const IPPDESKTOPENTITYTYPEENUM_INVENTORY_ADJUSTMENT = "INVENTORY_ADJUSTMENT";
	const IPPDESKTOPENTITYTYPEENUM_INVENTORY_RECEIPT = "INVENTORY_RECEIPT";
	const IPPDESKTOPENTITYTYPEENUM_PAYCHECK = "PAYCHECK";
	const IPPDESKTOPENTITYTYPEENUM_LIABILITY_CHECK = "LIABILITY_CHECK";
	const IPPDESKTOPENTITYTYPEENUM_BEGIN_BALANCE_CHECK = "BEGIN_BALANCE_CHECK";
	const IPPDESKTOPENTITYTYPEENUM_LIABILITY_ADJUSTMENT = "LIABILITY_ADJUSTMENT";
	const IPPDESKTOPENTITYTYPEENUM_ESTIMATE = "ESTIMATE";
	const IPPDESKTOPENTITYTYPEENUM_STATEMENT_CHARGE = "STATEMENT_CHARGE";
	const IPPDESKTOPENTITYTYPEENUM_TRANSFER = "TRANSFER";
	const IPPDESKTOPENTITYTYPEENUM_SALESORDER = "SALESORDER";
	const IPPDESKTOPENTITYTYPEENUM_QBRSLIABCHECK = "QBRSLIABCHECK";
	const IPPDESKTOPENTITYTYPEENUM_BUILDASSEMBLY = "BUILDASSEMBLY";
	const IPPDESKTOPENTITYTYPEENUM_EFPLIABCHECK = "EFPLIABCHECK";
	const IPPDESKTOPENTITYTYPEENUM_PRIOR_PMT = "PRIOR_PMT";
	const IPPDESKTOPENTITYTYPEENUM_LIAB_REFUND_CHECK = "LIAB_REFUND_CHECK";
	const IPPDESKTOPENTITYTYPEENUM_ITEM_SERVICE = "ITEM_SERVICE";
	const IPPDESKTOPENTITYTYPEENUM_ITEM_INVENTORY = "ITEM_INVENTORY";
	const IPPDESKTOPENTITYTYPEENUM_ITEM_ASSEMBLY = "ITEM_ASSEMBLY";
	const IPPDESKTOPENTITYTYPEENUM_ITEM_PART = "ITEM_PART";
	const IPPDESKTOPENTITYTYPEENUM_ITEM_FIXEDASSET = "ITEM_FIXEDASSET";
	const IPPDESKTOPENTITYTYPEENUM_ITEM_CHARGES = "ITEM_CHARGES";
	const IPPDESKTOPENTITYTYPEENUM_ITEM_SUBTOTAL = "ITEM_SUBTOTAL";
	const IPPDESKTOPENTITYTYPEENUM_ITEM_GROUP = "ITEM_GROUP";
	const IPPDESKTOPENTITYTYPEENUM_ITEM_DISCOUNT = "ITEM_DISCOUNT";
	const IPPDESKTOPENTITYTYPEENUM_ITEM_PAYMENT = "ITEM_PAYMENT";
	const IPPDESKTOPENTITYTYPEENUM_ITEM_TAXCOMP = "ITEM_TAXCOMP";
	const IPPDESKTOPENTITYTYPEENUM_ITEM_TAXGROUP = "ITEM_TAXGROUP";
	const IPPDESKTOPENTITYTYPEENUM_ITEM_GROUPEND = "ITEM_GROUPEND";
	const IPPDESKTOPENTITYTYPEENUM_ITEM_PURCHASE = "ITEM_PURCHASE";
	const IPPDESKTOPENTITYTYPEENUM_ITEM_PO = "ITEM_PO";
	const IPPDESKTOPENTITYTYPEENUM_ITEM_INVOICE = "ITEM_INVOICE";
	const IPPDESKTOPENTITYTYPEENUM_ITEM_ALLITEMS = "ITEM_ALLITEMS";
	const IPPDESKTOPENTITYTYPEENUM_ITEM_NOTAXES = "ITEM_NOTAXES";
	const IPPDESKTOPENTITYTYPEENUM_ITEM_SERVICES_AND_CHARGES = "ITEM_SERVICES_AND_CHARGES";
	const IPPDESKTOPENTITYTYPEENUM_ITEM_REAL_GROUP_END = "ITEM_REAL_GROUP_END";
	const IPPDESKTOPENTITYTYPEENUM_ITEM_MAX = "ITEM_MAX";
	const IPPDESKTOPENTITYTYPEENUM_CUSTOMER = "CUSTOMER";
	const IPPDESKTOPENTITYTYPEENUM_VENDOR = "VENDOR";
	const IPPDESKTOPENTITYTYPEENUM_EMPLOYEE = "EMPLOYEE";
	const IPPDESKTOPENTITYTYPEENUM_OTHERNAME = "OTHERNAME";
	const IPPDESKTOPENTITYTYPEENUM_NULLLINKTYPE = "NULLLINKTYPE";
	const IPPDESKTOPENTITYTYPEENUM_UNUSED1 = "UNUSED1";
	const IPPDESKTOPENTITYTYPEENUM_REFUNDCHECKTOCRMEMO = "REFUNDCHECKTOCRMEMO";
	const IPPDESKTOPENTITYTYPEENUM_INVOICETOCRMEMO = "INVOICETOCRMEMO";
	const IPPDESKTOPENTITYTYPEENUM_INVOICETOPAYMENT = "INVOICETOPAYMENT";
	const IPPDESKTOPENTITYTYPEENUM_INVOICETODISCOUNT = "INVOICETODISCOUNT";
	const IPPDESKTOPENTITYTYPEENUM_BILLTOCHECK = "BILLTOCHECK";
	const IPPDESKTOPENTITYTYPEENUM_BILLTOCCARD = "BILLTOCCARD";
	const IPPDESKTOPENTITYTYPEENUM_BILLTOCREDIT = "BILLTOCREDIT";
	const IPPDESKTOPENTITYTYPEENUM_DEPOSITTOPAYMENT = "DEPOSITTOPAYMENT";
	const IPPDESKTOPENTITYTYPEENUM_REFUNDCHECKTOPAYMENT = "REFUNDCHECKTOPAYMENT";
	const IPPDESKTOPENTITYTYPEENUM_INVOICETOPMTLINE = "INVOICETOPMTLINE";
	const IPPDESKTOPENTITYTYPEENUM_INVOICETOCREDITLINE = "INVOICETOCREDITLINE";
	const IPPDESKTOPENTITYTYPEENUM_BILLTOCREDITLINE = "BILLTOCREDITLINE";
	const IPPDESKTOPENTITYTYPEENUM_CREDLINETODISCLINE = "CREDLINETODISCLINE";
	const IPPDESKTOPENTITYTYPEENUM_PURCHASEORDERTORECEIPT = "PURCHASEORDERTORECEIPT";
	const IPPDESKTOPENTITYTYPEENUM_BILLTODISCOUNT = "BILLTODISCOUNT";
	const IPPDESKTOPENTITYTYPEENUM_INVOICETODISCOUNTLINE = "INVOICETODISCOUNTLINE";
	const IPPDESKTOPENTITYTYPEENUM_INVOICETOESTIMATEQTY = "INVOICETOESTIMATEQTY";
	const IPPDESKTOPENTITYTYPEENUM_INVOICETOESTIMATEAMT = "INVOICETOESTIMATEAMT";
	const IPPDESKTOPENTITYTYPEENUM_INVOICETOSALESORDERQTY = "INVOICETOSALESORDERQTY";
	const IPPDESKTOPENTITYTYPEENUM_INVOICETOSALESORDERAMT = "INVOICETOSALESORDERAMT";
	const IPPDESKTOPENTITYTYPEENUM_JOURNALENTRYTOCRMEMO = "JOURNALENTRYTOCRMEMO";
	const IPPDESKTOPENTITYTYPEENUM_AR_CCREFUND_TO_CREDITMEMO = "AR_CCREFUND_TO_CREDITMEMO";
	const IPPDESKTOPENTITYTYPEENUM_AR_CCREFUND_TO_PAYMENT = "AR_CCREFUND_TO_PAYMENT";
	const IPPDESKTOPENTITYTYPEENUM_AR_CCREFUND_TO_JOURNAL = "AR_CCREFUND_TO_JOURNAL";
	const IPPDESKTOPENTITYTYPEENUM_GIRO_TO_CHECK = "GIRO_TO_CHECK";
	const IPPDESKTOPENTITYTYPEENUM_ITEM = "ITEM";
	const IPPDESKTOPENTITYTYPEENUM_DEPARTMENT = "DEPARTMENT";
	const IPPDESKTOPENTITYTYPEENUM_USERS = "USERS";
	const IPPDESKTOPENTITYTYPEENUM_KLASS = "KLASS";
	const IPPDESKTOPENTITYTYPEENUM_PAYMENT_METHOD = "PAYMENT_METHOD";
	const IPPDESKTOPENTITYTYPEENUM_TERM = "TERM";
	const IPPDESKTOPENTITYTYPEENUM_BUDGET = "BUDGET";
	const IPPDESKTOPENTITYTYPEENUM_TAX_CODE = "TAX_CODE";
	const IPPDESKTOPENTITYTYPEENUM_TAX_CODE_RATE = "TAX_CODE_RATE";
	const IPPDESKTOPENTITYTYPEENUM_TAX_AGENCY = "TAX_AGENCY";
	const IPPDESKTOPENTITYTYPEENUM_ATTACHABLE = "ATTACHABLE";
	const IPPDESKTOPENTITYTYPEENUM_ACCOUNT = "ACCOUNT";
	const IPPDESKTOPENTITYTYPEENUM_PREFERENCES = "PREFERENCES";

} // end class IPPDesktopEntityTypeEnum
