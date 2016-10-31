<?php
namespace qb-php-sdk\Data;
/**
 * @xmlNamespace http://schema.intuit.com/finance/v3
 * @xmlType string
 * @xmlName IPPAccountClassificationEnum
 * @var IPPAccountClassificationEnum
 * @xmlDefinition 
				Product: ALL
				Description: Enumeration of basic Account types used generally in the accounting activities.
			
 */
class IPPAccountClassificationEnum
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
				if (property_exists('IPPAccountClassificationEnum',$initPropName))
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
		public $value;	const IPPACCOUNTCLASSIFICATIONENUM_ASSET = "Asset";
	const IPPACCOUNTCLASSIFICATIONENUM_EQUITY = "Equity";
	const IPPACCOUNTCLASSIFICATIONENUM_EXPENSE = "Expense";
	const IPPACCOUNTCLASSIFICATIONENUM_LIABILITY = "Liability";
	const IPPACCOUNTCLASSIFICATIONENUM_REVENUE = "Revenue";

} // end class IPPAccountClassificationEnum
