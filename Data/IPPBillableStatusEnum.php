<?php
namespace qb-php-sdk\Data;
/**
 * @xmlNamespace http://schema.intuit.com/finance/v3
 * @xmlType string
 * @xmlName IPPBillableStatusEnum
 * @var IPPBillableStatusEnum
 * @xmlDefinition 
				Product: ALL
				Description: Enumeration of Billable Status used when searching for reimbursable expenses.
			
 */
class IPPBillableStatusEnum
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
				if (property_exists('IPPBillableStatusEnum',$initPropName))
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
		public $value;	const IPPBILLABLESTATUSENUM_BILLABLE = "Billable";
	const IPPBILLABLESTATUSENUM_NOTBILLABLE = "NotBillable";
	const IPPBILLABLESTATUSENUM_HASBEENBILLED = "HasBeenBilled";

} // end class IPPBillableStatusEnum
