<?php

namespace eskandari\IranKish\Verify;

class getOfflineTransaction
{

    /**
     * @var string $merchantId
     */
    protected $merchantId = null;

    /**
     * @var string $fromDate
     */
    protected $fromDate = null;

    /**
     * @var string $toDate
     */
    protected $toDate = null;

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
     * @param string $fromDate
     * @param string $toDate
     * @param string $offset
     * @param string $limit
     */
    public function __construct($merchantId, $fromDate, $toDate, $offset, $limit)
    {
      $this->merchantId = $merchantId;
      $this->fromDate = $fromDate;
      $this->toDate = $toDate;
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
     * @return \eskandari\IranKish\Verify\getOfflineTransaction
     */
    public function setMerchantId($merchantId)
    {
      $this->merchantId = $merchantId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromDate()
    {
      return $this->fromDate;
    }

    /**
     * @param string $fromDate
     * @return \eskandari\IranKish\Verify\getOfflineTransaction
     */
    public function setFromDate($fromDate)
    {
      $this->fromDate = $fromDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getToDate()
    {
      return $this->toDate;
    }

    /**
     * @param string $toDate
     * @return \eskandari\IranKish\Verify\getOfflineTransaction
     */
    public function setToDate($toDate)
    {
      $this->toDate = $toDate;
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
     * @return \eskandari\IranKish\Verify\getOfflineTransaction
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
     * @return \eskandari\IranKish\Verify\getOfflineTransaction
     */
    public function setLimit($limit)
    {
      $this->limit = $limit;
      return $this;
    }

}
