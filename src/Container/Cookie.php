<?php

namespace Sway\Component\Http\Container;


class Cookie extends Container
{
    /**
     * Creates container for cookies
     * @param array $initialVariables
     */
    public function __construct(array $initialVariables = null) 
    {
        if (isset($_COOKIE)){
            parent::__construct((array) $_COOKIE);
        }
    }
    
    /**
     * Removes specified cookie
     * @param string $cookieName
     */
    public function remove(string $cookieName)
    {
        /**
         * Removes cookie from container
         */
        parent::remove($cookieName);
        
        /**
         * Sets cookie as expired
         */
        setcookie($cookieName, null, -1, '/');     
    }
}


?>