<?php

namespace Sway\Component\Http;

class RecordedResponse extends Response
{
    /**
     * Recorded content
     * @var string
     */
    private $recordedContent = null;
    
    /**
     * Starts a new record
     * @param Closure $callback
     */
    public function record(\Closure $callback)
    {
        /**
         * Starts output buffering
         */
        ob_start();
        /**
         * Calls callback which echo into output buffer
         */
        $callback();
        /**
         * Stores recorded output
         */
        $this->recordedContent = ob_get_contents();
        /**
         * Cleans output buffer
         */
        ob_clean();
        
        $this->setContext($this->recordedContent);
        
        /**
         * Returns itself for code shortcuts
         */
        return $this;
    }
    
}


?>
