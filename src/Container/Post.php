<?php

namespace Sway\Component\Http\Container;


class Post extends Container
{
    /**
     * Creates container for POST method using PHP's globals
     */
    public function __construct() 
    {
        if (isset($_POST)){
            parent::__construct((array) $_POST);
        }
    }
  
    
}


?>
