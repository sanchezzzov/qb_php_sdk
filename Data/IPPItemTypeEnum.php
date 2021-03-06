<?php namespace qb_php_sdk\Data;

/**
 * @xmlNamespace http://schema.intuit.com/finance/v3
 * @xmlType string
 * @xmlName IPPItemTypeEnum
 * @var IPPItemTypeEnum
 * @xmlDefinition 
				Product: ALL
				Description: Enumeration of types of Items in QuickBooks.
			
 */
class IPPItemTypeEnum
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
				if (property_exists('IPPItemTypeEnum',$initPropName))
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
		public $value;	const IPPITEMTYPEENUM_ASSEMBLY = "Assembly";
	const IPPITEMTYPEENUM_CATEGORY = "Category";
	const IPPITEMTYPEENUM_FIXED_ASSET = "Fixed Asset";
	const IPPITEMTYPEENUM_GROUP = "Group";
	const IPPITEMTYPEENUM_INVENTORY = "Inventory";
	const IPPITEMTYPEENUM_NONINVENTORY = "NonInventory";
	const IPPITEMTYPEENUM_OTHER_CHARGE = "Other Charge";
	const IPPITEMTYPEENUM_PAYMENT = "Payment";
	const IPPITEMTYPEENUM_SERVICE = "Service";
	const IPPITEMTYPEENUM_SUBTOTAL = "Subtotal";
	const IPPITEMTYPEENUM_DISCOUNT = "Discount";
	const IPPITEMTYPEENUM_TAX = "Tax";
	const IPPITEMTYPEENUM_TAX_GROUP = "Tax Group";

} // end class IPPItemTypeEnum
