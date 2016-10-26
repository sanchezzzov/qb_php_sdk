<?php namespace qb_php_sdk\Data;

/**
 * @xmlNamespace http://schema.intuit.com/finance/v3
 * @xmlType string
 * @xmlName IPPServiceTypeEnum
 * @var IPPServiceTypeEnum
 * @xmlDefinition Enumeration of item service type for India sales tax
 */
class IPPServiceTypeEnum
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
				if (property_exists('IPPServiceTypeEnum',$initPropName))
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
		public $value;	const IPPSERVICETYPEENUM_ADVT = "ADVT";
	const IPPSERVICETYPEENUM_AIRPORTSERVICES = "AIRPORTSERVICES";
	const IPPSERVICETYPEENUM_AIRTRANSPORT = "AIRTRANSPORT";
	const IPPSERVICETYPEENUM_AIRTRVLAGNT = "AIRTRVLAGNT";
	const IPPSERVICETYPEENUM_ARCHITECT = "ARCHITECT";
	const IPPSERVICETYPEENUM_ASSTMGMT = "ASSTMGMT";
	const IPPSERVICETYPEENUM_ATMMAINTENANCE = "ATMMAINTENANCE";
	const IPPSERVICETYPEENUM_AUCTIONSERV = "AUCTIONSERV";
	const IPPSERVICETYPEENUM_AUTHSERST = "AUTHSERST";
	const IPPSERVICETYPEENUM_BANKANDFIN = "BANKANDFIN";
	const IPPSERVICETYPEENUM_BEAUTYPARLOR = "BEAUTYPARLOR";
	const IPPSERVICETYPEENUM_BROADCAST = "BROADCAST";
	const IPPSERVICETYPEENUM_BUSINESSAUX = "BUSINESSAUX";
	const IPPSERVICETYPEENUM_BUSINESSEXHIBITION = "BUSINESSEXHIBITION";
	const IPPSERVICETYPEENUM_BUSINESSSUPPORTSERV = "BUSINESSSUPPORTSERV";
	const IPPSERVICETYPEENUM_CA = "CA";
	const IPPSERVICETYPEENUM_CABLEOPTR = "CABLEOPTR";
	const IPPSERVICETYPEENUM_CARGOHAND = "CARGOHAND";
	const IPPSERVICETYPEENUM_CLEANINGSERV = "CLEANINGSERV";
	const IPPSERVICETYPEENUM_CLEARANDFORW = "CLEARANDFORW";
	const IPPSERVICETYPEENUM_CLUBSANDASSSERVICE = "CLUBSANDASSSERVICE";
	const IPPSERVICETYPEENUM_COMMCOACHORTRAINING = "COMMCOACHORTRAINING";
	const IPPSERVICETYPEENUM_CONSENG = "CONSENG";
	const IPPSERVICETYPEENUM_CONSTRCOMMERCIALCOMPLEX = "CONSTRCOMMERCIALCOMPLEX";
	const IPPSERVICETYPEENUM_CONTAINERRAILTRANS = "CONTAINERRAILTRANS";
	const IPPSERVICETYPEENUM_CONVSERV = "CONVSERV";
	const IPPSERVICETYPEENUM_COSTACC = "COSTACC";
	const IPPSERVICETYPEENUM_COURIER = "COURIER";
	const IPPSERVICETYPEENUM_CREDITCARD = "CREDITCARD";
	const IPPSERVICETYPEENUM_CREDITRATAGNCY = "CREDITRATAGNCY";
	const IPPSERVICETYPEENUM_CRUISESHIPTOUR = "CRUISESHIPTOUR";
	const IPPSERVICETYPEENUM_CS = "CS";
	const IPPSERVICETYPEENUM_CUSHOUSEAG = "CUSHOUSEAG";
	const IPPSERVICETYPEENUM_DESIGNSERV = "DESIGNSERV";
	const IPPSERVICETYPEENUM_DEVELOPSUPPLYCONTENT = "DEVELOPSUPPLYCONTENT";
	const IPPSERVICETYPEENUM_DREDGING = "DREDGING";
	const IPPSERVICETYPEENUM_DRYCLEANING = "DRYCLEANING";
	const IPPSERVICETYPEENUM_ERECTIONCOMMORINSTALL = "ERECTIONCOMMORINSTALL";
	const IPPSERVICETYPEENUM_EVENTMGMT = "EVENTMGMT";
	const IPPSERVICETYPEENUM_FASHIONDES = "FASHIONDES";
	const IPPSERVICETYPEENUM_FOREXBROKING = "FOREXBROKING";
	const IPPSERVICETYPEENUM_FORWARDCONTRACT = "FORWARDCONTRACT";
	const IPPSERVICETYPEENUM_FRANCHISESERV = "FRANCHISESERV";
	const IPPSERVICETYPEENUM_GENERALINSURANCE = "GENERALINSURANCE";
	const IPPSERVICETYPEENUM_GOODSTRANSPORT = "GOODSTRANSPORT";
	const IPPSERVICETYPEENUM_HEALTHCLUBANDFITNESS = "HEALTHCLUBANDFITNESS";
	const IPPSERVICETYPEENUM_INFORMATIONSERV = "INFORMATIONSERV";
	const IPPSERVICETYPEENUM_INSURAUX = "INSURAUX";
	const IPPSERVICETYPEENUM_INTDEC = "INTDEC";
	const IPPSERVICETYPEENUM_INTELLECTUALPROPERTY = "INTELLECTUALPROPERTY";
	const IPPSERVICETYPEENUM_INTERNATIONALAIRTRAVEL = "INTERNATIONALAIRTRAVEL";
	const IPPSERVICETYPEENUM_INTERNETCAFE = "INTERNETCAFE";
	const IPPSERVICETYPEENUM_INTERNETTELEPHONY = "INTERNETTELEPHONY";
	const IPPSERVICETYPEENUM_LIFEINS = "LIFEINS";
	const IPPSERVICETYPEENUM_MAILLISTCOMPILE = "MAILLISTCOMPILE";
	const IPPSERVICETYPEENUM_MANDAPKEEPER = "MANDAPKEEPER";
	const IPPSERVICETYPEENUM_MANPWRRECRUIT = "MANPWRRECRUIT";
	const IPPSERVICETYPEENUM_MGMTCONSUL = "MGMTCONSUL";
	const IPPSERVICETYPEENUM_MGMTMAINTREPAIR = "MGMTMAINTREPAIR";
	const IPPSERVICETYPEENUM_MININGOIL = "MININGOIL";
	const IPPSERVICETYPEENUM_MKTRESAGNCY = "MKTRESAGNCY";
	const IPPSERVICETYPEENUM_ONLINEINFORMRETRIEVAL = "ONLINEINFORMRETRIEVAL";
	const IPPSERVICETYPEENUM_OPINIONPOLL = "OPINIONPOLL";
	const IPPSERVICETYPEENUM_OUTDOORCATERING = "OUTDOORCATERING";
	const IPPSERVICETYPEENUM_PACKAGINGSERV = "PACKAGINGSERV";
	const IPPSERVICETYPEENUM_PANDALSHAMIANA = "PANDALSHAMIANA";
	const IPPSERVICETYPEENUM_PHOTOGRAPHY = "PHOTOGRAPHY";
	const IPPSERVICETYPEENUM_PORT = "PORT";
	const IPPSERVICETYPEENUM_PORTSER = "PORTSER";
	const IPPSERVICETYPEENUM_PROCESSCLEARHOUSE = "PROCESSCLEARHOUSE";
	const IPPSERVICETYPEENUM_PUBLICRELATIONMGMT = "PUBLICRELATIONMGMT";
	const IPPSERVICETYPEENUM_RAILTRAVELAGNT = "RAILTRAVELAGNT";
	const IPPSERVICETYPEENUM_REALESTAGT = "REALESTAGT";
	const IPPSERVICETYPEENUM_RECOVERYAGENTS = "RECOVERYAGENTS";
	const IPPSERVICETYPEENUM_REGISTRARSERV = "REGISTRARSERV";
	const IPPSERVICETYPEENUM_RENTACAB = "RENTACAB";
	const IPPSERVICETYPEENUM_RENTINGIMMOVABLEPROP = "RENTINGIMMOVABLEPROP";
	const IPPSERVICETYPEENUM_RESIDENTIALCOMPLEXCONST = "RESIDENTIALCOMPLEXCONST";
	const IPPSERVICETYPEENUM_SALEOFSPACEFORADVT = "SALEOFSPACEFORADVT";
	const IPPSERVICETYPEENUM_SCANDTECHCONSUL = "SCANDTECHCONSUL";
	const IPPSERVICETYPEENUM_SECAG = "SECAG";
	const IPPSERVICETYPEENUM_SERVICESPROVIDEDFORTRANSACTION = "SERVICESPROVIDEDFORTRANSACTION";
	const IPPSERVICETYPEENUM_SHARETRANSFERSERV = "SHARETRANSFERSERV";
	const IPPSERVICETYPEENUM_SHIPMGMT = "SHIPMGMT";
	const IPPSERVICETYPEENUM_SITEPREP = "SITEPREP";
	const IPPSERVICETYPEENUM_SOUNDRECORD = "SOUNDRECORD";
	const IPPSERVICETYPEENUM_SPONSORSHIP = "SPONSORSHIP";
	const IPPSERVICETYPEENUM_STAG = "STAG";
	const IPPSERVICETYPEENUM_STOCKBROKING = "STOCKBROKING";
	const IPPSERVICETYPEENUM_STOCKEXCHGSERV = "STOCKEXCHGSERV";
	const IPPSERVICETYPEENUM_STORANDWAREHOUSING = "STORANDWAREHOUSING";
	const IPPSERVICETYPEENUM_SUPPLYTANGIBLEGOODS = "SUPPLYTANGIBLEGOODS";
	const IPPSERVICETYPEENUM_SURVEYANDMAPMAKING = "SURVEYANDMAPMAKING";
	const IPPSERVICETYPEENUM_SURVEYMINERALS = "SURVEYMINERALS";
	const IPPSERVICETYPEENUM_TECHINSPECTION = "TECHINSPECTION";
	const IPPSERVICETYPEENUM_TECHTESTING = "TECHTESTING";
	const IPPSERVICETYPEENUM_TELECOMMUNICATIONSERV = "TELECOMMUNICATIONSERV";
	const IPPSERVICETYPEENUM_TELEVISIONANDRADIO = "TELEVISIONANDRADIO";
	const IPPSERVICETYPEENUM_TOUROP = "TOUROP";
	const IPPSERVICETYPEENUM_TRANSPORTPIPELINE = "TRANSPORTPIPELINE";
	const IPPSERVICETYPEENUM_TRAVELAGENT = "TRAVELAGENT";
	const IPPSERVICETYPEENUM_ULIPMANAGEMENT = "ULIPMANAGEMENT";
	const IPPSERVICETYPEENUM_UNDERWRITER = "UNDERWRITER";
	const IPPSERVICETYPEENUM_VIDEOTAPEPROD = "VIDEOTAPEPROD";
	const IPPSERVICETYPEENUM_WORKSCONTRACT = "WORKSCONTRACT";

} // end class IPPServiceTypeEnum
