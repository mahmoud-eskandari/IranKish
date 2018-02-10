<?php

namespace eskandari\IranKish\Verify;

class GetCardsPerKey
{

    /**
     * @var string $merchantId
     */
    protected $merchantId = null;

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @param string $merchantId
     * @param string $key
     */
    public function __construct($merchantId, $key)
    {
      $this->merchantId = $merchantId;
      $this->key = $key;
    }

    /**
     * @return string
     */
    public function getMerchantId()
    {
      return $this->merchantId;
    }

    /**
     * @param string $merchantId
     * @return \eskandari\IranKish\Verify\GetCardsPerKey
     */
    public function setMerchantId($merchantId)
    {
      $this->merchantId = $merchantId;
      return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param string $key
     * @return \eskandari\IranKish\Verify\GetCardsPerKey
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

}
