<?php

namespace eskandari\IranKish\Verify;

class getTransaction
{

    /**
     * @var string $merchantId
     */
    protected $merchantId = null;

    /**
     * @var string $invoiceNo
     */
    protected $invoiceNo = null;

    /**
     * @var string $referenceNo
     */
    protected $referenceNo = null;

    /**
     * @param string $merchantId
     * @param string $invoiceNo
     * @param string $referenceNo
     */
    public function __construct($merchantId, $invoiceNo, $referenceNo)
    {
      $this->merchantId = $merchantId;
      $this->invoiceNo = $invoiceNo;
      $this->referenceNo = $referenceNo;
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
     * @return \eskandari\IranKish\Verify\getTransaction
     */
    public function setMerchantId($merchantId)
    {
      $this->merchantId = $merchantId;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNo()
    {
      return $this->invoiceNo;
    }

    /**
     * @param string $invoiceNo
     * @return \eskandari\IranKish\Verify\getTransaction
     */
    public function setInvoiceNo($invoiceNo)
    {
      $this->invoiceNo = $invoiceNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceNo()
    {
      return $this->referenceNo;
    }

    /**
     * @param string $referenceNo
     * @return \eskandari\IranKish\Verify\getTransaction
     */
    public function setReferenceNo($referenceNo)
    {
      $this->referenceNo = $referenceNo;
      return $this;
    }

}
