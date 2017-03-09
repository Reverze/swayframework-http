<?php

namespace Sway\Component\Http\Container;

use Sway\Component\Http\Container\Exception;

class Container
{
    /**
     * Array which contains variables (key => value)
     * @var array
     */
    protected $variables = array();
    
    
    public function __construct(array $initialVariables = null) 
    {
        if (!empty($initialVariables)){
            $this->variables = (array) $initialVariables;
        }
    }
    
    /**
     * Gets value of specified variable
     * @param string $name Variable's name
     * @return mixed
     * @throws Exception\ContainerException
     */
    public function get(string $name)
    {
        if (array_key_exists($name, $this->variables)){
            return $this->variables[$name];
        }
        else{
            throw new Exception\ContainerException (sprintf("Variables '%s' not found", $name));
        }
    }
    
    /**
     * Adds variable into container
     * @param string $name
     * @param mixed $value
     */
    public function add(string $name, $value)
    {
        $this->variables[$name] = $value;
    }
    
    /**
     * Removes variable from container
     * @param string $name
     */
    public function remove(string $name)
    {
        if (isset($this->variables[$name])){
            unset ($this->variables[$name]);
        }
    }
    
    /**
     * Checks if variable is defined
     * @param string $name
     * @return boolean
     */
    public function has(string $name)
    {
        return isset($this->variables[$name]);
    }
    
    
}

?>
