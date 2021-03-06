<?php namespace qb_php_sdk\Data;

/**
 * @xmlNamespace http://schema.intuit.com/finance/v3
 * @xmlType string
 * @xmlName IPPWeekEnum
 * @var IPPWeekEnum
 * @xmlDefinition Week enumeration
 */
class IPPWeekEnum
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
				if (property_exists('IPPWeekEnum',$initPropName))
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
		public $value;	const IPPWEEKENUM_SUNDAY = "Sunday";
	const IPPWEEKENUM_MONDAY = "Monday";
	const IPPWEEKENUM_TUESDAY = "Tuesday";
	const IPPWEEKENUM_WEDNESDAY = "Wednesday";
	const IPPWEEKENUM_THURSDAY = "Thursday";
	const IPPWEEKENUM_FRIDAY = "Friday";
	const IPPWEEKENUM_SATURDAY = "Saturday";

} // end class IPPWeekEnum
