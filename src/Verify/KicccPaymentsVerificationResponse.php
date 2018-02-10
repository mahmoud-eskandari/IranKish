<?php

namespace eskandari\IranKish\Verify;

class KicccPaymentsVerificationResponse
{

    /**
     * @var int $KicccPaymentsVerificationResult
     */
    protected $KicccPaymentsVerificationResult = null;

    /**
     * @param int $KicccPaymentsVerificationResult
     */
    public function __construct($KicccPaymentsVerificationResult)
    {
      $this->KicccPaymentsVerificationResult = $KicccPaymentsVerificationResult;
    }

    /**
     * @return int
     */
    public function getKicccPaymentsVerificationResult()
    {
      return $this->KicccPaymentsVerificationResult;
    }

    /**
     * @param int $KicccPaymentsVerificationResult
     * @return \eskandari\IranKish\Verify\KicccPaymentsVerificationResponse
     */
    public function setKicccPaymentsVerificationResult($KicccPaymentsVerificationResult)
    {
      $this->KicccPaymentsVerificationResult = $KicccPaymentsVerificationResult;
      return $this;
    }

}
