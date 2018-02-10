<?php

namespace eskandari\IranKish\Token;

class MakeTokenResponse
{

    /**
     * @var tokenResponse $MakeTokenResult
     */
    protected $MakeTokenResult = null;

    /**
     * @param tokenResponse $MakeTokenResult
     */
    public function __construct($MakeTokenResult)
    {
      $this->MakeTokenResult = $MakeTokenResult;
    }

    /**
     * @return tokenResponse
     */
    public function getMakeTokenResult()
    {
      return $this->MakeTokenResult;
    }

    /**
     * @param tokenResponse $MakeTokenResult
     * @return \eskandari\IranKish\Token\MakeTokenResponse
     */
    public function setMakeTokenResult($MakeTokenResult)
    {
      $this->MakeTokenResult = $MakeTokenResult;
      return $this;
    }

}
