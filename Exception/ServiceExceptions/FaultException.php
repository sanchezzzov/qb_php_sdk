<?php
namespace qb_php_sdk\Exception\ServiceExceptions;
//require_once(PATH_SDK_ROOT . 'Exception/ServiceException.php');
use qb_php_sdk\Exception\ServiceException;

/**
 * Represents a Fault Exception.
 */
class FaultException extends ServiceException
{
    /**
     * Initializes a new instance of the FaultException class.
     *
     * @param string $message string-based exception description
     * @param string $code exception code
     */
    public function __construct($message, $code = 0)
    {
        parent::__construct($message, $code);
    }

    /**
     * Generates a string-based representation of the exception
     */
    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}

?>
