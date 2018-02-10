<?php

namespace eskandari\IranKish\Verify;

class transactionModel
{

    /**
     * @var string $AMOUNT
     */
    protected $AMOUNT = null;

    /**
     * @var string $CARDNO
     */
    protected $CARDNO = null;

    /**
     * @var string $EXTRAPARAM1
     */
    protected $EXTRAPARAM1 = null;

    /**
     * @var string $EXTRAPARAM2
     */
    protected $EXTRAPARAM2 = null;

    /**
     * @var string $EXTRAPARAM3
     */
    protected $EXTRAPARAM3 = null;

    /**
     * @var string $EXTRAPARAM4
     */
    protected $EXTRAPARAM4 = null;

    /**
     * @var string $MERCHANTID
     */
    protected $MERCHANTID = null;

    /**
     * @var string $PAYMENTID
     */
    protected $PAYMENTID = null;

    /**
     * @var string $REFERENCENUMBER
     */
    protected $REFERENCENUMBER = null;

    /**
     * @var string $RESULTCODE
     */
    protected $RESULTCODE = null;

    /**
     * @var string $ROWNUMBER
     */
    protected $ROWNUMBER = null;

    /**
     * @var string $SETTLEMENTDATE
     */
    protected $SETTLEMENTDATE = null;

    /**
     * @var string $SPECIALPAYMENTID
     */
    protected $SPECIALPAYMENTID = null;

    /**
     * @var string $TRANSDATE
     */
    protected $TRANSDATE = null;

    /**
     * @var string $VERIFYDATE
     */
    protected $VERIFYDATE = null;

    /**
     * @var string $VERIFYRESPONSE
     */
    protected $VERIFYRESPONSE = null;

    /**
     * @var string $invoceNo
     */
    protected $invoceNo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAMOUNT()
    {
      return $this->AMOUNT;
    }

    /**
     * @param string $AMOUNT
     * @return \eskandari\IranKish\Verify\transactionModel
     */
    public function setAMOUNT($AMOUNT)
    {
      $this->AMOUNT = $AMOUNT;
      return $this;
    }

    /**
     * @return string
     */
    public function getCARDNO()
    {
      return $this->CARDNO;
    }

    /**
     * @param string $CARDNO
     * @return \eskandari\IranKish\Verify\transactionModel
     */
    public function setCARDNO($CARDNO)
    {
      $this->CARDNO = $CARDNO;
      return $this;
    }

    /**
     * @return string
     */
    public function getEXTRAPARAM1()
    {
      return $this->EXTRAPARAM1;
    }

    /**
     * @param string $EXTRAPARAM1
     * @return \eskandari\IranKish\Verify\transactionModel
     */
    public function setEXTRAPARAM1($EXTRAPARAM1)
    {
      $this->EXTRAPARAM1 = $EXTRAPARAM1;
      return $this;
    }

    /**
     * @return string
     */
    public function getEXTRAPARAM2()
    {
      return $this->EXTRAPARAM2;
    }

    /**
     * @param string $EXTRAPARAM2
     * @return \eskandari\IranKish\Verify\transactionModel
     */
    public function setEXTRAPARAM2($EXTRAPARAM2)
    {
      $this->EXTRAPARAM2 = $EXTRAPARAM2;
      return $this;
    }

    /**
     * @return string
     */
    public function getEXTRAPARAM3()
    {
      return $this->EXTRAPARAM3;
    }

    /**
     * @param string $EXTRAPARAM3
     * @return \eskandari\IranKish\Verify\transactionModel
     */
    public function setEXTRAPARAM3($EXTRAPARAM3)
    {
      $this->EXTRAPARAM3 = $EXTRAPARAM3;
      return $this;
    }

    /**
     * @return string
     */
    public function getEXTRAPARAM4()
    {
      return $this->EXTRAPARAM4;
    }

    /**
     * @param string $EXTRAPARAM4
     * @return \eskandari\IranKish\Verify\transactionModel
     */
    public function setEXTRAPARAM4($EXTRAPARAM4)
    {
      $this->EXTRAPARAM4 = $EXTRAPARAM4;
      return $this;
    }

