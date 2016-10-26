<?php
namespace qb_php_sdk\Core;
/*require_once(PATH_SDK_ROOT . 'Exception/SdkExceptions/InvalidTokenException.php');
require_once(PATH_SDK_ROOT . 'Core/CoreConstants.php');
require_once(PATH_SDK_ROOT . 'Core/Configuration/IppConfiguration.php');
require_once(PATH_SDK_ROOT . 'Core/Configuration/LocalConfigReader.php');
require_once(PATH_SDK_ROOT . 'Security/OAuthRequestValidator.php');*/
use Exception;
use qb_php_sdk\Core\Configuration\IppConfiguration;
use qb_php_sdk\Core\Configuration\LocalConfigReader;
use qb_php_sdk\Diagnostics\TraceLevel;
use qb_php_sdk\Exception\IdsException;
use qb_php_sdk\Exception\SdkExceptions\InvalidRealmException;
use qb_php_sdk\Exception\SdkExceptions\InvalidTokenException;
use qb_php_sdk\Security\RequestValidator;

/**
 * Intuit Partner Platform Service Context.
 */
class ServiceContext
{
	/**
	 * The Realm Id.
	 * @var string 
	 */
	 public $realmId;
	
	/**
	 * Intuit Service Type(QBO/QB).
	 * @var string 
	 */
	 public $serviceType;
	
	/**
	 * Base Uri for IDS Service Call.
	 * @var string 
	 */
	 public $baseserviceURL;
	
	/**
	 * Application Token.
	 * @var string 
	 */
	 private $appToken;
	
	/**
	 * this flag indicates if static create methods of this class has been invoked.
	 * @var string 
	 */
	 private $isCreateMethod;
	
	/**
	 * Temporary storage for serialization and compression values for request and reponse.
	 * @var string 
	 */
	 private $messageValues;
	 
	/**
	 * The Request validator
	 * @var RequestValidator 
	 */
	 public $requestValidator;

	 /**
	 * The Minor Version that would that returns additinoal fields from build v71
	 * @var MinorVersion 
	 */
	 public $minorVersion;
	
	/**
	 * Gets or sets the Ipp configuration.
	 * @var IppConfiguration 
	 */
	 public $IppConfiguration;
	
	
	/**
	 * Initializes a new instance of the ServiceContext class.
	 *
	 * @param string $realmId The realm id.
	 * @param IntuitServicesType $serviceType Service Type - QBO/QB.
	 * @param RequestValidator $requestValidator The request validate.
	 * @throws IdsException If arguments are null or empty.
	 * @throws InvalidRealmException If realm id is invalid.
	 * @throws InvalidTokenException If the token is invalid.
	 * @return ServiceContext Returns ServiceContext object.
	 */
	 public function __construct($realmId, $serviceType, $requestValidator = NULL)
	 {
		$this->IppConfiguration = LocalConfigReader::ReadConfiguration();

	    // Validate Parameters
	    if (empty($realmId))
	    {
			throw new \Exception('Invalid Realm.');
	        //IdsExceptionManager.HandleException(new InvalidRealmException(Properties.Resources.ParameterNotNullEmptyMessage, new ArgumentException(Properties.Resources.ParameterNotNullMessage, Properties.Resources.RealmIdParameterName)));
	    }
	
	    $this->realmId = $realmId;
	    $this->serviceType = $serviceType;
	    if ($requestValidator != NULL)
	    {
	    	$this->IppConfiguration->Security = $requestValidator;
	        $this->requestValidator = $requestValidator;
	    }
	    else
	    {
	    	// Leave unchanged - already loaded from config file.
	    	$this->IppConfiguration->Security;
	        $this->requestValidator = $this->IppConfiguration->Security;
	    }

	    $this->isCreateMethod = false;
	    $this->baseserviceURL = $this->GetBaseURL();
	    
	    return $this;
	 }
	
	/**
	 * Gets the base Uri for a QBO user.
	 *
	 * @return string Returns the base Uri endpoint for a user.
	 */
	public function GetBaseURL()
	{
		$this->IppConfiguration->Logger->RequestLog->Log(TraceLevel::Info, "Called GetBaseURL method.");
	    $baseurl = NULL;
	
	    if ($this->serviceType == IntuitServicesType::QBD)
	    {
	    	if ($this->IppConfiguration &&
	    	    $this->IppConfiguration->BaseUrl &&
	    	    $this->IppConfiguration->BaseUrl->Qbd)
			{            	    
	            $baseurl = $this->IppConfiguration->BaseUrl->Qbd . implode(CoreConstants::SLASH_CHAR, array(CoreConstants::VERSION)) . CoreConstants::SLASH_CHAR;
	        }
	
	        if (empty($baseurl))
	        {
	            $baseurl = QBD_BASEURL;
	        }
	
	        //this.IppConfiguration.Logger.CustomLogger.Log(TraceLevel.Info, string.Format(CultureInfo.InvariantCulture, "BaseUrl set for QBD Service Type: {0}.", baseurl));
	    }
	    else if ($this->serviceType == IntuitServicesType::QBO)
	    {
	    	if ($this->IppConfiguration &&
	    	    $this->IppConfiguration->BaseUrl &&
	    	    $this->IppConfiguration->BaseUrl->Qbo)
			{
				$baseurl = $this->IppConfiguration->BaseUrl->Qbo . implode(CoreConstants::SLASH_CHAR, array(CoreConstants::VERSION)) . CoreConstants::SLASH_CHAR;
			}            	    
	
	        if (empty($baseurl))
	        {
	            $baseurl = CoreConstants::QBO_BASEURL;
	        }
			
	        //this.IppConfiguration.Logger.CustomLogger.Log(TraceLevel.Info, string.Format(CultureInfo.InvariantCulture, "BaseUrl set for QBD Service Type: {0}.", baseurl));
	    }
	    else if ($this->serviceType == IntuitServicesType::IPP)
	    {
	    	if ($this->IppConfiguration &&
	    	    $this->IppConfiguration->BaseUrl &&
	    	    $this->IppConfiguration->BaseUrl->Ipp)
			{            	    
	            $baseurl = $this->IppConfiguration->BaseUrl->Ipp;
	        }
	        
	        if (empty($baseurl))
	        {
	            $baseurl = CoreConstants::IPP_BASEURL;
	        }
	
	        //this.IppConfiguration.Logger.CustomLogger.Log(TraceLevel.Info, string.Format(CultureInfo.InvariantCulture, "BaseUrl set for Intuit Platform Service Type: {0}.", baseurl));
	    }
	
	    return $baseurl;
	}

	/**
	 * Populates the values of the service context like realmId, service type to the Data Services being targetted
	 */
	public function UseDataServices()
	{
	    if ($this->isCreateMethod)
	    {
	        if ($this->serviceType == NULL)
	        {
	            throw new Exception('Service type not set.');
	        }
	        else if (empty($this->realmId))
	        {
	            throw new Exception('Realm ID not set.');
	        }
	
	        // Get the base Uri for the new service type
	        $this->baseserviceURL = $this->GetBaseURL();
	        $this->RevertConfiguration();
	    }
	}
	
	/**
	 * Populates the values of the service context like service type and base url to Platform Services.
	 */
	public function UsePlatformServices()
	{
		$this->serviceType = IntuitServicesType::IPP;
		$this->baseserviceURL = $this->GetBaseURL();
	}

	public function disableSSlCheck() {
		$this->IppConfiguration->SSLCheckStatus = false;
	}
}
