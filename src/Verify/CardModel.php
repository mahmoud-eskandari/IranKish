<?php

namespace eskandari\IranKish\Verify;

class CardModel
{

    /**
     * @var string $CardNo
     */
    protected $CardNo = null;

    /**
     * @var string $HCode
     */
    protected $HCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCardNo()
    {
      return $this->CardNo;
    }

    /**
     * @param string $CardNo
     * @return \eskandari\IranKish\Verify\CardModel
     */
    public function setCardNo($CardNo)
    {
      $this->CardNo = $CardNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getHCode()
    {
      return $this->HCode;
    }

    /**
     * @param string $HCode
     * @return \eskandari\IranKish\Verify\CardModel
     */
    public function setHCode($HCode)
    {
      $this->HCode = $HCode;
      return $this;
    }

}
