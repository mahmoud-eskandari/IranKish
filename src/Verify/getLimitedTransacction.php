<?php

namespace eskandari\IranKish\Verify;

class getLimitedTransacction
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
     * @var string $amount
     */
    protected $amount = null;

    /**
     * @param string $merchantId
     * @param string $invoiceNo
     * @param string $amount
     */
    public function __construct($merchantId, $invoiceNo, $amount)
    {
      $this->merchantId = $merchantId;
      $this->invoiceNo = $invoiceNo;
      $this->amount = $amount;
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
     * @return \eskandari\IranKish\Verify\getLimitedTransacction
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
     * @return \eskandari\IranKish\Verify\getLimitedTransacction
     */
    public function setInvoiceNo($invoiceNo)
    {
      $this->invoiceNo = $invoiceNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param string $amount
     * @return \eskandari\IranKish\Verify\getLimitedTransacction
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

}
