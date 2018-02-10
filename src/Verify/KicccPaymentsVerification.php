<?php

namespace eskandari\IranKish\Verify;

class KicccPaymentsVerification
{

    /**
     * @var string $token
     */
    protected $token = null;

    /**
     * @var string $merchantId
     */
    protected $merchantId = null;

    /**
     * @var string $referenceNumber
     */
    protected $referenceNumber = null;

    /**
     * @var string $sha1Key
     */
    protected $sha1Key = null;

    /**
     * @param string $token
     * @param string $merchantId
     * @param string $referenceNumber
     * @param string $sha1Key
     */
    public function __construct($token, $merchantId, $referenceNumber, $sha1Key)
    {
      $this->token = $token;
      $this->merchantId = $merchantId;
      $this->referenceNumber = $referenceNumber;
      $this->sha1Key = $sha1Key;
    }

    /**
     * @return string
     */
    public function getToken()
    {
      return $this->token;
    }

    /**
     * @param string $token
     * @return \eskandari\IranKish\Verify\KicccPaymentsVerification
     */
    public function setToken($token)
    {
      $this->token = $token;
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
     * @return \eskandari\IranKish\Verify\KicccPaymentsVerification
     */
    public function setMerchantId($merchantId)
    {
      $this->merchantId = $merchantId;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceNumber()
    {
      return $this->referenceNumber;
    }

    /**
     * @param string $referenceNumber
     * @return \eskandari\IranKish\Verify\KicccPaymentsVerification
     */
    public function setReferenceNumber($referenceNumber)
    {
      $this->referenceNumber = $referenceNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSha1Key()
    {
      return $this->sha1Key;
    }

    /**
     * @param string $sha1Key
     * @return \eskandari\IranKish\Verify\KicccPaymentsVerification
     */
    public function setSha1Key($sha1Key)
    {
      $this->sha1Key = $sha1Key;
      return $this;
    }

}
