<?php

namespace eskandari\IranKish\Verify;

class getDailyTransaction
{

    /**
     * @var string $merchantId
     */
    protected $merchantId = null;

    /**
     * @var string $offset
     */
    protected $offset = null;

    /**
     * @var string $limit
     */
    protected $limit = null;

    /**
     * @param string $merchantId
     * @param string $offset
     * @param string $limit
     */
    public function __construct($merchantId, $offset, $limit)
    {
      $this->merchantId = $merchantId;
      $this->offset = $offset;
      $this->limit = $limit;
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
     * @return \eskandari\IranKish\Verify\getDailyTransaction
     */
    public function setMerchantId($merchantId)
    {
      $this->merchantId = $merchantId;
      return $this;
    }

    /**
     * @return string
     */
    public function getOffset()
    {
      return $this->offset;
    }

    /**
     * @param string $offset
     * @return \eskandari\IranKish\Verify\getDailyTransaction
     */
    public function setOffset($offset)
    {
      $this->offset = $offset;
      return $this;
    }

    /**
     * @return string
     */
    public function getLimit()
    {
      return $this->limit;
    }

    /**
     * @param string $limit
     * @return \eskandari\IranKish\Verify\getDailyTransaction
     */
    public function setLimit($limit)
    {
      $this->limit = $limit;
      return $this;
    }

}
