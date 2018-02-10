<?php

namespace eskandari\IranKish\Token;

class MakeSpecialTokenResponse
{

    /**
     * @var tokenResponse $MakeSpecialTokenResult
     */
    protected $MakeSpecialTokenResult = null;

    /**
     * @param tokenResponse $MakeSpecialTokenResult
     */
    public function __construct($MakeSpecialTokenResult)
    {
      $this->MakeSpecialTokenResult = $MakeSpecialTokenResult;
    }

    /**
     * @return tokenResponse
     */
    public function getMakeSpecialTokenResult()
    {
      return $this->MakeSpecialTokenResult;
    }

    /**
     * @param tokenResponse $MakeSpecialTokenResult
     * @return \eskandari\IranKish\Token\MakeSpecialTokenResponse
     */
    public function setMakeSpecialTokenResult($MakeSpecialTokenResult)
    {
      $this->MakeSpecialTokenResult = $MakeSpecialTokenResult;
      return $this;
    }

}