    /**
     * @return string
     */
    public function getMERCHANTID()
    {
      return $this->MERCHANTID;
    }

    /**
     * @param string $MERCHANTID
     * @return \eskandari\IranKish\Verify\transactionModel
     */
    public function setMERCHANTID($MERCHANTID)
    {
      $this->MERCHANTID = $MERCHANTID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPAYMENTID()
    {
      return $this->PAYMENTID;
    }

    /**
     * @param string $PAYMENTID
     * @return \eskandari\IranKish\Verify\transactionModel
     */
    public function setPAYMENTID($PAYMENTID)
    {
      $this->PAYMENTID = $PAYMENTID;
      return $this;
    }

    /**
     * @return string
     */
    public function getREFERENCENUMBER()
    {
      return $this->REFERENCENUMBER;
    }

    /**
     * @param string $REFERENCENUMBER
     * @return \eskandari\IranKish\Verify\transactionModel
     */
    public function setREFERENCENUMBER($REFERENCENUMBER)
    {
      $this->REFERENCENUMBER = $REFERENCENUMBER;
      return $this;
    }

    /**
     * @return string
     */
    public function getRESULTCODE()
    {
      return $this->RESULTCODE;
    }

    /**
     * @param string $RESULTCODE
     * @return \eskandari\IranKish\Verify\transactionModel
     */
    public function setRESULTCODE($RESULTCODE)
    {
      $this->RESULTCODE = $RESULTCODE;
      return $this;
    }

    /**
     * @return string
     */
    public function getROWNUMBER()
    {
      return $this->ROWNUMBER;
    }

    /**
     * @param string $ROWNUMBER
     * @return \eskandari\IranKish\Verify\transactionModel
     */
    public function setROWNUMBER($ROWNUMBER)
    {
      $this->ROWNUMBER = $ROWNUMBER;
      return $this;
    }

    /**
     * @return string
     */
    public function getSETTLEMENTDATE()
    {
      return $this->SETTLEMENTDATE;
    }

    /**
     * @param string $SETTLEMENTDATE
     * @return \eskandari\IranKish\Verify\transactionModel
     */
    public function setSETTLEMENTDATE($SETTLEMENTDATE)
    {
      $this->SETTLEMENTDATE = $SETTLEMENTDATE;
      return $this;
    }

    /**
     * @return string
     */
    public function getSPECIALPAYMENTID()
    {
      return $this->SPECIALPAYMENTID;
    }

    /**
     * @param string $SPECIALPAYMENTID
     * @return \eskandari\IranKish\Verify\transactionModel
     */
    public function setSPECIALPAYMENTID($SPECIALPAYMENTID)
    {
      $this->SPECIALPAYMENTID = $SPECIALPAYMENTID;
      return $this;
    }

    /**
     * @return string
     */
    public function getTRANSDATE()
    {
      return $this->TRANSDATE;
    }

    /**
     * @param string $TRANSDATE
     * @return \eskandari\IranKish\Verify\transactionModel
     */
    public function setTRANSDATE($TRANSDATE)
    {
      $this->TRANSDATE = $TRANSDATE;
      return $this;
    }

    /**
     * @return string
     */
    public function getVERIFYDATE()
    {
      return $this->VERIFYDATE;
    }

    /**
     * @param string $VERIFYDATE
     * @return \eskandari\IranKish\Verify\transactionModel
     */
    public function setVERIFYDATE($VERIFYDATE)
    {
      $this->VERIFYDATE = $VERIFYDATE;
      return $this;
    }

    /**
     * @return string
     */
    public function getVERIFYRESPONSE()
    {
      return $this->VERIFYRESPONSE;
    }

    /**
     * @param string $VERIFYRESPONSE
     * @return \eskandari\IranKish\Verify\transactionModel
     */
    public function setVERIFYRESPONSE($VERIFYRESPONSE)
    {
      $this->VERIFYRESPONSE = $VERIFYRESPONSE;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoceNo()
    {
      return $this->invoceNo;
    }

    /**
     * @param string $invoceNo
     * @return \eskandari\IranKish\Verify\transactionModel
     */
    public function setInvoceNo($invoceNo)
    {
      $this->invoceNo = $invoceNo;
      return $this;
    }

}
