<?php

namespace Sway\Component\Http;

class HttpProtocol
{
    /**
     * Gets string for identify HTTP/1.1
     * @return string
     */
    public static function second() : string
    {
        return "HTTP/1.1";
    }
    
    /**
     * Gets string for identify HTTP 1.0
     * @return string
     */
    public static function first() : string
    {
        return "HTTP/1.0";
    }
}


?>

