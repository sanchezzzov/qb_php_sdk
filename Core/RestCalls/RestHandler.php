<?php
namespace qb_php_sdk\Core\RestCalls;
use qb_php_sdk\Core\CoreHelper;
use qb_php_sdk\Core\ICompressor;
use qb_php_sdk\Core\ServiceContext;

/*require_once(PATH_SDK_ROOT . 'Core/CoreHelper.php');
require_once(PATH_SDK_ROOT . 'Core/RestCalls/Compression/DataCompressionFormat.php');
require_once(PATH_SDK_ROOT . 'Core/RestCalls/Compression/GZipCompressor.php');
require_once(PATH_SDK_ROOT . 'Core/RestCalls/Compression/DeflateCompressor.php');*/

/**
 * Rest Handler class.
 */
class RestHandler
{

    /**
     * The contex
     *
     * @var ServiceContext
     */
    protected $serviceContext;

    /**
     * Response serializer.
     *
     * @var IEntitySerializer
     */
    protected $ResponseSerializer;

    /**
     * Gets or sets Request compressor.
     *
     * @var ICompressor
     */
    protected $RequestCompressor;

    /**
     * Gets or sets Response compressor.
     *
     * @var ICompressor
     */
    protected $ResponseCompressor;

    /**
     * Gets or sets Request serializer.
     *
     * @var IEntitySerializer
     */
    protected $RequestSerializer;

    /**
     * Initializes a new instance of the RestHandler class.
     *
     * @param ServiceContext $context The Service Context
     */
    protected function __construct($context)
    {
        $this->serviceContext     = $context;
        $this->RequestCompressor  = CoreHelper::GetCompressor($this->serviceContext, true);
        $this->ResponseCompressor = CoreHelper::GetCompressor($this->serviceContext, false);
        $this->RequestSerializer  = CoreHelper::GetSerializer($this->serviceContext, true);
        $this->ResponseSerializer = CoreHelper::GetSerializer($this->serviceContext, false);
        $this->RequestLogging     = CoreHelper::GetRequestLogging($this->serviceContext);
    }
}


?>
