<?php

namespace Sway\Component\Http;

use Sway\Component\Httpd\HttpdInterface;

class Request
{
    /**
     * GET method container
     * @var \Sway\Component\Http\Container\Get
     */
    protected $getContainer = null;
    
    /**
     * POST method container
     * @var \Sway\Component\Http\Container\Post
     */
    protected $postContainer = null;
    
    /**
     *
     * @var \Sway\Component\Http\Container\Cookie
     */
    protected $cookieContainer = null;
    
    public function __construct()
    {
        if (empty($this->getContainer)){
            $this->createContainerForGet();
        }
        
        if (empty($this->postContainer)){
            $this->createContainerForPost();
        }
        
        if (empty($this->cookieContainer)){
            $this->createContainerForCookie();
        }
    }
    
    /**
     * Creates container for GET
     */
    protected function createContainerForGet()
    {
        $this->getContainer = new Container\Get();
    }
    
    /**
     * Creates container for POST
     */
    protected function createContainerForPost()
    {
        $this->postContainer = new Container\Post();
    }
    
    /**
     * Creates container for Cookies
     */
    protected function createContainerForCookie()
    {
        $this->cookieContainer = new Container\Cookie();
    }
    
    /**
     * Returns GET container object
     * @return \Sway\Component\Http\Container\Get
     */
    public function getContainer()
    {
        return $this->getContainer;
    }
    
    /**
     * Returns POST container object
     * @return \Sway\Component\Http\Container\Post
     */
    public function postContainer()
    {
        return $this->postContainer;
    }
    
    /**
     * Returns COOKIE container object
     * @return \Sway\Component\Http\Container\Cookie
     */
    public function cookieContainer()
    {
        return $this->cookieContainer;
    }
    
    /**
     * Checks if GET variables is defined
     * @param string $variableName
     * @return boolean
     */
    public function has(string $variableName) : bool
    {
        return $this->getContainer->has($variableName);
    }
    
    /**
     * Gets value of GET variable
     * @param string $variableName
     */
    public function get(string $variableName)
    {
        return $this->getContainer->get($variableName);
    }
    
    /**
     * Checks if POST variable is defined
     * @param string $variableName
     * @return boolean
     */
    public function hasField(string $variableName) : bool
    {
        return $this->postContainer->has($variableName);
    }
    
    /**
     * Gets value of POST variable
     * @param string $variableName
     * @return mixed
     */
    public function getField(string $variableName)
    {
        return $this->postContainer->get($variableName);
    }
}

?>

