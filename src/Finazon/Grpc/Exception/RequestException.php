<?php
namespace Finazon\Grpc\Exception;

class RequestException extends BaseException
{
    protected string $method;
    
    public function __construct(string $message = '', int $code = 0, string $method = '') 
    {
        parent::__construct($message, $code);
        $this->message = "$message";
        $this->code = $code;
        $this->method = $method;
    }
    
    public function getMethod() : string
    {
        return $this->method;
    }
}