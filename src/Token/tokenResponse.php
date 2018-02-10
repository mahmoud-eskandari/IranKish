<?php

namespace eskandari\IranKish\Token;

class tokenResponse
{

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @var boolean $result
     */
    protected $result = null;

    /**
     * @var string $token
     */
    protected $token = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \eskandari\IranKish\Token\tokenResponse
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param boolean $result
     * @return \eskandari\IranKish\Token\tokenResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
      return $this->token;
    }

    /**
     * @param string $token
     * @return \eskandari\IranKish\Token\tokenResponse
     */
    public function setToken($token)
    {
      $this->token = $token;
      return $this;
    }

}
