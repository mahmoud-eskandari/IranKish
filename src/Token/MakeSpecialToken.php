<?php

namespace eskandari\IranKish\Token;

class MakeSpecialToken
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
     * @var string $extraParam1
     */
    protected $extraParam1 = null;

    /**
     * @var string $extraParam2
     */
    protected $extraParam2 = null;

    /**
     * @var string $extraParam3
     */
    protected $extraParam3 = null;

    /**
     * @var string $extraParam4
     */
    protected $extraParam4 = null;

    /**
     * @param string $amount
     * @param string $merchantId
     * @param string $invoiceNo
     * @param string $paymentId
     * @param string $specialPaymentId
     * @param string $revertURL
     * @param string $description
     * @param string $extraParam1
     * @param string $extraParam2
     * @param string $extraParam3
     * @param string $extraParam4
     */
    public function __construct($amount, $merchantId, $invoiceNo, $paymentId, $specialPaymentId, $revertURL, $description, $extraParam1, $extraParam2, $extraParam3, $extraParam4)
    {
      $this->amount = $amount;
      $this->merchantId = $merchantId;
      $this->invoiceNo = $invoiceNo;
      $this->paymentId = $paymentId;
      $this->specialPaymentId = $specialPaymentId;
      $this->revertURL = $revertURL;
      $this->description = $description;
      $this->extraParam1 = $extraParam1;
      $this->extraParam2 = $extraParam2;
      $this->extraParam3 = $extraParam3;
      $this->extraParam4 = $extraParam4;
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
     * @return \eskandari\IranKish\Token\MakeSpecialToken
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
     * @return \eskandari\IranKish\Token\MakeSpecialToken
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
     * @return \eskandari\IranKish\Token\MakeSpecialToken
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
     * @return \eskandari\IranKish\Token\MakeSpecialToken
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
     * @return \eskandari\IranKish\Token\MakeSpecialToken
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
     * @return \eskandari\IranKish\Token\MakeSpecialToken
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
     * @return \eskandari\IranKish\Token\MakeSpecialToken
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtraParam1()
    {
      return $this->extraParam1;
    }

    /**
     * @param string $extraParam1
     * @return \eskandari\IranKish\Token\MakeSpecialToken
     */
    public function setExtraParam1($extraParam1)
    {
      $this->extraParam1 = $extraParam1;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtraParam2()
    {
      return $this->extraParam2;
    }

    /**
     * @param string $extraParam2
     * @return \eskandari\IranKish\Token\MakeSpecialToken
     */
    public function setExtraParam2($extraParam2)
    {
      $this->extraParam2 = $extraParam2;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtraParam3()
    {
      return $this->extraParam3;
    }

    /**
     * @param string $extraParam3
     * @return \eskandari\IranKish\Token\MakeSpecialToken
     */
    public function setExtraParam3($extraParam3)
    {
      $this->extraParam3 = $extraParam3;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtraParam4()
    {
      return $this->extraParam4;
    }

    /**
     * @param string $extraParam4
     * @return \eskandari\IranKish\Token\MakeSpecialToken
     */
    public function setExtraParam4($extraParam4)
    {
      $this->extraParam4 = $extraParam4;
      return $this;
    }

}
