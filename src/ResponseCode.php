<?php

namespace Sway\Component\Http;

class ResponseCode
{
    /**
     * Response code for successfull request (for default)
     * @return string
     */
    public static function ok() : string
    {
        return "200 OK";
    }
    
    /**
     * A new response has been created
     * @return string
     */
    public static function created() : string
    {
        return "201 Created";
    }
    
    /**
     * The request has been accepted for processing, but the processing has not been completed
     * @return string
     */
    public static function accepted() : string
    {
        return "202 Accepted";
    }
    
    /**
     * 
     * @return string
     */
    public static function nonAuthoritative() : string
    {
        return "203 Non-Authoritative Information";
    }
    
    /**
     * Request successfully processed, but response is empty
     * @return string
     */
    public static function noContent() : string
    {
        return "204 No Content";
    }
    
    /**
     * Response is empty, but requester must reset the document view
     * @return string
     */
    public static function resetContent() : string
    {
        return "205 Reset content";
    }
    
    /**
     * 
     * @return string
     */
    public static function partialContent() : string
    {
        return "206 Partial Content";
    }
    
    /**
     * This and all future requests should be directed to the given URI
     * @return string
     */
    public static function moved() : string
    {
        return "301 Moved";
    }
    
    /**
     * 
     * @return string
     */
    public static function found() : string
    {
        return "302 Found";
    }
    
    /**
     * 
     * @return string
     */
    public static function seeOther() : string
    {
        return "303 See Other";
    }
    
    /**
     * 
     * @return string
     */
    public static function notModified() : string
    {
        return "304 Not Modified";
    }
    
    /**
     * 
     * @return string
     */
    public static function useProxy() : string
    {
        return "305 Use Proxy";
    }
    
    /**
     * 
     * @return string
     */
    public static function temponaryRedirect() : string
    {
        return "307 Temponary Redirect";
    }
    
    /**
     * 
     * @return string
     */
    public static function permanentRedirect() : string
    {
        return "308 Permament Redirect";
    }
    
    /**
     * 
     * @return string
     */
    public static function badRequest() : string
    {
        return "400 Bad Request";
    }
    
    /**
     * 
     * @return string
     */
    public static function unauthorized() : string
    {
        return "401 Unauthorized";
    }
    
    /**
     * 
     * @return string
     */
    public static function forbidden() : string
    {
        return "403 Forbidden";
    }
    
    /**
     * 
     * @return string
     */
    public static function notFound() : string
    {
        return "404 Not Found";
    }
    
    /**
     * 
     * @return string
     */
    public static function methodNotAllowed() : string
    {
        return "405 Method Not Allowed";
    }
    
    /**
     * 
     * @return string
     */
    public static function notAcceptable() : string
    {
        return "406 Not Acceptable";
    }
    
}


?>
