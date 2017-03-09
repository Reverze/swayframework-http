<?php

namespace Sway\Component\Http;

class Response
{
    /**
     * Response's context
     * @var string
     */
    private $context = null;
    
    /**
     * Http response's code
     * @var string
     */
    private $responseCode = "200 OK";
    
    /**
     * Http's protocol
     * @var string
     */
    private $httpProtocol = "HTTP/1.1";
    
    /**
     * Location
     * @var string
     */
    private $location = null;
    
    public function __construct(string $context = " ") 
    {
        /**
         * If response's context is passed in constructor (for example, simples responses)
         */
        if (!empty($context)){
            $this->setContext($context);
        }
        
        /**
         * Sets default response code
         */
        $this->setCode(ResponseCode::ok());
    }
    
    public function setContext(string $responseContext)
    {
        $this->context = $responseContext;       
    }
    
    /**
     * Gets response's context
     * @return string
     */
    public function getContext() : string
    {
        return $this->context;
    }
    
    
    /**
     * Sets http's response code
     * @param string $httpCode
     */
    public function setCode(string $httpCode)
    {
        $this->responseCode = $httpCode;
    }
    /**
     * Gets http's response code
     * @return string
     */
    public function getCode() : string
    {
        return $this->responseCode;
    }
    
    /**
     * Sets http's protocol
     * @param string $httpProtocol
     */
    public function setProtocol(string $httpProtocol)
    {
        $this->httpProtocol = $httpProtocol;
    }
    
    /**
     * Gets http's protocol
     * @return string
     */
    public function getProtocol() : string
    {
        return $this->httpProtocol;
    }
    
    /**
     * Sets location
     * @param string $location
     */
    public function setLocation(string $location)
    {
        $this->location = $location;
    }
    
    /**
     * Gets location
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }
    
    /**
     * Moves to specified URI
     * @param string $uri
     */
    public function redirectTo(string $uri)
    {
        $this->setLocation($uri);
        $this->setCode(ResponseCode::found());
    }
}

?>
