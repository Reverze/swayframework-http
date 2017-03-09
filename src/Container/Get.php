<?php

namespace Sway\Component\Http\Container;


class Get extends Container
{
    /**
     * Creates container for GET variables using default PHP globals
     * @param array $initialVariables
     */
    public function __construct(array $initialVariables = null) 
    {
        if (isset($_GET)){
            parent::__construct((array) $_GET);
        }
    }
    
    
}

?>
