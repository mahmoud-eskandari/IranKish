<?php

namespace eskandari\IranKish\Token;

class MakeToken
{

    /**
     * @var string $amount
     */
    protected $amount = null;

    /**
     * @var string $merchantId
     */
    protected $merchantId = null;

    /**
     * @var string $invoiceNo
     */
    protected $invoiceNo = null;

    /**
     * @var string $paymentId
     */
    protected $paymentId = null;

    /**
     * @var string $specialPaymentId
     */
    protected $specialPaymentId = null;

    /**
     * @var string $revertURL
     */
    protected $revertURL = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @param string $amount
     * @param string $merchantId
     * @param string $invoiceNo
     * @param string $paymentId
     * @param string $specialPaymentId
     * @param string $revertURL
     * @param string $description
     */
    public function __construct($amount, $merchantId, $invoiceNo, $paymentId, $specialPaymentId, $revertURL, $description)
    {
      $this->amount = $amount;
      $this->merchantId = $merchantId;
      $this->invoiceNo = $invoiceNo;
      $this->paymentId = $paymentId;
      $this->specialPaymentId = $specialPaymentId;
      $this->revertURL = $revertURL;
      $this->description = $description;
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
     * @return \eskandari\IranKish\Token\MakeToken
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
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
     * @return \eskandari\IranKish\Token\MakeToken
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
     * @return \eskandari\IranKish\Token\MakeToken
     */
    public function setInvoiceNo($invoiceNo)
    {
      $this->invoiceNo = $invoiceNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentId()
    {
      return $this->paymentId;
    }

    /**
     * @param string $paymentId
     * @return \eskandari\IranKish\Token\MakeToken
     */
    public function setPaymentId($paymentId)
    {
      $this->paymentId = $paymentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecialPaymentId()
    {
      return $this->specialPaymentId;
    }

    /**
     * @param string $specialPaymentId
     * @return \eskandari\IranKish\Token\MakeToken
     */
    public function setSpecialPaymentId($specialPaymentId)
    {
      $this->specialPaymentId = $specialPaymentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getRevertURL()
    {
      return $this->revertURL;
    }

    /**
     * @param string $revertURL
     * @return \eskandari\IranKish\Token\MakeToken
     */
    public function setRevertURL($revertURL)
    {
      $this->revertURL = $revertURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \eskandari\IranKish\Token\MakeToken
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
